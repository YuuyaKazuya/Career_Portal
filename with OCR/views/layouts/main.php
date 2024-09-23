<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\BootstrapAsset;

BootstrapAsset::register($this);

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style>
        .dark-mode {
            --adminux-theme-grad-3: #201E43;
            --adminux-theme-grad-1: #134B70;
            --adminux-theme-bg: #201E43;
            --adminux-theme-bg-2: #134B70;
        }
        /* Custom background for the main content */
        body {
            font-family: var(--fontFamily);
            font-weight: 400;
            font-size: var(--fontSize);
            overflow-y: auto;
            color: var(--adminux-theme-text);
            scroll-behavior: smooth;
            background-color: var(--adminux-theme-bg);
            background-image: radial-gradient(at 30% 20%, var(--adminux-theme-bg-2) 0%, var(--adminux-theme-bg) 100%);
            background-position: top center;
            background-size: cover;
            background-attachment: fixed;

            &>.coverimg {
                position: fixed;
            }
        }

    </style>
</head>

<body class="d-flex flex-column">
    <?php $this->beginBody() ?>

    <header id="header" class="flex-shrink-0 mt-4">
        <?= $this->render('header.php') ?>
    </header>

    <main id="main" class="flex-shrink-0 mt-5" role="main">
        <div class="container">
            <?php if (!empty($this->params['breadcrumbs'])) : ?>
                <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
            <?php endif ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>

    <footer id="footer" class="mt-5 bg-custom py-3">
        <div class="container">
            <div class="row text-muted">
                <div class="col-md-6 text-center text-md-start">&copy; Copyright Aerostar Systems Sdn Bhd - All Rights Reserved <?= date('Y') ?></div>
                <div class="col-md-6 text-center text-md-end">Design & Develop by Aerostar Systems Sdn Bhd</div>
            </div>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>

<style>
    /* Custom navbar background */
.bg-custom {
    background-color: rgba(32, 30, 67); /* Updated with a bit of opacity */
}
</style>
