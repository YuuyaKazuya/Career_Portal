<?php

use yii\bootstrap5\Html as Bootstrap5Html;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Employee $model */

$this->title = Html::encode($model->name);
$this->params['breadcrumbs'][] = ['label' => 'Career', 'url' => ['portal/index']];
$this->params['breadcrumbs'][] = ['label' => 'Employment Applicant', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

\yii\web\YiiAsset::register($this);

?>

<div class="employee-view container mt-4">

        <div class="d-flex flex-row">
            <!-- Left Column for Details -->
            <div class="col-lg-6 mb-4">
                <div class="card h-100" style="border: 2px solid darkblue; background-color: rgba(32, 30, 67, 0.8); padding: 20px; border-radius: 10px;">
                    <div class="card-header">
                        <h1 style="font-size: 35px; color:white"> Applicant Details </h1>
                    </div>
                    <div class="card-body" >
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#personal">Personal Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#job">Job</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#education">Education & Skills</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#project">Training & Project</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="personal" class="container tab-pane active"><br>
                                    <div class="d-flex">
                                        <div class="me-3">
                                            <?= Html::img(Yii::getAlias('@web') . '/theme/adminux/html/assets/img/' . $model->image, [
                                                'class' => 'img-thumbnail',
                                                'width' => '200px',
                                                'height' => '150px',
                                                'style' => 'object-fit: cover;'
                                            ]) ?>
                                        </div>
                                        <div valign="middle">
                                        <table class="table" style="border: none;">
                                            <tr style="border: none;">
                                                <th style="border: none; width: 100px;">Age:</th>
                                                <td style="border: none; color: white;"><?= Html::encode($model->age) ?> years old</td>
                                            </tr>
                                            <tr style="border: none;">
                                                <th style="border: none; width: 100px;">Gender:</th>
                                                <td style="border: none; color: white;"><?= Html::encode($model->gender0->gender ?? '') ?></td>
                                            </tr>
                                            <tr>
                                                <th style="border: none;">Race:</th>
                                                <td style="border: none; color: white;"><?= Html::encode($model->race)?></td>
                                            </tr>
                                            <tr>
                                                <th style="border: none;">Religion:</th>
                                                <td style="border: none; color: white;"><?= Html::encode($model->religion)?></td>
                                            </tr>
                                            <tr style="border: none;">
                                                <th style="border: none; width: 100px;">status:</th>
                                                <td style="border: none; color: white;"><?= Html::encode($model->marital_status) ?> <?= Html::encode($model->marital_status_other) ?></td>
                                            </tr>
                                            <tr style="border: none;">
                                                <th style="border: none; width: 100px;">Date of Birth:</th>
                                                <td style="border: none; color: white;"><?= Html::encode((new DateTime($model->dob))->format('d F Y')) ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    </div>
                                    <table class="table text-white mt-3" style="border: none;">
                                        <tr style="border: none;">
                                            <th style="border: none; width: 100px;">Name:</th>
                                            <td style="border: none; color: white;"><?= Html::encode($model->name) ?></td>
                                        </tr>
                                        <tr style="border: none;">
                                            <th style="border: none; width: 100px;">IC Number:</th>
                                            <td style="border: none; color: white;"><?= Html::encode($model->ic_number) ?></td>
                                        </tr>
                                        <tr>
                                            <th style="border: none;">Phone:</th>
                                            <td style="border: none; color: white;"><?= Html::encode($model->phone) ?></td>
                                        </tr>
                                        <tr>
                                            <th style="border: none;">Email:</th>
                                            <td style="border: none; color: white;"><?= Html::mailto($model->email) ?></td>
                                        </tr>
                                        <tr>
                                            <th style="border: none;">Address</th>
                                            <td style="border: none; color: white;"><?= Html::encode($model->address) ?>
                                            <br> <?= Html::encode($model->address1) ?> 
                                            <br> <?= Html::encode($model->poscode) ?>, <?= Html::encode($model->city) ?> 
                                            <br> <?= Html::encode($model->state0->state_name ?? '') ?> </td>
                                        </tr>
                                        <tr>
                                            <th style="border: none;">License:</th>
                                            <td style="border: none; color: white;"><?= Html::encode($model->license) ?></td>
                                        </tr>
                                    </table>
                            </div>
                            <div id="job" class="container tab-pane fade"><br>
                                <h3 class="title">Desired Job</h3>
                                <table class="table" style="border: none;">
                                    <tr style="border: none;">
                                        <th style="border: none;">Job Type:</th>
                                        <td style="border: none; color: white;"><?= Html::encode($model->jobType0->jobType ?? '') ?></td>
                                        <th style="border: none;">Job Applied:</th>
                                        <td style="border: none; color: white;"><?= Html::encode($model->job0->title ?? '') ?></td>
                                    </tr>
                                    <tr style="border: none;">
                                        <th style="border: none;">Desired Salary:</th>
                                        <td style="border: none; color: white;">RM <?= Html::encode($model->salary) ?></td>
                                        <th style="border: none;">Availability:</th>
                                        <td style="border: none; color: white;"><?= Html::encode((new DateTime($model->date))->format('d F Y')) ?> </td>
                                    </tr>
                                </table>

                                <h3 class="title">Current Jobs Details</h3>
                                <table class="table" style="border: none;">
                                    <tr style="border: none;">
                                        <th style="border: none;">Company Name:</th>
                                        <td style="border: none; color: white;"><?= Html::encode($model->company) ?></td>
                                        <th style="border: none;">Job Position:</th>
                                        <td style="border: none; color: white;"><?= Html::encode($model->position) ?></td>
                                    </tr>
                                    <tr style="border: none;">
                                        <th style="border: none;">Working Period:</th>
                                        <td style="border: none; color: white;"><?= Html::encode($model->period) ?></td>
                                    </tr>
                                    <tr style="border: none;">
                                        <th style="border: none;">Reason for leaving:</th>
                                        <td style="border: none; color: white;"><?= Html::encode($model->reason) ?></td>
                                    </tr>
                                </table>
                            </div>

                            <div id="education" class="container tab-pane fade"><br>
                                <h3 class="title">Highest Education</h3>
                                <table class="table" style="border: none;">
                                    <tr style="border: none;">
                                        <th style="border: none;">University Name:</th>
                                        <td style="border: none; color: white;"><?= Html::encode($model->university) ?></td>
                                    </tr>
                                    <tr>
                                        <th style="border: none;">Education Level:</th>
                                        <td style="border: none; color: white;"><?= Html::encode($model->education0->level_name ?? '') ?></td>
                                    </tr>
                                    <tr style="border: none;">
                                        <th style="border: none;">Course Taken:</th>
                                        <td style="border: none; color: white;"><?= Html::encode($model->course) ?></td>
                                    </tr>
                                    <tr>
                                        <th style="border: none;">Graduation Date:</th>
                                        <td style="border: none; color: white;"><?= Html::encode((new DateTime($model->graduate))->format('d F Y')) ?> </td>
                                    </tr>
                                </table>

                                <h3 class="title">Languages</h3>
                                <table class="table" style="border-collapse: collapse; width: 100%; border: 1px solid white;">
                                    <tr>
                                        <th style="border: 1px solid white;">Proficiency</th>
                                        <th style="border: 1px solid white;">Malay</th>
                                        <th style="border: 1px solid white;">English</th>
                                    </tr>
                                    <tr>
                                        <th style="border: 1px solid white;">Writing Proficiency:</th>
                                        <td style="border: 1px solid white; color: white;"><?= Html::encode($model->malay_writing) ?></td>
                                        <td style="border: 1px solid white; color: white;"><?= Html::encode($model->english_writing) ?></td>
                                    </tr>
                                    <tr>
                                        <th style="border: 1px solid white;">Speaking Proficiency:</th>
                                        <td style="border: 1px solid white; color: white;"><?= Html::encode($model->malay_speaking) ?></td>
                                        <td style="border: 1px solid white; color: white;"><?= Html::encode($model->english_speaking) ?></td>
                                    </tr>
                                </table>

                                <h3 class="title">Skills</h3>
                                <table class="table" style="border: none;">
                                    <tr style="border: none;">
                                        <th style="border: none;">Skills:</th>
                                        <td style="border: none; color: white;"><?= nl2br(Html::encode($model->skills)) ?></td>
                                    </tr>
                                </table>
                            </div>

                            <div id="project" class="container tab-pane fade"><br>
                                <h3 class="title">Training</h3>
                                <table class="table" style="border: none;">
                                    <tr style="border: none;">
                                        <th style="border: none;">Training Received:</th>
                                        <td style="border: none; color: white;"><?= nl2br(Html::encode($model->training)) ?></td>
                                    </tr>
                                </table>

                                <h3 class="title">Projects</h3>
                                <table class="table" style="border: none;">
                                    <tr style="border: none;">
                                        <th style="border: none;">Project Involve:</th>
                                        <td style="border: none; color: white;"><?= nl2br(Html::encode($model->project)) ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end" style="border: none; background-color:transparent;">
                        <?= Html::a('Back', ['index'], ['class' => 'btn btn-md btn-theme me-2']) ?>
                        <?php
                            if (Yii::$app->user->identity->role==1) :
                        ?>
                            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-md btn-theme bg-blue me-2']) ?>
                            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                                'class' => 'btn btn-md btn-theme bg-red',
                                'data' => [
                                    'confirm' => 'Are you sure you want to delete this item?',
                                    'method' => 'post',
                                ],
                            ]) ?>
                        <?php 
                            endif; 
                        ?>
                    </div>
                </div>
            </div>

            <!-- Right Column for Resume and Cover Letter -->
            <div class="col-lg-6 mb-4 ms-4">
                <div class="card h-100" style="border: 2px solid darkblue; background-color: rgba(32, 30, 67, 0.8); padding: 20px; border-radius: 10px;">
                    <div class="card-body">
                        <div class="accordion" id="documentsAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingResume">
                                    <button class="accordion-button" style="color: black;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseResume" aria-expanded="true" aria-controls="collapseResume">
                                        Resume
                                    </button>
                                </h2>
                                <div id="collapseResume" class="accordion-collapse collapse show" aria-labelledby="headingResume" data-bs-parent="#documentsAccordion">
                                    <div class="accordion-body" style="color: black;">
                                        <?php if ($model->resume): ?>
                                            <iframe src="<?= Yii::getAlias('@web') . '/theme/adminux/html/assets/resume/' . $model->resume ?>" width="100%" height="600px"></iframe>
                                        <?php else: ?>
                                            <p>No resume uploaded.</p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
    </style>

</div>
