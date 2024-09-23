<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\User $model */

$this->title = 'Profile - ' . Html::encode($model->username);
$this->params['breadcrumbs'][] = ['label' => 'Career', 'url' => ['portal/index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="user-view">
    <br><br><br>

    <div class="site-login d-flex justify-content-center align-items-center min-vh-90" style="background-color: transparent;">

        <div class="card" id="card" style="background-color: rgba(32, 30, 67, 0.8) !important; border: 3px solid darkblue; width: 100%; max-width: 650px;">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <br>
                        <h6 class="title">Profile</h6>
                        <table class="table table-borderless" style="color: white;">
                            <tr>
                                <th style="border: none; width: 100px;">Username</th>
                                <td style="border: none; color: white;">: <?= Html::encode($model->username) ?></td>
                                <th style="border: none; width: 100px;">Role</th>
                                <td style="border: none; color: white;">: <?= Html::encode($model->userRole0->name ?? 'N/A') ?> </td>
                            </tr>
                            <tr>
                                <th style="border: none; width: 100px;">First Name</th>
                                <td style="border: none; color: white;">: <?= Html::encode($model->firstname) ?></td>
                                <th style="border: none; width: 100px;">Last Name:</th>
                                <td style="border: none; color: white;">: <?= Html::encode($model->lastname) ?></td>
                            </tr>
                            <tr>
                                <th style="border: none; width: 100px;">Phone:</th>
                                <td style="border: none; color: white;">: <?= Html::encode($model->phone) ?></td>
                                <th style="border: none; width: 100px;">Email</th>
                                <td style="border: none; color: white;">: <?= Html::encode($model->email) ?></td>
                            </tr>
                            <tr>
                                <th style="border: none; width: 100px;">Designation:</th>
                                <td style="border: none; color: white;">: <?= Html::encode($model->designation) ?></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="card-footer d-flex justify-content-end" style="border: none; background-color:transparent;">
                    <?= Html::a('Back', ['portal/index'], ['class' => 'btn btn-md btn-theme me-2']) ?>
                    <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-md btn-theme bg-blue me-2']) ?>
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
    <br><br><br><br><br>

</div>
