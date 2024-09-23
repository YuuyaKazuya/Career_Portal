<?php

namespace app\controllers;

use app\models\User;
use app\models\UserRole;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::class,
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    public function actionSuccess()
    {
        return $this->render('success');
    }

    /**
     * Lists all User models.
     * @return string
     */
    public function actionIndex()
    {
        $model = User::find()->all();
        $query = User::find();
        $totalCount = $query->count();

        $pageSize = 6;
        $page = Yii::$app->request->get('page', 1) - 1; // current page
        $offset = $page * $pageSize;

        $Users = $query->offset($offset)->limit($pageSize)->all();

        return $this->render('index', [
            'model' => $model,
            'Users' => $Users,
            'totalCount' => $totalCount,
            'pageSize' => $pageSize,
            'currentPage' => $page + 1,
        ]);
    }

    /**
     * Displays a single User model.
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
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
{
    $model = new User();

    if ($model->load(Yii::$app->request->post())) {
        // Validate the model
        if ($model->validate()) {
            // Ensure password is set and not null
            if (!empty($model->password)) {
                $model->password_hash = Yii::$app->security->generatePasswordHash($model->password);
            } else {
                // Handle the case where password is empty
                $model->addError('password', 'Password cannot be blank.');
            }

            // Generate auth key
            $model->auth_key = Yii::$app->security->generateRandomString();

            // Save the model
            if ($model->save()) {
                return $this->redirect(['success']);
            }
        }
    }

    // Retrieve user roles
    $role = UserRole::find()->all();
    $userRole = \yii\helpers\ArrayHelper::map($role, 'id', 'name');

    return $this->render('create', [
        'model' => $model,
        'userRole' => $userRole,
    ]);
}


    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
{
    $model = $this->findModel($id);

    // Get the current password before making any changes
    $currentPassword = $model->password_hash;

    if ($this->request->isPost && $model->load($this->request->post())) {
        
        // Only hash the password if the user provided a new password
        if (!empty($model->password_hash) && $model->password_hash !== $currentPassword) {
            $model->password_hash = Yii::$app->security->generatePasswordHash($model->password_hash);
        } else {
            // Keep the old password if no new password is provided
            $model->password_hash = $currentPassword;
        }

        if ($model->save()) {
            Yii::$app->session->setFlash('success', 'Update Successfully');
            return $this->redirect(['index']);
        } else {
            // Display validation errors if any
            Yii::$app->session->setFlash('error', 'Update failed: ' . json_encode($model->getErrors()));
        }
    }

    // Fetch user roles for the dropdown
    $role = UserRole::find()->all();
    $userRole = \yii\helpers\ArrayHelper::map($role, 'id', 'name');

    return $this->render('update', [
        'model' => $model,
        'userRole' => $userRole,
    ]);
}

    /**
     * Deletes an existing User model.
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
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
