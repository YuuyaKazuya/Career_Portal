<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Portal $model */

$this->title = 'Post a Job/Career';
$this->params['breadcrumbs'][] = ['label' => 'Career', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="portal-create">

    <?= $this->render('_form', [
        'model' => $model,
        'typeList' => $typeList,
    ]) ?>

</div>
