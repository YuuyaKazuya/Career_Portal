<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\User $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="user-form">
    <br>
    <div class="site-login d-flex justify-content-center align-items-center min-vh-90" style="background-color: transparent;">

        <div class="card" id="card" style="background-color: rgba(32, 30, 67, 0.8) !important; border: 3px solid darkblue; width: 100%; max-width: 800px;">
            <br>
            <div class="card-body">

                <h1 style="color: white;">New User</h1>

                <p style="color: white;">Please fill out the following fields to Sign up:</p>
                <br>

                <?php $form = ActiveForm::begin(); ?>

                <div class="row">
                    <div class="col-md-6 mb-2">
                        <div class="card border-0" style="border-radius: 10px;">
                            <div class="card-body" style="background-color: transparent; border-radius: 10px;">
                                <div class="row gx-3 align-items-center">
                                    <div class="form-floating">
                                        <?= $form->field($model, 'firstname')->textInput([
                                            'placeholder' => 'Enter First Name',
                                            'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                        ])->label('<i class="bi bi-person" style="margin-right: 10px;"></i> First Name', [
                                            'class' => 'form-control border-start-0',
                                            'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                        ])->error(false) ?>
                                    </div>
                                </div>
                                <div class="error-container mt-2" style="font-size: 14px; color: red;">
                                    <?= Html::error($model, 'firstname', ['class' => 'error-message']) ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-2">
                        <div class="card border-0" style="border-radius: 10px;">
                            <div class="card-body" style="background-color: transparent; border-radius: 10px;">
                                <div class="row gx-3 align-items-center">
                                    <div class="form-floating">
                                        <?= $form->field($model, 'lastname')->textInput([
                                            'placeholder' => 'Enter Last Name',
                                            'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                        ])->label('<i class="bi bi-person" style="margin-right: 10px;"></i> Lastname', [
                                            'class' => 'form-control border-start-0',
                                            'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                        ])->error(false) ?>
                                    </div>
                                </div>
                                <div class="error-container mt-2" style="font-size: 14px; color: red;">
                                    <?= Html::error($model, 'lastname', ['class' => 'error-message']) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-2">
                        <div class="card border-0" style="border-radius: 10px;">
                            <div class="card-body" style="background-color: transparent; border-radius: 10px;">
                                <div class="row gx-3 align-items-center">
                                    <div class="form-floating">
                                        <?= $form->field($model, 'username')->textInput([
                                            'placeholder' => 'Enter Username',
                                            'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                        ])->label('<i class="bi bi-person" style="margin-right: 10px;"></i> Username', [
                                            'class' => 'form-control border-start-0',
                                            'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                        ])->error(false) ?>
                                    </div>
                                </div>
                                <div class="error-container mt-2" style="font-size: 14px; color: red;">
                                    <?= Html::error($model, 'username', ['class' => 'error-message']) ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-2">
                        <div class="card border-0" style="border-radius: 10px;">
                            <div class="card-body" style="background-color: transparent; border-radius: 10px;">
                                <div class="row gx-3 align-items-center">
                                    <div class="form-floating">
                                        <?= $form->field($model, 'email')->textInput([
                                            'placeholder' => 'Enter Username',
                                            'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                        ])->label('<i class="bi bi-envelope" style="margin-right: 10px;"></i> email', [
                                            'class' => 'form-control border-start-0',
                                            'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                        ])->error(false) ?>
                                    </div>
                                </div>
                                <div class="error-container mt-2" style="font-size: 14px; color: red;">
                                    <?= Html::error($model, 'email', ['class' => 'error-message']) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <div class="card border-0" style="border-radius: 10px;">
                            <div class="card-body" style="background-color: transparent; border-radius: 10px;">
                                <div class="form-floating position-relative">
                                    <?= $form->field($model, 'plainPassword')->passwordInput([
                                        'placeholder' => 'Enter password',
                                        'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                        'id' => 'password-field'
                                    ])->label('<i class="bi bi-shield-lock" style="margin-right: 10px;"></i> Password', [
                                        'class' => 'form-label',
                                        'style' => 'font-size: 16px; color: white; background-color: transparent !important;',
                                    ])->error(false) ?>
                                    
                                    <!-- Eye icon for toggling visibility -->
                                    <i id="togglePassword" class="fa fa-eye position-absolute" style="right: 10px; top: 45px; cursor: pointer; color: gray;"></i>
                                </div>
                                <?= Html::error($model, 'plainPassword', ['class' => 'error-message mt-2']) ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-2">
                        <div class="card border-0" style="border-radius: 10px;">
                            <div class="card-body" style="background-color: transparent; border-radius: 10px;">
                                <div class="row gx-3 align-items-center">
                                    <div class="form-floating">
                                        <?= $form->field($model, 'phone')->textInput([
                                            'placeholder' => 'Enter Phone Number',
                                            'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                        ])->label('<i class="bi bi-phone" style="margin-right: 10px;"></i> Phone Number', [
                                            'class' => 'form-control border-start-0',
                                            'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                        ])->error(false) ?>
                                    </div>
                                </div>
                                <div class="error-container mt-2" style="font-size: 14px; color: red;">
                                    <?= Html::error($model, 'phone', ['class' => 'error-message']) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <?php
                    $adminRoleKey = '1'; // Key for the admin role to remove, as a string

                    // Check if the current user's role is not admin
                    if (Yii::$app->user->identity->role !== $adminRoleKey) {
                        // Ensure the role exists before unsetting it
                        if (array_key_exists($adminRoleKey, $userRole)) {
                            unset($userRole[$adminRoleKey]);
                        }
                    }
                    ?>

                    <div class="col-md-6 mb-2">
                        <div class="card border-0" style="border-radius: 10px;">
                            <div class="card-body" style="background-color: transparent; border-radius: 10px;">
                                <div class="row gx-3 align-items-center">
                                    <div class="form-floating">
                                        <?= $form->field($model, 'role')->dropDownList($userRole, [
                                            'prompt' => 'Select Role',
                                            'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                        ])->label('<i class="bi bi-person" style="margin-right: 10px;"></i> Role', [
                                            'class' => 'form-control border-start-0',
                                            'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                        ])->error(false) ?>
                                    </div>
                                </div>
                                <div class="error-container mt-2" style="font-size: 14px; color: red;">
                                    <?= Html::error($model, 'role', ['class' => 'error-message']) ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-2">
                        <div class="card border-0" style="border-radius: 10px;">
                            <div class="card-body" style="background-color: transparent; border-radius: 10px;">
                                <div class="row gx-3 align-items-center">
                                    <div class="form-floating">
                                        <?= $form->field($model, 'designation')->textInput([
                                            'placeholder' => 'Enter Designation',
                                            'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                        ])->label('<i class="bi bi-phone" style="margin-right: 10px;"></i> designation', [
                                            'class' => 'form-control border-start-0',
                                            'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                        ])->error(false) ?>
                                    </div>
                                </div>
                                <div class="error-container mt-2" style="font-size: 14px; color: red;">
                                    <?= Html::error($model, 'designation', ['class' => 'error-message']) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br><br>

                <div class="card-footer d-flex justify-content-end">
                    <?= Html::a('Cancel', ['site/login'], ['class' => 'btn btn-md btn-theme bg-red me-2']) ?>
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>
                <br>


                <?php ActiveForm::end(); ?>
            </div>
        </div>
        <br>
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
    .error-message {
        color: red;
        background-color: transparent;
        padding: 5px;
        font-size: 16px;
        margin-top: 5px;
        border-radius: 3px;
        display: flex;
        align-items: center;
    }

    .error-message.hidden {
        display: none; /* Hide error message when input is valid */
    }
    </style>

</div>
