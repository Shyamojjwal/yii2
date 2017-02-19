<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/main.css',
    ];
    public $js = [
        'js/jquery-2.1.4.min.js',
        'js/bootstrap.min.js',
        'js/essential-plugins.js',
        'js/jquery-2.1.4.min.js',
        'js/plugins/bootstrap-datepicker.min.js',
        'js/plugins/bootstrap-notify.min.js',
        'js/plugins/moment.min.js',
        'js/plugins/fullcalendar.min.js',
        'js/plugins/jquery-ui.custom.min.js',
        'js/plugins/jquery.dataTables.min.js',
        'js/plugins/jquery.vmap.min.js',
        'js/plugins/jquery.vmap.sampledata.js',
        'js/plugins/jquery.vmap.world.js',
        'js/plugins/pace.min.js',
        'js/plugins/select2.min.js',
        'js/plugins/sweetalert.min.js',
        'js/main.js',
        'js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
