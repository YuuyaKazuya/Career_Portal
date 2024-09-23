<?php

namespace app\controllers;

use Yii;
use app\models\Employee;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Careers;
use app\models\Educations;
use app\models\JobTypes;
use app\models\Portal;
use app\models\States;
use app\models\User;
use app\models\Users;
use yii\web\UploadedFile;

/**
 * EmployeeController implements the CRUD actions for Employee model.
 */
class EmployeeController extends Controller
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
     * Lists all Employee models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = Employee::find()->all();
        $query = Employee::find();
        $totalCount = $query->count();

        $pageSize = 5;
        $page = Yii::$app->request->get('page', 1) - 1; // current page
        $offset = $page * $pageSize;

        $employees = $query->offset($offset)->limit($pageSize)->all();

        return $this->render('index', [
            'model' => $model,
            'employees' => $employees,
            'totalCount' => $totalCount,
            'pageSize' => $pageSize,
            'currentPage' => $page + 1,
        ]);
    }

    /**
     * Displays a single Employee model.
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
     * Creates a new Employee model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionApply($job_id, $job_type)
{
    $model = new Employee();
    $model->job = $job_id;
    $model->job_type = $job_type;

    if ($this->request->isPost) {
        $model->load($this->request->post());

        // Handle uploaded files
        $imageFile = UploadedFile::getInstance($model, 'image');
        $resumeFile = UploadedFile::getInstance($model, 'resume');

        // Perform validation
        if ($model->validate()) {
            // Validate file extensions
            if ($imageFile && !$this->isAllowedExtension($imageFile->extension, ['png', 'jpg', 'jpeg', 'gif'])) {
                $model->addError('image', 'Only files with extensions png, jpg, jpeg, gif are allowed.');
            }
            if ($resumeFile && !$this->isAllowedExtension($resumeFile->extension, ['pdf', 'doc', 'docx'])) {
                $model->addError('resume', 'Only files with extensions pdf, doc, docx are allowed.');
            }

            // If no errors, save the model and the files
            if (!$model->hasErrors()) {
                if ($model->save()) {
                    // Save image file
                    if ($imageFile) {
                        $fileName = $this->generateFileName($imageFile);
                        $imageFile->saveAs(Yii::getAlias('@webroot') . '/theme/adminux/html/assets/img/' . $fileName);
                        $model->image = $fileName;
                    }

                    // Save resume
                    if ($resumeFile) {
                        $fileName = $this->generateFileName($resumeFile);
                        $resumeFile->saveAs(Yii::getAlias('@webroot') . '/theme/adminux/html/assets/resume/' . $fileName);
                        $model->resume = $fileName;
                    }

                    // Update model with file paths
                    $model->save(false);

                    return $this->redirect(['success']);
                }
            }
        }
    } else {
        $model->loadDefaultValues();
    }

    $job = Portal::find()->all();
    $type = JobTypes::find()->all();
    $State = States::find()->all();
    $Gender = Users::find()->all();
    $Level = Educations::find()->all();
    $jobList = \yii\helpers\ArrayHelper::map($job, 'id', 'title');
    $typeList = \yii\helpers\ArrayHelper::map($type, 'id', 'jobType');
    $stateList = \yii\helpers\ArrayHelper::map($State, 'id', 'state_name');
    $userGender = \yii\helpers\ArrayHelper::map($Gender, 'id', 'gender');
    $educationList = \yii\helpers\ArrayHelper::map($Level, 'id', 'level_name');

    // Render the update form
    return $this->render('apply', [
        'model' => $model,
        'stateList' => $stateList,
        'userGender' => $userGender,
        'educationList' => $educationList,
        'jobList' => $jobList,
        'typeList' => $typeList,
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

    /**
     * Updates an existing Employee model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
{
    $model = Employee::findOne($id);

    if ($model === null) {
        throw new NotFoundHttpException('The requested employee does not exist.');
    }

    if ($this->request->isPost) {
        // Load posted data into the model
        $model->load($this->request->post());

        // Handle uploaded files
        $imageFile = UploadedFile::getInstance($model, 'image');
        $resumeFile = UploadedFile::getInstance($model, 'resume');

        // Perform validation
        if ($model->validate()) {
            // Validate file extensions
            if ($imageFile && !$this->isAllowedExtension($imageFile->extension, ['png', 'jpg', 'jpeg', 'gif'])) {
                $model->addError('image', 'Only files with extensions png, jpg, jpeg, gif are allowed.');
            }
            if ($resumeFile && !$this->isAllowedExtension($resumeFile->extension, ['pdf', 'doc', 'docx'])) {
                $model->addError('resume', 'Only files with extensions pdf, doc, docx are allowed.');
            }

            // Save model if no validation errors
            if (!$model->hasErrors()) {
                // Save image file
                if ($imageFile) {
                    $fileName = $this->generateFileName($imageFile);
                    $imageFile->saveAs(Yii::getAlias('@webroot') . '/theme/adminux/html/assets/img/' . $fileName);
                    $model->image = $fileName;
                }

                // Save resume file
                if ($resumeFile) {
                    $fileName = $this->generateFileName($resumeFile);
                    $resumeFile->saveAs(Yii::getAlias('@webroot') . '/theme/adminux/html/assets/resume/' . $fileName);
                    $model->resume = $fileName;
                }

                // Save the model after updating file paths
                if ($model->save(false)) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
        }
    }

    // If the request is not POST or validation fails, render the form with existing data
    $model->loadDefaultValues();

    // Handle the "Others" option for various fields
    if ($model->race == 'Others') {
        $model->race = $model->race_other;
    }
    if ($model->religion == 'Others') {
        $model->religion = $model->religion_other;
    }
    if ($model->marital_status == 'Others') {
        $model->marital_status = $model->marital_status_other;
    }
    if ($model->license == 'Others') {
        $model->license = $model->license_other;
    }

    // Fetch dropdown lists
    $job = Portal::find()->all();
    $type = JobTypes::find()->all();
    $State = States::find()->all();
    $Gender = Users::find()->all();
    $Level = Educations::find()->all();
    $jobList = \yii\helpers\ArrayHelper::map($job, 'id', 'title');
    $typeList = \yii\helpers\ArrayHelper::map($type, 'id', 'jobType');
    $stateList = \yii\helpers\ArrayHelper::map($State, 'id', 'state_name');
    $userGender = \yii\helpers\ArrayHelper::map($Gender, 'id', 'gender');
    $educationList = \yii\helpers\ArrayHelper::map($Level, 'id', 'level_name');

    // Render the update form
    return $this->render('update', [
        'model' => $model,
        'stateList' => $stateList,
        'userGender' => $userGender,
        'educationList' => $educationList,
        'jobList' => $jobList,
        'typeList' => $typeList,
    ]);
}

    /**
     * Deletes an existing Employee model.
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
     * Finds the Employee model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Employee the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Employee::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
