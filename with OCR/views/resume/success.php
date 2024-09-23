<?php

use yii\helpers\Html;

/** @var yii\web\View $this */

$this->title = 'Upload Successful';
?>

<h1><?= Html::encode($this->title) ?></h1>

<div class="alert alert-success">
    <p>Your resume data has been successfully saved!</p>
    <p><?= Html::a('Return to Home', ['site/index'], ['class' => 'btn btn-primary']) ?></p>
</div>
