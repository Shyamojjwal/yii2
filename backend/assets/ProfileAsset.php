<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class ProfileAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
//    public $sourcePath = '@bower/backend/';
    public $css = [
        'themes/global/plugins/font-awesome/css/font-awesome.min.css',
        'themes/global/plugins/simple-line-icons/simple-line-icons.min.css',
        'themes/global/plugins/bootstrap/css/bootstrap.min.css',
        'themes/global/plugins/jqvmap/jqvmap/jqvmap.css',
        'themes/global/pages/css/profile.css',
        'themes/global/pages/css/tasks.css',
        'themes/global/assets/css/components-md.css',
        'themes/global/assets/css/sidebar.css',
        'themes/global/plugins/bootstrap-datepicker/css/datepicker3.css',
        'themes/global/assets/css/plugins-md.css',
        'themes/global/layout/css/layout.css',
        'themes/global/layout/css/themes/grey.css',
        'themes/global/layout/css/custom.css',
        'themes/admin/css/admin-site.css',
    ];
    public $js = [
        'themes/global/plugins/jquery-migrate.min.js',
        'themes/global/plugins/jquery-ui/jquery-ui.min.js',
        'themes/global/plugins/bootstrap/js/bootstrap.min.js',
        'themes/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
        'themes/global/plugins/jquery.cokie.min.js',
        'themes/global/plugins/jquery.nicescroll/jquery.nicescroll.min.js',
        'themes/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js',
        'themes/global/assets/scripts/metronic.js',
        'themes/global/layout/scripts/layout.js',
        'themes/global/layout/scripts/demo.js',
        'themes/global/pages/scripts/profile.js',
//        ============== custom js file ===============
        'themes/admin/js/admin-site.js',
        'themes/admin/js/custom.js',
        'themes/assets/js/common.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
