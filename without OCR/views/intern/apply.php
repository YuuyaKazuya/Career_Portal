<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Intern $model */

$this->title = 'Apply for Internship';
$this->params['breadcrumbs'][] = ['label' => 'Career', 'url' => ['portal/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="intern-create">

    <?= $this->render('_form', [
        'model' => $model,
        'userGender' => $userGender,
        'stateList' => $stateList,
        'statsList' => $statsList,
        'relayList' => $relayList,
        'educationList' => $educationList,
    ]) ?>

</div>
