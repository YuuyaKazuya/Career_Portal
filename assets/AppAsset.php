<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'theme/adminux/html/assets/scss/style.css',
        'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css',
        "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css",
        'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css',
    ];
    public $js = [
        'theme/adminux/html/assets/js/jquery-3.3.1.min.js',
        'theme/adminux/html/assets/js/popper.min.js',
        'theme/adminux/html/assets/vendor/bootstrap-5/dist/js/bootstrap.bundle.js',
        'theme/adminux/html/assets/js/main.js',
        'theme/adminux/html/assets/js/color-scheme.js',
        'theme/adminux/html/assets/js/pwa-services.js',
        'theme/adminux/html/assets/vendor/daterangepicker/daterangepicker.js',
        'theme/adminux/html/assets/vendor/chosen_v1.8.7/chosen.jquery.min.js',
        'theme/adminux/html/assets/vendor/chart-js-3.3.1/chart.min.js',
        'theme/adminux/html/assets/vendor/progressbar-js/progressbar.min.js',
        'theme/adminux/html/assets/vendor/swiper-7.3.1/swiper-bundle.min.js',
        'theme/adminux/html/assets/js/header-title.js',
        'https://code.jquery.com/jquery-3.6.0.min.js',
        'https://code.jquery.com/ui/1.12.1/jquery-ui.min.js',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js',
        'https://cdn.jsdelivr.net/npm/@popperjs/core@2/dist/umd/popper.min.js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js',
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
