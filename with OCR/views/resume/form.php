<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ResumeData $model */

?>

<div class="manual-form">
    <div class="card mt-5" id="card" style="border: none;">
        <div class="card-body">
            <div class="row">
                <!-- Left Side: Form -->
                <div class="col-md-6">
                    <?php $form = ActiveForm::begin(); ?>

                    <div class="row d-flex justify-content-center">
                        <div class="col-md-12 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px; background-color: rgb(77, 134, 156)">
                                    <div class="form-floating">
                                        <?= $form->field($model, 'name')->textInput([
                                            'placeholder' => 'Enter full name',
                                            'style' => 'font-size: 16px; color: black; background-color: rgb(205, 232, 229) !important;',
                                        ])->label('<i class="bi bi-person" style="margin-right: 10px;"></i>  Full Name', [
                                            'class' => 'form-control border-start-0',
                                            'style' => 'font-size: 16px; color: black; background-color: transparent !important; padding: 5px; border: none;'
                                        ])->error(false) ?>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'name', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center">
                        <div class="col-md-6 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px; background-color: rgb(77, 134, 156)">
                                    <div class="form-floating">
                                        <?= $form->field($model, 'phone')->textInput([
                                            'placeholder' => 'Enter phone number',
                                            'style' => 'font-size: 16px; color: black; background-color: rgb(205, 232, 229) !important;',
                                        ])->label('<i class="bi bi-phone" style="margin-right: 10px;"></i>  Phone', [
                                            'class' => 'form-control border-start-0',
                                            'style' => 'font-size: 16px; color: black; background-color: transparent !important; padding: 5px; border: none;'
                                        ])->error(false) ?>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'phone', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px; background-color: rgb(77, 134, 156)">
                                    <div class="form-floating">
                                        <?= $form->field($model, 'email')->textInput([
                                            'placeholder' => 'Enter email address',
                                            'style' => 'font-size: 16px; color: black; background-color: rgb(205, 232, 229) !important;',
                                        ])->label('<i class="bi bi-envelope" style="margin-right: 10px;"></i>  Email', [
                                            'class' => 'form-control border-start-0',
                                            'style' => 'font-size: 16px; color: black; background-color: transparent !important; padding: 5px; border: none;'
                                        ])->error(false) ?>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'email', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center">
                        <div class="col-md-12 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px; background-color: rgb(77, 134, 156)">
                                    <div class="form-floating">
                                        <?= $form->field($model, 'education')->textInput([
                                            'placeholder' => 'Enter education',
                                            'style' => 'font-size: 16px; color: black; background-color: rgb(205, 232, 229) !important;',
                                        ])->label('<i class="bi bi-mortarboard" style="margin-right: 10px;"></i>  Education', [
                                            'class' => 'form-control border-start-0',
                                            'style' => 'font-size: 16px; color: black; background-color: transparent !important; padding: 5px; border: none;'
                                        ])->error(false) ?>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'education', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center">
                        <div class="col-md-12 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px; background-color: rgb(77, 134, 156)">
                                    <div class="form-floating">
                                        <?= $form->field($model, 'skills')->textarea([
                                            'placeholder' => 'Enter your skills',
                                            'style' => 'font-size: 16px; color: black; background-color: rgb(205, 232, 229) !important;',
                                            'rows' => 6,
                                        ])->label('<i class="bi bi-lightbulb" style="margin-right: 10px;"></i>  Skills', [
                                            'class' => 'form-control border-start-0',
                                            'style' => 'font-size: 16px; color: black; background-color: transparent !important; padding: 5px; border: none;'
                                        ])->error(false) ?>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'skills', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center">
                        <div class="col-md-12 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px; background-color: rgb(77, 134, 156)">
                                    <div class="form-floating">
                                        <?= $form->field($model, 'experience')->textarea([
                                            'placeholder' => 'Enter working experience',
                                            'style' => 'font-size: 16px; color: black; background-color: rgb(205, 232, 229) !important;',
                                            'rows' => 6,
                                        ])->label('<i class="bi bi-briefcase" style="margin-right: 10px;"></i>  Working Experience', [
                                            'class' => 'form-control border-start-0',
                                            'style' => 'font-size: 16px; color: black; background-color: transparent !important; padding: 5px; border: none;'
                                        ])->error(false) ?>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'experience', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mt-2">
                                    <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>

                <!-- Right Side: Raw OCR Data -->
                <div class="col-md-6">
                    <div class="raw-ocr">
                        <h3>Raw OCR Data</h3>
                        <pre><?= Html::encode($rawOcrText) ?></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
