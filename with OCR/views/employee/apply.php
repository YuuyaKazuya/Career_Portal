<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Employee $model */


$this->title = 'Applying Full/Part Times Job';
$this->params['breadcrumbs'][] = ['label' => 'Career', 'url' => ['/portal/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-apply">

    <?= $this->render('_form', [
        'model' => $model,
        'stateList' => $stateList,
        'userGender' => $userGender,
        'educationList' => $educationList,
        'jobList' => $jobList,
        'typeList' => $typeList,
    ]) ?>

</div>
