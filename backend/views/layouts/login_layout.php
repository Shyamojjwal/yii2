<?php
/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\LoginAsset;
use yii\helpers\Html;

LoginAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->context->getProjectTItle() . ": ".$this->title) ?></title>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
        <?php $this->head() ?>
    </head>
    <body  class="page-md page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo login">
        <?= $this->render('page-loading') ?>
        <div class="logo">
            <a href="<?= Yii::$app->urlManager->createUrl('/') ?>">
                <img src="<?= $this->context->getProjectBigLogo() ?>" alt=""/>
            </a>
        </div>

        <?= $content ?>

        <div class="copyright">
            <?= date('Y') ?> &copy; <?= $this->context->getProjectTItle() ?> - Admin Login Panel.
        </div>

        <script>
            admin_url = "<?= Yii::$app->request->baseUrl . '/' ?>";
        </script>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
