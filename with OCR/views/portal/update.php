<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Portal $model */

$this->title = 'Update Portal: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Portals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="portal-update">

    <?= $this->render('_form', [
        'model' => $model,
        'typeList' => $typeList,
    ]) ?>

</div>
