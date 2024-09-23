<?php

namespace app\controllers;

use app\models\Educations;
use app\models\Genders;
use Yii;
use app\models\Intern;
use app\models\JobLists;
use app\models\Relationships;
use app\models\States;
use app\models\Status;
use app\models\Users;
use thiagoalessio\TesseractOCR\TesseractOCR;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;


/**
 * InternController implements the CRUD actions for Intern model.
 */
class InternController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Intern models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = Intern::find()->all();
        $query = Intern::find();
        $totalCount = $query->count();

        $pageSize = 5;
        $page = Yii::$app->request->get('page', 1) - 1; // current page
        $offset = $page * $pageSize;

        $interns = $query->offset($offset)->limit($pageSize)->all();

        return $this->render('index', [
            'model' => $model,
            'interns' => $interns,
            'totalCount' => $totalCount,
            'pageSize' => $pageSize,
            'currentPage' => $page + 1,
        ]);
    }

    /**
     * Displays a single Intern model.
     * @param int $id Intern ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionChoice()
    {
        $models = Intern::find()->all();
        return $this->render('choice', [
            'models' => $models,
        ]);
    }

    public function actionUpload()
    {
        $model = new Intern();

        if ($model->load(Yii::$app->request->post())) {
            $model->resumeFile = UploadedFile::getInstance($model, 'resumeFile');

            if ($model->resumeFile && !$model->resumeFile->hasError) {
                $uploadDir = Yii::getAlias('@webroot/uploads/');
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                $filePath = $uploadDir . $model->resumeFile->baseName . '.' . $model->resumeFile->extension;

                if ($model->resumeFile->saveAs($filePath)) {
                    // Convert PDF to images if needed
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
        $model = new Intern();
    
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

        // Fetch job types for dropdown list
        $Gender = Genders::find()->all();
        $State = States::find()->all();
        $Stats = Status::find()->all();
        $Relay = Relationships::find()->all();
        $Level = Educations::find()->all();
        $userGender = \yii\helpers\ArrayHelper::map($Gender, 'id', 'gender');
        $stateList = \yii\helpers\ArrayHelper::map($State, 'id', 'state_name');
        $statsList = \yii\helpers\ArrayHelper::map($Stats, 'id', 'status_name');
        $relayList = \yii\helpers\ArrayHelper::map($Relay, 'id', 'relationship_name');
        $educationList = \yii\helpers\ArrayHelper::map($Level, 'id', 'level_name');
    
        return $this->render('_form', [
            'model' => $model,
            'userGender' => $userGender,
            'stateList' => $stateList,
            'statsList' => $statsList,
            'relayList' => $relayList,
            'educationList' => $educationList,
        ]);
    }
    
    /**
     * Creates a new Intern model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
     public function actionApply()
     {
         $model = new Intern();
     
         if ($this->request->isPost) {
             $model->load($this->request->post());
     
             // Handle uploaded files
             $imageFile = UploadedFile::getInstance($model, 'image');
             $universityFile = UploadedFile::getInstance($model, 'university_letter');
             $resumeFile = UploadedFile::getInstance($model, 'resume');
             $coverFile = UploadedFile::getInstance($model, 'cover_letter');
         
             // Perform validation
             if ($model->validate()) {
                 // Validate file extensions
                 if ($imageFile && !$this->isAllowedExtension($imageFile->extension, ['png', 'jpg', 'jpeg', 'gif'])) {
                     $model->addError('image', 'Only files with extensions png, jpg, jpeg, gif are allowed.');
                 }
                 if ($universityFile && !$this->isAllowedExtension($universityFile->extension, ['pdf', 'doc', 'docx'])) {
                     $model->addError('university_letter', 'Only files with extensions pdf, doc, docx are allowed.');
                 }
                 if ($resumeFile && !$this->isAllowedExtension($resumeFile->extension, ['pdf', 'doc', 'docx'])) {
                     $model->addError('resume', 'Only files with extensions pdf, doc, docx are allowed.');
                 }
                 if ($coverFile && !$this->isAllowedExtension($coverFile->extension, ['pdf', 'doc', 'docx'])) {
                     $model->addError('cover_letter', 'Only files with extensions pdf, doc, docx are allowed.');
                 }
     
                 // If no errors, save the model and the files
                 if (!$model->hasErrors() && $model->save()) {
                     // Save image file
                     if ($imageFile) {
                         $fileName = $this->generateFileName($imageFile);
                         $imageFile->saveAs(Yii::getAlias('@webroot') . '/theme/adminux/html/assets/img/' . $fileName);
                         $model->image = $fileName;
                         $model->save(false);
                     }
                     // Save university letter
                     if ($universityFile) {
                         $fileName = $this->generateFileName($universityFile);
                         $universityFile->saveAs(Yii::getAlias('@webroot') . '/theme/adminux/html/assets/university_letter/' . $fileName);
                         $model->university_letter = $fileName;
                         $model->save(false);
                     }
                     // Save resume
                     if ($resumeFile) {
                         $fileName = $this->generateFileName($resumeFile);
                         $resumeFile->saveAs(Yii::getAlias('@webroot') . '/theme/adminux/html/assets/resume/' . $fileName);
                         $model->resume = $fileName;
                         $model->save(false);
                     }
                     // Save cover letter
                     if ($coverFile) {
                         $fileName = $this->generateFileName($coverFile);
                         $coverFile->saveAs(Yii::getAlias('@webroot') . '/theme/adminux/html/assets/cover_letter/' . $fileName);
                         $model->cover_letter = $fileName;
                         $model->save(false);
                     }
     
                     return $this->redirect(['success']);
                 }
             }
         } else {
             $model->loadDefaultValues();
         }
     
         // Fetch job types for dropdown list
         $Gender = Genders::find()->all();
         $State = States::find()->all();
         $Stats = Status::find()->all();
         $Relay = Relationships::find()->all();
         $Level = Educations::find()->all();
         $userGender = \yii\helpers\ArrayHelper::map($Gender, 'id', 'gender');
         $stateList = \yii\helpers\ArrayHelper::map($State, 'id', 'state_name');
         $statsList = \yii\helpers\ArrayHelper::map($Stats, 'id', 'status_name');
         $relayList = \yii\helpers\ArrayHelper::map($Relay, 'id', 'relationship_name');
         $educationList = \yii\helpers\ArrayHelper::map($Level, 'id', 'level_name');
     
         return $this->render('apply', [
             'model' => $model,
             'userGender' => $userGender,
             'stateList' => $stateList,
             'statsList' => $statsList,
             'relayList' => $relayList,
             'educationList' => $educationList,
         ]);
     }

     public function actionSuccess()
    {
        return $this->render('success');
    }
     
     private function isAllowedExtension($extension, $allowedExtensions)
     {
         return in_array(strtolower($extension), $allowedExtensions);
     }
     
     private function generateFileName($file)
     {
         $rnd = rand(0, 9999);
         return "{$rnd}-{$file->baseName}.{$file->extension}";
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
             $command = "pdftoppm -jpeg -r 300 \"$pdfPath\" \"$outputPrefix\" 2>&1";
             $output = [];
             $returnVar = 0;
             exec($command, $output, $returnVar);
 
             if ($returnVar !== 0) {
                 throw new \Exception('pdftoppm failed with error code ' . $returnVar . ': ' . implode("\n", $output));
             }
 
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
        $lines = explode("\n", $ocrText); // Split text into lines

        // Define patterns for specific fields
        $patterns = [
            'name' => '/Name:\s*([^\r\n]+)/i',
            'education' => '/Education:\s*([^\r\n]+)/i',
            'experience' => '/Experience:\s*([^\r\n]+)/i',
            'skills' => '/Skills:\s*([^\r\n]+)/i',
            'ic_number' => '/IC Number:\s*([^\r\n]+)/i',
            'dob' => '/Date of Birth:\s*([^\r\n]+)/i',
            'age' => '/Age:\s*([^\r\n]+)/i',
            'guardian' => '/Guardian:\s*([^\r\n]+)/i',
            'relationship' => '/Relationship:\s*([^\r\n]+)/i',
            'emergency_contact' => '/Emergency Contact:\s*([^\r\n]+)/i',
            'pa' => '/PA:\s*([^\r\n]+)/i',
            'position' => '/Position:\s*([^\r\n]+)/i',
            'pa_contact' => '/PA Contact:\s*([^\r\n]+)/i',
            'pa_email' => '/PA Email:\s*([^\r\n]+)/i',
            'gender' => '/Gender:\s*([^\r\n]+)/i',
            'education_level' => '/Education Level:\s*([^\r\n]+)/i',
            'university' => '/University:\s*([^\r\n]+)/i',
            'course' => '/Course:\s*([^\r\n]+)/i',
            'address1' => '/Address 1:\s*([^\r\n]+)/i',
            'address2' => '/Address 2:\s*([^\r\n]+)/i',
            'city' => '/City:\s*([^\r\n]+)/i',
            'state' => '/State:\s*([^\r\n]+)/i',
            'poscode' => '/Poscode:\s*([^\r\n]+)/i',
            'start_date' => '/Start Date:\s*([^\r\n]+)/i',
            'end_date' => '/End Date:\s*([^\r\n]+)/i',
        ];

        foreach ($lines as $line) {
            // Extract email and password using line-by-line parsing
            if (strpos(strtolower($line), 'name:') === 0) {
                $resumeData['name'] = trim(substr($line, strlen('Name:')));
            } elseif (strpos(strtolower($line), 'email:') === 0) {
                $resumeData['email'] = trim(substr($line, strlen('Email:')));
            }elseif (strpos(strtolower($line), 'phone:') === 0) {
                $resumeData['phone'] = trim(substr($line, strlen('Phone:')));
            }elseif (strpos(strtolower($line), 'address1:') === 0) {
                $resumeData['address1'] = trim(substr($line, strlen('Address1:')));
            }elseif (strpos(strtolower($line), 'address2:') === 0) {
                $resumeData['address2'] = trim(substr($line, strlen('Address2:')));
            }

            // Apply patterns to extract additional information
            foreach ($patterns as $key => $pattern) {
                if (!isset($resumeData[$key])) {
                    preg_match($pattern, $line, $matches);
                    if (!empty($matches[1])) {
                        $resumeData[$key] = $matches[1];
                    }
                }
            }
        }

        return $resumeData;
    }

    /**
     * Updates an existing Intern model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id Intern ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = Intern::findOne($id);

        if ($model === null) {
            throw new NotFoundHttpException('The requested employee does not exist.');
        }
        
        if ($this->request->isPost) {
            $model->load($this->request->post());

            // Handle uploaded files
            $imageFile = UploadedFile::getInstance($model, 'image');
            $universityFile = UploadedFile::getInstance($model, 'university_letter');
            $resumeFile = UploadedFile::getInstance($model, 'resume');
            $coverFile = UploadedFile::getInstance($model, 'cover_letter');
        
            // Perform validation
            if ($model->validate()) {
                // Validate file extensions
                if ($imageFile && !$this->isAllowedExtension($imageFile->extension, ['png', 'jpg', 'jpeg', 'gif'])) {
                    $model->addError('image', 'Only files with extensions png, jpg, jpeg, gif are allowed.');
                }
                if ($universityFile && !$this->isAllowedExtension($universityFile->extension, ['pdf', 'doc', 'docx'])) {
                    $model->addError('university_letter', 'Only files with extensions pdf, doc, docx are allowed.');
                }
                if ($resumeFile && !$this->isAllowedExtension($resumeFile->extension, ['pdf', 'doc', 'docx'])) {
                    $model->addError('resume', 'Only files with extensions pdf, doc, docx are allowed.');
                }
                if ($coverFile && !$this->isAllowedExtension($coverFile->extension, ['pdf', 'doc', 'docx'])) {
                    $model->addError('cover_letter', 'Only files with extensions pdf, doc, docx are allowed.');
                }

                // If no errors, save the model and the files
                if (!$model->hasErrors() && $model->save()) {
                    // Save image file
                    if ($imageFile) {
                        $fileName = $this->generateFileName($imageFile);
                        $imageFile->saveAs(Yii::getAlias('@webroot') . '/theme/adminux/html/assets/img/' . $fileName);
                        $model->image = $fileName;
                        $model->save(false);
                    }
                    // Save university letter
                    if ($universityFile) {
                        $fileName = $this->generateFileName($universityFile);
                        $universityFile->saveAs(Yii::getAlias('@webroot') . '/theme/adminux/html/assets/university_letter/' . $fileName);
                        $model->university_letter = $fileName;
                        $model->save(false);
                    }
                    // Save resume
                    if ($resumeFile) {
                        $fileName = $this->generateFileName($resumeFile);
                        $resumeFile->saveAs(Yii::getAlias('@webroot') . '/theme/adminux/html/assets/resume/' . $fileName);
                        $model->resume = $fileName;
                        $model->save(false);
                    }
                    // Save cover letter
                    if ($coverFile) {
                        $fileName = $this->generateFileName($coverFile);
                        $coverFile->saveAs(Yii::getAlias('@webroot') . '/theme/adminux/html/assets/cover_letter/' . $fileName);
                        $model->cover_letter = $fileName;
                        $model->save(false);
                    }

                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        // Fetch job types for dropdown list
        $Gender = Genders::find()->all();
        $State = States::find()->all();
        $Stats = Status::find()->all();
        $Relay = Relationships::find()->all();
        $Level = Educations::find()->all();
        $userGender = \yii\helpers\ArrayHelper::map($Gender, 'id', 'gender');
        $stateList = \yii\helpers\ArrayHelper::map($State, 'id', 'state_name');
        $statsList = \yii\helpers\ArrayHelper::map($Stats, 'id', 'status_name');
        $relayList = \yii\helpers\ArrayHelper::map($Relay, 'id', 'relationship_name');
        $educationList = \yii\helpers\ArrayHelper::map($Level, 'id', 'level_name');

        return $this->render('update', [
            'model' => $model,
            'userGender' => $userGender,
            'stateList' => $stateList,
            'statsList' => $statsList,
            'relayList' => $relayList,
            'educationList' => $educationList,
        ]);
    }


    /**
     * Deletes an existing Intern model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id Intern ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Intern model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id Intern ID
     * @return Intern the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Intern::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
