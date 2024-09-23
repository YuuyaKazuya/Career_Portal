<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Portal $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Career', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="portal-view">

        <?php
        if (!Yii::$app->user->isGuest && in_array(Yii::$app->user->identity->role, [1, 2])) :
        ?>
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
        <?php 
        endif; 
        ?>

    <div class="card h-100 text-white" style="background-color: rgba(32, 30, 67, 0.8); border: 3px solid darkblue;">
        <div class="card-body">
            <br>
            <div class="row">
                <div class="col-12 col-md-4 mb-3 mb-md-0">
                    <?= Html::img(Yii::getAlias('@web') . '/theme/adminux/html/assets/img/' . $model->imageFile, [
                        'class' => 'img-fluid',
                        'style' => 'width: 550px; height: 250px; object-fit: cover;'
                    ]) ?>
                </div>

                <div class="col-12 col-md-8">
                    <br>
                    <h6 class="title">Job Details</h6>
                    <table class="table table-borderless" style="color: white;">
                        <tr>
                            <th style="border: none; width: 100px;">Title</th>
                            <td style="border: none; color: white;">: <?= Html::encode($model->title) ?></td>
                            <th style="border: none; width: 100px;">Location</th>
                            <td style="border: none; color: white;">: <?= Html::encode($model->location) ?></td>
                        </tr>
                        <tr>
                            <th style="border: none; width: 100px;">Job Type</th>
                            <td style="border: none; color: white;">: <?= Html::encode($model->jobType0->jobType ?? 'N/A') ?></td>
                            <th style="border: none; width: 100px;">Schedule</th>
                            <td style="border: none; color: white;">: <?= Html::encode($model->schedule) ?></td>
                        </tr>
                        <tr>
                            <th style="border: none; width: 100px;">Salary/Allowance</th>
                            <td style="border: none; color: white;">: RM<?= Html::encode($model->min_salary) ?> - RM<?= Html::encode($model->max_salary) ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <br>
            <div>
                <h6 class="title">Description</h6>
                <p><?= nl2br(Html::encode($model->description)) ?></p>
            </div>
            <br>
            <div class="row">
                <div class="col-12 col-md-6 mb-3 mb-md-0">
                    <h6 class="title">Responsibilities</h6>
                    <p><?= nl2br(Html::encode($model->responsibilities)) ?></p>
                </div>
                <div class="col-12 col-md-6">
                    <h6 class="title">Benefits</h6>
                    <p><?= nl2br(Html::encode($model->benefit)) ?></p>
                </div>
            </div>
            <br>
            <div class="card-footer d-flex justify-content-end flex-column flex-md-row" style="border: none; background-color: transparent">
                <?= Html::a('Back', ['index'], ['class' => 'btn btn-md btn-theme me-md-2 mb-2 mb-md-0']) ?>
                <?php if ($model->jobType0->jobType == 'Internship'): ?>
                    <?= Html::a('Apply for Internship', ['intern/apply', 'job_id' => $model->id, 'job_type' => '3'], ['class' => 'btn btn-md btn-theme bg-green']) ?>
                <?php elseif ($model->jobType0->jobType == 'Full-Time' || $model->jobType0->jobType == 'Part-Time' || $model->jobType0->jobType == 'Contract' ): ?>
                    <?= Html::a('Apply for ' . $model->jobType0->jobType, ['employee/apply', 'job_id' => $model->id, 'job_type' => $model->job_type], ['class' => 'btn btn-md btn-theme bg-green']) ?>
                <?php else: ?>
                    <?= Html::a('Apply Now', ['employee/create', 'job_id' => $model->id], ['class' => 'btn btn-md btn-theme bg-green']) ?>
                <?php endif; ?>
            </div>
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

    @media (max-width: 768px) {
        .card-footer {
            flex-direction: column;
        }
    }
</style>