<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class LoginAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'themes/global/plugins/font-awesome/css/font-awesome.min.css',
        'themes/global/plugins/bootstrap/css/bootstrap.min.css',
        'themes/global/pages/css/login-soft.css',
        'themes/global/assets/css/components.css',
        'themes/global/assets/css/lobibox.min.css',
    ];
    public $js = [
        'themes/global/plugins/jquery.min.js',
        'themes/global/plugins/jquery-ui/jquery-ui.min.js',
        'themes/global/plugins/bootstrap/js/bootstrap.min.js',
        'themes/global/assets/scripts/lobibox.js',
        'themes/global/assets/scripts/customAjaxNotifyFunctions.js',
        'themes/global/plugins/backstretch/jquery.backstretch.min.js',
        'themes/global/plugins/jquery.nicescroll/jquery.nicescroll.min.js',
////        custom js file
        'themes/assets/js/login-asset-common.js',
        'themes/assets/js/login-script.js',
        'themes/assets/js/common.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
