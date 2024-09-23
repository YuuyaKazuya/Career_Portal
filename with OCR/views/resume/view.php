<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ResumeData $model */

$this->title = 'Resume';
?>

<h1><?= Html::encode($this->title) ?></h1>

<div class="resume-view">

    <?php $form = ActiveForm::begin(); ?>

        <div class="form-group">
            <?= $form->field($model, 'choice')->radioList([
                'upload' => 'Upload Resume',
                'manual' => 'Key in Manually',
            ], ['id' => 'choice'])->label('Choose Option') ?>
        </div>

        <div class="form-group">
            <?= Html::button('Next', ['class' => 'btn btn-primary', 'id' => 'next-btn']) ?>
        </div>

    <?php ActiveForm::end(); ?>


</div>