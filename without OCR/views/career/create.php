<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Careers $model */

$this->title = 'Create Careers';
$this->params['breadcrumbs'][] = ['label' => 'Internship', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="careers-create">

    <?= $this->render('_form', [
        'model' => $model,
        'typeList' => $typeList,
    ]) ?>

</div>
