<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Careers $model */

$this->title = 'Update Careers: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Internship', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="careers-update">

    <?= $this->render('_form', [
        'model' => $model,
        'typeList' => $typeList,
    ]) ?>

</div>
