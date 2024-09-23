<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;
use app\models\ResumeData;
use thiagoalessio\TesseractOCR\TesseractOCR;

class ResumeController extends Controller
{
    public function actionIndex()
    {
        $models = ResumeData::find()->all();
        return $this->render('index', [
            'models' => $models,
        ]);
    }

    public function actionUpload()
    {
        $model = new ResumeData();

        if ($model->load(Yii::$app->request->post())) {
            $model->resumeFile = UploadedFile::getInstance($model, 'resumeFile');

            if ($model->resumeFile && !$model->resumeFile->hasError) {
                $uploadDir = Yii::getAlias('@webroot/uploads/');
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                $filePath = $uploadDir . $model->resumeFile->baseName . '.' . $model->resumeFile->extension;

                if ($model->resumeFile->saveAs($filePath)) {
                    // Convert PDF to images
                    $imagePaths = [];
                    if (strtolower($model->resumeFile->extension) === 'pdf') {
                        $imagePaths = $this->convertPdfToImages($filePath);
                    } else {
                        $imagePaths[] = $filePath;
                    }

                    // Perform OCR on each image
                    $ocrText = '';
                    foreach ($imagePaths as $imagePath) {
                        $ocrText .= (new TesseractOCR($imagePath))->run() . "\n";
                    }

                    // Extract data and store in session
                    $resumeData = $this->extractResumeData($ocrText);
                    Yii::$app->session->set('resumeData', $resumeData);
                    Yii::$app->session->set('rawOcrText', $ocrText); // Store raw OCR data

                    return $this->redirect(['edit']);
                } else {
                    Yii::$app->session->setFlash('error', 'Failed to save the uploaded file.');
                }
            } else {
                Yii::$app->session->setFlash('error', 'File upload failed or no file uploaded.');
            }
        }

        return $this->render('upload', ['model' => $model]);
    }

    public function actionEdit()
    {
        $resumeData = Yii::$app->session->get('resumeData', []);
        $rawOcrText = Yii::$app->session->get('rawOcrText', ''); // Retrieve raw OCR data
        $model = new ResumeData();

        if ($resumeData) {
            // Load existing resume data into the model
            $model->attributes = $resumeData;
        }

        if ($model->load(Yii::$app->request->post())) {
            // Validate the loaded data
            if ($model->validate()) {
                // Save the data to the database
                if ($model->save()) {
                    Yii::$app->session->setFlash('success', 'Resume data saved successfully.');
                    return $this->redirect(['success']);
                } else {
                    Yii::$app->session->setFlash('error', 'Failed to save resume data.');
                }
            } else {
                // If validation failed, display errors
                Yii::$app->session->setFlash('error', 'Validation failed: ' . json_encode($model->errors));
            }
        }

        return $this->render('form', [
            'model' => $model,
            'rawOcrText' => $rawOcrText, // Pass raw OCR text to the view
        ]);
    }

    public function actionSuccess()
    {
        return $this->render('success');
    }

    private function convertPdfToImages($pdfPath)
    {
        $imagePaths = [];
        $tempDir = Yii::getAlias('@runtime/ocr/');
        if (!is_dir($tempDir)) {
            mkdir($tempDir, 0777, true);
        }

        try {
            $outputPrefix = $tempDir . 'page_';
            // Converting PDF to images using pdftoppm
            $command = "pdftoppm -jpeg -r 300 \"$pdfPath\" \"$outputPrefix\" 2>&1";
            $output = [];
            $returnVar = 0;
            exec($command, $output, $returnVar);

            if ($returnVar !== 0) {
                throw new \Exception('pdftoppm failed with error code ' . $returnVar . ': ' . implode("\n", $output));
            }

            // Collect the generated images
            foreach (glob($tempDir . "page_*.jpg") as $imageFile) {
                $imagePaths[] = $imageFile;
            }
        } catch (\Exception $e) {
            Yii::$app->session->setFlash('error', 'Error converting PDF to images: ' . $e->getMessage());
        }

        return $imagePaths;
    }

    private function extractResumeData($ocrText)
    {
        $resumeData = [];
        $patterns = [
            'name' => '/Name:\s*([^\r\n]+)/i',
            'email' => '/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/i',
            'phone' => '/(?:\+?\d{1,4}[\s.-]?)?\(?\d{1,5}\)?[\s.-]?\d{1,4}[\s.-]?\d{1,4}(?:[\s.-]?\d{1,9})?/i',
            'education' => '/Education:\s*([^\r\n]+)/i',
            'experience' => '/Experience:\s*([^\r\n]+)/i',
            'skills' => '/Skills:\s*([^\r\n]+)/i',
        ];

        foreach ($patterns as $key => $pattern) {
            preg_match($pattern, $ocrText, $matches);
            $resumeData[$key] = $matches[1] ?? '';
        }

        return $resumeData;
    }
}

