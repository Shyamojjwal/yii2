<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
//    public $sourcePath = '@bower/backend/';
    public $css = [
        'themes/global/plugins/font-awesome/css/font-awesome.min.css',
        'themes/global/plugins/simple-line-icons/simple-line-icons.min.css',
        'themes/global/plugins/bootstrap/css/bootstrap.min.css',
        'themes/global/plugins/nprogress/nprogress.css',
        'themes/global/plugins/uniform/css/uniform.default.css',
        'themes/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',
        'themes/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css',
        'themes/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css',
        'themes/global/plugins/fullcalendar/fullcalendar.min.css',
        'themes/global/plugins/jqvmap/jqvmap/jqvmap.css',
        'themes/global/pages/css/profile.css',
        'themes/global/pages/css/tasks.css',
        'themes/global/assets/css/components-md.css',
        'themes/global/assets/css/sidebar.css',
        'themes/global/assets/css/plugins-md.css',
        'themes/global/layout/css/layout.css',
        'themes/global/layout/css/themes/grey.css',
        'themes/global/layout/css/custom.css',
    ];
    public $js = [
        'themes/global/plugins/jquery.min.js',
        'themes/global/plugins/jquery-migrate.min.js',
        'themes/global/plugins/jquery-ui/jquery-ui.min.js',
        'themes/global/plugins/bootstrap/js/bootstrap.min.js',
        'themes/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
        'themes/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
        'themes/global/plugins/jquery.blockui.min.js',
        'themes/global/plugins/jquery.cokie.min.js',
        'themes/global/plugins/uniform/jquery.uniform.min.js',
        'themes/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
        'themes/global/plugins/jqvmap/jqvmap/jquery.vmap.js',
        'themes/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js',
        'themes/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js',
        'themes/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js',
        'themes/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js',
        'themes/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js',
        'themes/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js',
        'themes/global/plugins/flot/jquery.flot.min.js',
        'themes/global/plugins/flot/jquery.flot.resize.min.js',
        'themes/global/plugins/flot/jquery.flot.categories.min.js',
        'themes/global/plugins/jquery.pulsate.min.js',
        'themes/global/plugins/bootstrap-daterangepicker/moment.min.js',
        'themes/global/plugins/bootstrap-daterangepicker/daterangepicker.js',
        'themes/global/plugins/fullcalendar/fullcalendar.min.js',
        'themes/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js',
        'themes/global/plugins/jquery.sparkline.min.js',
        'themes/global/plugins/jquery.nicescroll/jquery.nicescroll.min.js',
        'themes/global/assets/scripts/metronic.js',
        'themes/global/layout/scripts/layout.js',
        'themes/global/layout/scripts/demo.js',
        'themes/global/pages/scripts/index.js',
        'themes/global/pages/scripts/tasks.js',
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
