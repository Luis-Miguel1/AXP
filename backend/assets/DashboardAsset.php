<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class DashboardAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/all.min.css',
        'css/site.css',
        'css/tempusdominus-bootstrap-4.min.css',
        'css/icheck-bootstrap.min.css',
        'css/jqvmap.min.css',
        'css/adminlte.min.css',
        'css/OverlayScrollbars.min.css',
        'css/daterangepicker.css',
        'css/summernote-bs4.css',
        
    ];
    public $js = [
        'js/bootstrap.bundle.min.js',
        'js/Chart.min.js',
        'js/sparkline.js',
        'js/jquery.vmap.min.js',
        'js/jquery.vmap.usa.js',
        'js/jquery.knob.min.js',
        'js/moment.min.js',
        'js/daterangepicker.js',
        'js/tempusdominus-bootstrap-4.min.js',
        'js/summernote-bs4.min.js',
        'js/jquery.overlayScrollbars.min.js',
        'js/adminlte.js',
        'js/dashboard.js',
        'js/demo.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
