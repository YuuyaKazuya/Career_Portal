<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Intern $model */

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
