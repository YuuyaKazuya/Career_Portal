<?php

namespace app\controllers;

use Yii;
use app\models\Categories;
use app\models\News;
use kartik\mpdf\Pdf;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends Controller
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
     * Lists all News models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = News::find()->all();

        return $this->render('index', [
            'model' => $model,
        ]);
    }

    /**
     * Displays a single News model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new News model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new News();

        if ($this->request->isPost) {
            $model->load($this->request->post());
            $file = UploadedFile::getInstance($model, 'file'); // Assign uploaded file

            if ($model->validate()) {
                // Validate file extension
                if ($file && !$this->isAllowedExtension($file->extension)) {
                    $model->addError('imageFile', 'Only files with extensions png, jpg, jpeg, gif are allowed.');
                }
                if (!$model->hasErrors() && $model->save()) {
                    // Save image file if present
                    if ($file) {

                        // Generate a unique filename
                        $rnd = rand(0, 9999);
                        $fileName = "{$rnd}-{$file->baseName}.{$file->extension}";

                        // Ensure directory is writable and adjust the path as needed
                        $file->saveAs(Yii::getAlias('@webroot') . '/theme/adminux/html/assets/img/' . $fileName);

                        // Assign the filename to the model attribute
                        $model->imageFile = $fileName;
                        // echo '<pre>';
                        // print_r($model->imageFile);
                        // exit;     

                        $model->save(); // Save again with the filename
                    }

                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        // Fetch categories for dropdown list
        $categories = Categories::find()->all();
        $categoryList = \yii\helpers\ArrayHelper::map($categories, 'category_id', 'category_name');

        return $this->render('create', [
            'model' => $model,
            'categoryList' => $categoryList,
        ]);
    }

    private function isAllowedExtension($extension)
    {
        $allowedExtensions = ['png', 'jpg', 'jpeg', 'gif'];
        return in_array(strtolower($extension), $allowedExtensions);
    }


    public function actionQuotation()
{
    // Setup kartik\mpdf\Pdf component
    $pdf = new \Mpdf\Mpdf([
        // Set to use core fonts only
        'mode' => '',
        // A4 paper format
        'format' => 'A4',
        // Portrait orientation
        'orientation' => 'p',
        'margin_top' => '30',
        // Set default font and font size
        'default_font' => 'times',
        'default_font_size' => 9,
    ]);

    // Create the header with title and image without a line
    $header = '
        <div style="text-align: center; border: none;">
            <img src="C:\xampp\htdocs\yii2\basic\img\logo.jpg" style="max-width: 35%; float: right;" alt="Galtech Logo">
            <h1 style="color: purple; text-align: left;">QUOTATION</h1>
        </div>
    ';

    // Create the footer without a line
    $footer = '
        <div style="text-align: center; border: none;">
            {PAGENO}
        </div>
    ';

    $pdf->SetHTMLHeader($header);
    $pdf->SetHTMLFooter($footer);

    $pdf->WriteHTML($this->renderPartial('quotation'));
    $pdf->use_kwt = true;
    $pdf->Output();

    // Return the PDF output as per the destination setting
}

public function actionAttendance()
    {
        // get your HTML raw content without any layouts or scripts
        // setup kartik\mpdf\Pdf component
        $pdf = new \Mpdf\Mpdf([
            // set to use core fonts only
            'mode' => '',
            // A4 paper format
            'format' => 'A4',
            // portrait orientation
            'orientation' => 'p',

        ]);

       
        $pdf->WriteHTML($this->renderPartial('attendance'));
        $pdf->use_kwt = true;
        $pdf->Output();
        // return the pdf output as per the destination setting
    }

    public function actionReport()
    {
        // get your HTML raw content without any layouts or scripts
        // setup kartik\mpdf\Pdf component
        $pdf = new \Mpdf\Mpdf([
            // set to use core fonts only
            'mode' => '',
            // A4 paper format
            'format' => 'A4',
            // portrait orientation
            'orientation' => 'p',

        ]);

       
        $pdf->WriteHTML($this->renderPartial('report'));
        $pdf->use_kwt = true;
        $pdf->Output();
        // return the pdf output as per the destination setting
    }

    public function actionSlip()
    {
        // get your HTML raw content without any layouts or scripts
        // setup kartik\mpdf\Pdf component
        $pdf = new \Mpdf\Mpdf([
            // set to use core fonts only
            'mode' => '',
            // A4 paper format
            'format' => 'A4',
            // portrait orientation
            'orientation' => 'p',
            // header name
            'SetHeader' => ['Test Export'],
            // footer
            'SetFooter' => ['{PAGENO}'],
        ]);

        $pdf->SetHeader('Test Export');
        $pdf->SetFooter('{PAGENO}');
        $pdf->WriteHTML($this->renderPartial('slip'));
        $pdf->use_kwt = true;
        $pdf->Output();
        // return the pdf output as per the destination setting
    }
    /**
     * Updates an existing News model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost) {
            $model->load($this->request->post());
            $file = UploadedFile::getInstance($model, 'file'); // Assign uploaded file

            if ($model->validate()) {
                // Validate file extension
                if ($file && !$this->isAllowedExtension($file->extension)) {
                    $model->addError('imageFile', 'Only files with extensions png, jpg, jpeg, gif are allowed.');
                }
                if (!$model->hasErrors() && $model->save()) {
                    // Save image file if present
                    if ($file) {

                        // Generate a unique filename
                        $rnd = rand(0, 9999);
                        $fileName = "{$rnd}-{$file->baseName}.{$file->extension}";

                        // Ensure directory is writable and adjust the path as needed
                        $file->saveAs(Yii::getAlias('@webroot') . '/theme/adminux/html/assets/img/' . $fileName);

                        // Assign the filename to the model attribute
                        $model->imageFile = $fileName;
                        // echo '<pre>';
                        // print_r($model->imageFile);
                        // exit;     

                        $model->save(); // Save again with the filename
                    }

                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        // Fetch categories for dropdown list
        $categories = Categories::find()->all();
        $categoryList = \yii\helpers\ArrayHelper::map($categories, 'category_id', 'category_name');

        return $this->render('update', [
            'model' => $model,
            'categoryList' => $categoryList,
        ]);
    }



    /**
     * Deletes an existing News model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        Yii::$app->session->setFlash('success', 'News deleted successfully.');
        return $this->redirect(['index']);
    }

    /**
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = News::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
