<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */
/** @var app\models\Careers[] $model */

$this->title = 'Internship';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="careers-index">

    <p>
        <?= Html::a('Create Internship', ['create'], ['class' => 'btn btn-md btn-theme bg-green']) ?>
        <?= Html::a('Intern Dashboard', ['intern/index'], ['class' => 'btn btn-md btn-theme bg-blue']) ?>
    </p>

    <div class="card" style="background-color: darkred; max-width: 1500px; border-radius: 15px;">
        
        <div class="card-body">

            <div class="text-center mb-4 mb-md-5">
                <p class="text-secondary" style="color: white;">Get your best job at the right time</p>
                <h2 class="text-dark" style="color: white;">Start your career with us</h2>
            </div>
            <div class="row justify-content-center mt-3" style="background-color: darkred;">
                <div class="col-12 col-lg-10 col-xxl-12">
                    <div class="row">
                        <?php foreach ($model as $v) : ?>
                            <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                                <div class="card border-0 d-flex flex-column h-100">
                                    <div class="coverimg w-100 h-180 position-relative" style="border-radius: 10px;">
                                        <img src="<?= Yii::getAlias('@web') ?>/theme/adminux/html/assets/img/<?= htmlspecialchars($v->imageFile) ?>" alt="Image">
                                    </div>
                                    <div class="card-body d-flex flex-column">
                                        <div class="row d-flex justify-content-between">
                                            <div class="col-auto">
                                                <h5 style="color: white;"><?= Html::encode($v->title) ?></h5>
                                            </div>
                                        </div>
                                        <hr style="color: white;">
                                        <h5 class="bi bi-briefcase" style="font-size: 0.9rem; color: white;"> <span><?= Html::encode($v->jobType0->jobType) ?></span> </h5>
                                        <h6 class="bi bi-geo-alt"style="font-size: 0.9rem; color: white;"> <span><?= Html::encode($v->location) ?></span> </h6>
                                        <hr style="color: white;">
                                        <p style="font-size: 0.9rem; color: white;"><?= Html::encode($v->schedule) ?></p>
                                        <p class="mb-3 mb-lg-4" style="font-size: 0.9rem; color: white;">RM <?= Html::encode($v->min_salary) ?> - <?= Html::encode($v->max_salary) ?> per month</p>
                                        <p class="text-secondary" style="font-size: 0.85rem; color: white; text-align: justify;"><?= Html::encode($v->description) ?></p>

                                        <div class="mt-auto d-flex justify-content-end">
                                            <?= Html::a('Read More', ['view', 'id' => $v->id], [
                                                        'class' => 'btn btn-md btn-theme me-2',
                                                        'data-bs-display' => 'static',
                                                        'role' => 'button',
                                                    ]) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

</div>
