<?php

use app\models\News;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">
  <div><img src="<?= Yii::getAlias('@web') ?>/theme/adminux/html/assets/img/logo-bh.jpg" style="max-width: 10%;" alt="" /></div>
  <h1> Berita Harian <?= Html::encode($this->title) ?></h1>

  <p>
    <?= Html::a('Create News', ['create'], ['class' => 'btn btn-success']) ?>
    <?= Html::a('Print', ['report'], ['class'=> 'btn btn-primary']) ?>
    <?= Html::a('Slip', ['slip'], ['class'=> 'btn btn-primary']) ?>
    <?= Html::a('Quotation', ['quotation'], ['class'=> 'btn btn-primary']) ?>
    <?= Html::a('Attendance', ['attendance'], ['class'=> 'btn btn-primary']) ?>
  </p>

  <div class="row">
    <?php foreach ($model as $v) : ?>
      <div class="col-12 col-lg-4 d-flex align-items-stretch">
        <div class="card border-0 mb-4 w-100">
          <div class="coverimg w-100 h-180 position-relative">
            <div class="position-absolute bottom-0 start-0 w-100 mb-3 px-3 z-index-1">
              <div class="row">
                <div class="col">
                  <a href="#"><button class="btn btn-sm btn-outline-light btn-rounded">Share this</button></a>
                </div>
                <div class="col-auto">
                  <div class="dropup d-inline-block">
                    <?= Html::a('<i class="bi bi-three-dots-vertical"></i>', ['view', 'id' => $v->id], [
                      'class' => 'btn btn-square btn-sm rounded-circle btn-outline-light dd-arrow-none',
                      'data-bs-display' => 'static',
                      'role' => 'button',
                    ]) ?>
                  </div>
                </div>
              </div>
            </div>
            <img src="<?=Yii::getAlias('@web')?>/theme/adminux/html/assets/img/<?= htmlspecialchars($v->imageFile) ?>" alt="Image">
          </div>
          <div class="card-body d-flex flex-column">
            <h6 class="fw-medium"><?= $v->title ?></h6>
            <p class="text-secondary flex-grow-1" style="text-align: justify;"><?= $v->content ?><a href="<?= $v->source ?>">Read more...</a></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
