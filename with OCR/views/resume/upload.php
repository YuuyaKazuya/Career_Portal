<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ResumeData $model */

?>

<div class="upload-form">
    <br>
    <div class="card" id="card" style="border: none;">
        <div class="card-body"></div>
        
            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

                <div class="d-flex justify-content-center align-items-center">
                    <div class="card border-0" style="border-radius: 10px;">
                        <div class="card-body" style="border-radius: 10px; background-color: rgb(205, 232, 229) !important;">
                            <div class="row gx-3 align-items-center">
                                <div class="form-floating">
                                    <?= $form->field($model, 'resumeFile')->fileInput([
                                        'class' => 'form-control',
                                        'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                    ])->label(
                                        '<div class="avatar avatar-30 rounded bg-red text-red">
                                        <i class="bi bi-file-pdf h5 vm"></i></div> Upload Resume', [
                                        'class' => 'form-control',
                                        'style' => 'font-size: 16px; color: black; background-color: transparent !important; padding: 5px; border: none;'
                                    ]) ?>
                                </div>
                            </div>
                            <div class="tab-footer d-flex justify-content-end mt-3">
                                <?= Html::submitButton('Upload Resume', ['class' => 'btn btn-primary']) ?>
                            </div>
                        </div>
                    </div>
                </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
