<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Careers $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Internship', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="careers-view">

            <p>
                <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-md btn-theme bg-blue me-2']) ?>
                <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-md btn-theme bg-red me-2',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?> 
            </p> 

    <div class="card h-100 text-white" style="background-color: rgba(138, 0, 0, 0.8);">

        <div class="card-body">

            <br>
            <div class="row">
                <div class="col-md-4">
                    <?= Html::img(Yii::getAlias('@web') . '/theme/adminux/html/assets/img/' . $model->imageFile, ['class' => 'img-fluid']) ?>
                </div>
                <div class="col-md-8">
                <br>
                <h6 class="title">Job Details</h6>

                    <table class="table table-borderless" style="color: white;">
                        <tr>
                            <th style="border: none;  width: 100px;">ID</th>
                            <td style="border: none; color: white;">: <?= Html::encode($model->id) ?></td>

                            <th style="border: none;  width: 100px;">Location</th>
                            <td style="border: none; color: white;">: <?= Html::encode($model->location) ?></td>
                        </tr>
                        <tr>
                            <th style="border: none;  width: 100px;">Title</th>
                            <td style="border: none; color: white;">: <?= Html::encode($model->title) ?></td>

                            <th style="border: none;  width: 100px;">Schedule</th>
                            <td style="border: none; color: white;">: <?= Html::encode($model->schedule) ?></td>
                        </tr>
                        <tr>
                            <th style="border: none;  width: 100px;">Job Type</th>
                            <td style="border: none; color: white;">: <?= Html::encode($model->jobType0->jobType ?? 'N/A') ?></td>

                            <th style="border: none; width: 100px;">Salary/Allowance</th>
                            <td style="border: none; color: white;">: RM<?= Html::encode($model->min_salary) ?> - RM<?= Html::encode($model->max_salary) ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <br>

            <div>
            <h6 class="title"> Description</h6>
                <p><?= nl2br(Html::encode($model->description)) ?></p>
            </div>
            <br>

            <div class="row">
                <div class="col-md-6">
                    <h6 class="title" style="font-size: 28px; color: white;">Responsibilities</h6>
                    <p><?= nl2br(Html::encode($model->responsibilities)) ?></p>
                </div>
                <div class="col-md-6">
                    <h6 class="title" style="font-size: 28px; color: white;">Benefits</h6>
                    <p><?= nl2br(Html::encode($model->benefit)) ?></p>
                </div>
            </div>
            
            <br>
        
            <div class="card-footer d-flex justify-content-end" style="border: none; background-color: transparent">
                <?= Html::a('Back', ['index'], ['class' => 'btn btn-md btn-theme me-2']) ?>
                <?= Html::a('Apply Now ' . Html::tag('i', '', ['class' => 'bi bi-arrow-right']), ['intern/apply'], [
                                                    'class' => 'btn btn-md btn-theme bg-green', 
                                                    'data-bs-display' => 'static',
                                                    'role' => 'button',]) ?>
            </div>
        </div>
    </div>

    <style>
        .title {
            font-size: 28px; 
            color: white; 
            border-bottom: 4px solid white; 
            font-weight: bold;
        }

        .title::after {
            border: none;
            display: none;
        }
    </style>
</div>
