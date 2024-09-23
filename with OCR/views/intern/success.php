<?php
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Intern $model */

$this->title = 'Success';
$this->params['breadcrumbs'][] = ['label' => 'Career', 'url' => ['portal/index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-success">

    <div class="d-flex justify-content-center align-items-center" style="height: 60vh; background-color: transparent;">
        <div class="card text-center" style="width: 30rem; border-radius: 15px; border: 3px solid darkblue;">
            <div class="card-body" style="background-color: rgb(121, 209, 195);">
                <div class="mb-4">
                    <i class="bi bi-check-circle" style="font-size: 6rem; color: #3E8EF7;"></i>
                </div>
                <h4 class="card-title">Success!</h4>
                <p class="card-text">Your submission was successful. Thank you!</p>
                <br><br>
                <?= Html::a('<i class="bi bi-house-door-fill"></i>  Homepage', ['portal/index'], ['class' => 'btn btn-primary', 'style' => 'background-color: #3E8EF7; border: none;']) ?>
                <br><br>
            </div>
        </div>
    </div>
    <br><br><br>
    <style>
        .card-title{
            color: white;
            font-size: 35px;
        }

        .card-text{
            color: white;
            font-size: 20px;
        }
    </style>
    
</div>

