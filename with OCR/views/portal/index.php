<?php

use app\models\Portal;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Career Dashboard';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="portal-index">

    <div class="card" style="background-color: rgba(32, 30, 67); max-width: 1500px; border-radius: 15px; border: 3px solid darkblue;">
        <div class="card-body">
            <div class="text-center">
                <p class="text-secondary" style="color: white;">Get your best job at the right time</p>
                <h2 class="text-dark" style="color: white;">Start your career with us</h2>
            </div>
            <div class="row justify-content-center mt-3" style="background-color: rgba(32, 30, 67);">
                <div class="col-12 col-lg-10 col-xxl-12">
                    <div class="row">
                        <?php foreach ($model as $index => $v) : ?>
                            <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4 <?= $index >= 4 ? 'more-jobs d-none' : '' ?>">
                                <div class="card border-0 d-flex flex-column h-100">
                                    <!-- Card content -->
                                    <div class="coverimg w-100 h-180 position-relative" style="border-radius: 10px;">
                                        <img src="<?= Yii::getAlias('@web') ?>/theme/adminux/html/assets/img/<?= htmlspecialchars($v->imageFile) ?>" alt="Image">
                                    </div>
                                    <div class="card-body d-flex flex-column">
                                        <div class="row d-flex justify-content-between">
                                            <div class="col-auto">
                                                <h5 class="job-title"><?= Html::encode($v->title) ?></h5>
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

        <!-- Show More/Show Less Button Outside foreach -->
        <div class="text-center mt-1 mb-4">
        <button id="toggleJobs" class="btn btn-md btn-theme">Show More</button>
        </div>

    </div>
</div>

<script>
    document.getElementById('toggleJobs').addEventListener('click', function() {
        const moreJobs = document.querySelectorAll('.more-jobs');
        const isVisible = moreJobs[0].classList.contains('d-none');
        moreJobs.forEach(function(job) {
            if (isVisible) {
                job.classList.remove('d-none');
            } else {
                job.classList.add('d-none');
            }
        });
        this.textContent = isVisible ? 'Show Less' : 'Show More';
    });
</script>

<style>
    .job-title {
        color: white;
        font-size: 1.25rem; /* Adjust font size as needed */
        height: 3rem; /* Adjust height to fit your design */
        overflow: hidden; /* Hide overflowed text */
        display: flex; /* Center text vertically */
        align-items: center; /* Center text vertically */
    }
</style>
