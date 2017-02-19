<?php
/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\ProfileAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

ProfileAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->context->getProjectTItle() . ": " . $this->title) ?></title>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
        <?php $this->head() ?>
    </head>
    <body class="page-md page-boxed page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-sidebar-closed-hide-logo">
        <?= $this->render('page-loading') ?>
        <?php $this->beginBody() ?>

        <?= $this->render('menu/header'); ?>
        <div class="clearfix"></div>
        <div class="container">
            <div class="page-container">
                <!-- BEGIN SIDEBAR -->
                <?= $this->render('menu/left'); ?>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <div class="page-content">
                        <?= $content ?>
                    </div>
                </div>
            </div>
            <!-- footer content -->
            <?= $this->render('menu/footer'); ?>
            <!-- /footer content -->
        </div>

        <script>
            admin_url = "<?= Yii::$app->request->baseUrl . '/' ?>";
        </script>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
