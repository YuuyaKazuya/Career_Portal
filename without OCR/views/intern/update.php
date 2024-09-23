<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Intern $model */

$this->title = 'Update Intern: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Career', 'url' => ['portal/index']];
$this->params['breadcrumbs'][] = ['label' => 'Internship Applicant', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="intern-update">

    <?= $this->render('_form', [
        'model' => $model,
        'userGender' => $userGender,
        'stateList' => $stateList,
        'statsList' => $statsList,
        'relayList' => $relayList,
        'educationList' => $educationList,
    ]) ?>

</div>
