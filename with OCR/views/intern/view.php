<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Intern $model */

$this->title = Html::encode($model->name);
$this->params['breadcrumbs'][] = ['label' => 'Career', 'url' => ['portal/index']];
$this->params['breadcrumbs'][] = ['label' => 'Internship Applicant', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

\yii\web\YiiAsset::register($this);
?>

<div class="intern-view container mt-4">

    <div class="d-flex flex-row">
        <!-- Left Column for Details -->
        <div class="col-lg-6 mb-4">
            <div class="card h-100" style="border: 3px solid darkblue; background-color: rgba(32, 30, 67, 0.8); padding: 20px; border-radius: 10px;">
                <div class="card-header">
                    <h1 style="font-size: 35px; color:white"> Applicant Details </h1>
                </div>
                <div class="card-body" >
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#experience">Personal Detailss</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#skills">Internship Information</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="experience" class="container tab-pane active"><br>
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
                                            <th style="border: none; width: 100px;">Name:</th>
                                            <td style="border: none; color: white;"><?= Html::encode($model->name) ?></td>
                                        </tr>
                                        <tr style="border: none;">
                                            <th style="border: none; width: 100px;">IC Number:</th>
                                            <td style="border: none; color: white;"><?= Html::encode($model->ic_number) ?></td>
                                        </tr>
                                        <tr style="border: none;">
                                            <th style="border: none; width: 100px;">Age:</th>
                                            <td style="border: none; color: white;"><?= Html::encode($model->age) ?> years old</td>
                                        </tr>
                                        <tr style="border: none;">
                                            <th style="border: none; width: 100px;">Gender:</th>
                                            <td style="border: none; color: white;"><?= Html::encode($model->gender0->gender ?? '') ?></td>
                                        </tr>
                                        <tr style="border: none;">
                                            <th style="border: none; width: 100px;">status:</th>
                                            <td style="border: none; color: white;"><?= Html::encode($model->status0->status_name ?? '') ?></td>
                                        </tr>
                                        <tr style="border: none;">
                                            <th style="border: none; width: 100px;">Date of Birth:</th>
                                            <td style="border: none; color: white;"><?= Html::encode((new DateTime($model->dob))->format('d F Y')) ?></td>
                                        </tr>
                                    </table>
                                </div>
                                </div>
                                <table class="table text-white mt-3" style="border: none;">
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
                                        <td style="border: none; color: white;"><?= Html::encode($model->address1) ?>
                                        <br> <?= Html::encode($model->address2) ?> 
                                        <br> <?= Html::encode($model->poscode) ?>, <?= Html::encode($model->city) ?> 
                                        <br> <?= Html::encode($model->state0->state_name ?? '') ?> </td>
                                    </tr>
                                    <tr>
                                        <th style="border: none;">Emergency Contact:</th>
                                        <td style="border: none; color: white;"><?= Html::encode($model->guardian) ?></td>
                                    </tr>
                                    <tr>
                                        <th style="border: none;">Relationship:</th>
                                        <td style="border: none; color: white;"><?= Html::encode($model->relay0->relationship_name ?? '') ?></td>
                                    </tr>
                                    <tr>
                                        <th style="border: none;">Emergency Number:</th>
                                        <td style="border: none; color: white;"><?= Html::encode($model->emergency_contact) ?></td>
                                    </tr>
                                </table>
                        </div>
                        <div id="skills" class="container tab-pane fade"><br>
                            <h3 class="title">University Information</h3>
                            <table class="table" style="border: none;">
                                <tr style="border: none;">
                                    <th style="border: none;">University:</th>
                                    <td style="border: none; color: white;"><?= Html::encode($model->university) ?></td>
                                </tr>
                                <tr style="border: none;">
                                    <th style="border: none;">Education Level</th>
                                    <td style="border: none; color: white;"><?= Html::encode($model->education0->level_name ?? '') ?></td>
                                </tr>
                                <tr style="border: none;">
                                    <th style="border: none;">Course:</th>
                                    <td style="border: none; color: white;"><?= Html::encode($model->course) ?></td>
                                </tr>
                                <tr style="border: none;">
                                    <th style="border: none;">Internship Period:</th>
                                    <td style="border: none; color: white;"> 
                                        <?= Html::encode((new DateTime($model->start_date))->format('d F Y')) ?> <Strong>-</Strong>
                                        <?= Html::encode((new DateTime($model->end_date))->format('d F Y')) ?></td>
                                </tr>
                            </table>

                            <h3 class="title">Academic Advisor Information</h3>
                            <table>
                                <tr style="border: none;">
                                    <th style="border: none;">Academic Advisor's Name:</th>
                                    <td style="border: none; color: white;"><?= Html::encode($model->pa) ?></td>
                                </tr>
                                <tr style="border: none;">
                                    <th style="border: none;">Academic Advisor's Position:</th>
                                    <td style="border: none; color: white;"><?= Html::encode($model->position) ?></td>
                                </tr>
                                <tr style="border: none;">
                                    <th style="border: none;">Academic Advisor's Contact:</th>
                                    <td style="border: none; color: white;"><?= Html::encode($model->pa_contact) ?></td>
                                </tr>
                                <tr style="border: none;">
                                    <th style="border: none;">Academic Advisor's Email</th>
                                    <td style="border: none; color: white;"><?= Html::encode($model->pa_email) ?></td>
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
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingCoverLetter">
                            <button class="accordion-button collapsed" style="color: black;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCoverLetter" aria-expanded="false" aria-controls="collapseCoverLetter">
                                Cover Letter
                            </button>
                        </h2>
                        <div id="collapseCoverLetter" class="accordion-collapse collapse" aria-labelledby="headingCoverLetter" data-bs-parent="#documentsAccordion">
                            <div class="accordion-body" style="color: black;">
                                <?php if ($model->cover_letter): ?>
                                    <iframe src="<?= Yii::getAlias('@web') . '/theme/adminux/html/assets/cover_letter/' . $model->cover_letter ?>" width="100%" height="600px"></iframe>
                                <?php else: ?>
                                    <p>No cover letter uploaded.</p>
                                <?php endif; ?>
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
