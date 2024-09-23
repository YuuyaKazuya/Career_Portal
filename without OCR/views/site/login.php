<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login d-flex justify-content-center align-items-center min-vh-80" style="background-color: transparent;">

    <div class="card" id="card" style="background-color: rgba(32, 30, 67, 0.8) !important; border: 3px solid darkblue; width: 100%; max-width: 500px;">
    <br>
        <div class="card-body">

            <h1 style="color: white;"><?= Html::encode($this->title) ?></h1>

            <p style="color: white;">Please fill out the following fields to login:</p>

            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'fieldConfig' => [
                    'template' => "{label}\n{input}\n{error}",
                    'labelOptions' => ['class' => 'col-lg-3 col-form-label'],
                    'inputOptions' => ['class' => 'form-control'],
                    'errorOptions' => ['class' => 'invalid-feedback'],
                ],
            ]); ?>
            <div class="col-md-12 mb-2">
                <div class="card border-0" style="border-radius: 10px;">
                    <div class="card-body" style="background-color: black; border-radius: 10px;">
                        <div class="row gx-3 align-items-center">
                            <div class="form-floating">
                                <?= $form->field($model, 'username')->textInput([
                                    'placeholder' => 'Enter your Username',
                                    'autofocus' => true,
                                    'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                ])->label('<i class="bi bi-person" style="margin-right: 10px;"></i> Username', [
                                    'class' => 'form-control border-start-0',
                                    'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                ])->error(false) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mb-2">
                <div class="card border-0" style="border-radius: 10px;">
                    <div class="card-body" style="background-color: black; border-radius: 10px;">
                        <div class="row gx-3 align-items-center">
                            <div class="form-floating">
                                <?= $form->field($model, 'password')->passwordInput([
                                    'placeholder' => 'Enter your password',
                                    'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                    'id' => 'password-field'
                                ])->label('<i class="bi bi-shield-lock" style="margin-right: 10px;"></i> Password', [
                                    'class' => 'form-control border-start-0',
                                    'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                ]) ?>

                                <!-- Eye icon for toggling visibility -->
                                <i id="togglePassword" class="fa fa-eye position-absolute" style="right: 10px; top: 45px; cursor: pointer; color: gray;"></i>
                            </div>
                            <?= Html::error($model, 'password', ['class' => 'error-message mt-2']) ?>
                        </div>
                    </div>
                </div>
            </div>

            <?= $form->field($model, 'rememberMe')->checkbox([
                'template' => "<div class=\"custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                'labelOptions' => ['class' => 'custom-control-label'],
            ]) ?>

            <div class="card-footer d-flex justify-content-end">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary me-2', 'name' => 'login-button']) ?>
                <?= Html::a('Cancel', ['portal/index'], ['class' => 'btn btn-md btn-theme bg-red']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
        <br><br>
    </div>

    <script>

    document.getElementById("togglePassword").addEventListener("click", function () {
        var passwordField = document.getElementById("password-field");
        var fieldType = passwordField.type === "password" ? "text" : "password";
        passwordField.type = fieldType;
        
        // Toggle the icon between eye and eye-slash
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
    });

    </script>      

    <style>
        .custom-control-label {
            color: white;
        }

        .site-login {
            background: #20203f;
        }
    </style>

</div>