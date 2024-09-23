<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Intern $model */

?>

<div class="resume-index mt-5">
    <!-- Card Container -->
    <div class="card" style="background-color: rgba(32, 30, 67, 0.8);">
        <div class="card-body">
            <!-- Choice Section -->
            <div class="text-center mt-5 mb-5" style="border: none;">
                <label><Strong>Choose how to submit your application</Strong></label>
                <br><br>
                <div class="btn-group" role="group" aria-label="Form Choice">
                    <?= Html::a('Fill Form Manually', ['intern/apply'], ['class' => 'btn btn-primary', 'style' => 'background-color: rgb(104, 146, 213); margin-right: 10px;']) ?>
                    <?= Html::a('Upload Resume', ['intern/upload'], ['class' => 'btn btn-secondary', 'style' => 'background-color: rgb(104, 146, 213);']) ?>
                </div>
            </div>
        </div>
    </div>
</div>


