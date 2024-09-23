<?php

namespace app\controllers;

use Yii;
use app\models\Careers;
use app\models\JobTypes;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * CareerController implements the CRUD actions for Careers model.
 */
class CareerController extends Controller
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
     * Lists all Careers models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = Careers::find()->all();

        return $this->render('index', [
            'model' => $model,
        ]);
    }

    /**
     * Displays a single Careers model.
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
     * Creates a new Careers model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Careers();

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

        // Fetch job types for dropdown list
        $type = JobTypes::find()->all();
        $typeList = \yii\helpers\ArrayHelper::map($type, 'id', 'jobType');

        return $this->render('create', [
            'model' => $model,
            'typeList' => $typeList,
        ]);
    }

    private function isAllowedExtension($extension)
    {
        $allowedExtensions = ['png', 'jpg', 'jpeg', 'gif'];
        return in_array(strtolower($extension), $allowedExtensions);
    }

    /**
     * Updates an existing Careers model.
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

        // Fetch job types for dropdown list
        $type = JobTypes::find()->all();
        $typeList = \yii\helpers\ArrayHelper::map($type, 'id', 'jobType');

        return $this->render('update', [
            'model' => $model,
            'typeList' => $typeList,
        ]);
    }

    /**
     * Deletes an existing Careers model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Careers model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Careers the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Careers::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
