<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Employee $model */

$this->title = 'Update Employee: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Career', 'url' => ['portal/index']];
$this->params['breadcrumbs'][] = ['label' => 'Employment Applicant', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="employee-update">

    <?= $this->render('_form', [
        'model' => $model,
        'stateList' => $stateList,
        'userGender' => $userGender,
        'educationList' => $educationList,
        'jobList' => $jobList,
        'typeList' => $typeList,
    ]) ?>

</div>
