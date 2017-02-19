<?php

use yii\helpers\Url;

$user = $this->context->getUser(Yii::$app->user->id);
$userFullName = ($user->full_name != '' || $user->full_name != NULL) ? $user->full_name : "NOT SET";
?>
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse page-sidebar-menus" id="page-sidebar-menus">
        <div class="clearfix sidebar-profile  <?= (Yii::$app->controller->id == "profile") ? 'active' : '' ?>" id="sidebar-profile" style="width: 100%;">
            <a href="<?= Url::toRoute('profile/index') ?>">
                <div class="profile">
                    <div class="profile_pic">
                        <img src="<?= $this->context->getUserImages(Yii::$app->user->id) ?>" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2><?= $userFullName ?></h2>
                    </div>
                </div>
            </a>
        </div>
        <div id="side-bar-menu-sec">
            <ul class="page-sidebar-menu page-sidebar-menu-hover-submenu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                <li class="start <?= (Yii::$app->controller->id == "dashboard") ? 'active' : '' ?>">
                    <a href="<?= Url::toRoute('dashboard/index') ?>">
                        <i class="icon-home"></i>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li class="start <?= (Yii::$app->controller->id == "manageuser") ? 'active' : '' ?>">
                    <a href="<?= Url::toRoute('manageuser/index') ?>">
                        <i class="icon-users"></i>
                        <span class="title">Manage Users</span>
                    </a>
                </li>
                <li class="start <?= (Yii::$app->controller->id == "manageuser") ? 'active' : '' ?>">
                    <a href="<?= Url::toRoute('manageuser/index') ?>">
                        <i class="icon-users"></i>
                        <span class="title">Manage Users</span>
                    </a>
                </li>
                <li class="start <?= (Yii::$app->controller->id == "manageuser") ? 'active' : '' ?>">
                    <a href="<?= Url::toRoute('manageuser/index') ?>">
                        <i class="icon-users"></i>
                        <span class="title">Manage Users</span>
                    </a>
                </li>
                <li class="start <?= (Yii::$app->controller->id == "manageuser") ? 'active' : '' ?>">
                    <a href="<?= Url::toRoute('manageuser/index') ?>">
                        <i class="icon-users"></i>
                        <span class="title">Manage Users</span>
                    </a>
                </li>
                <li class="start <?= (Yii::$app->controller->id == "manageuser") ? 'active' : '' ?>">
                    <a href="<?= Url::toRoute('manageuser/index') ?>">
                        <i class="icon-users"></i>
                        <span class="title">Manage Users</span>
                    </a>
                </li>
                <li class="start <?= (Yii::$app->controller->id == "manageuser") ? 'active' : '' ?>">
                    <a href="<?= Url::toRoute('manageuser/index') ?>">
                        <i class="icon-users"></i>
                        <span class="title">Manage Users</span>
                    </a>
                </li>
                <li class="start <?= (Yii::$app->controller->id == "manageuser") ? 'active' : '' ?>">
                    <a href="<?= Url::toRoute('manageuser/index') ?>">
                        <i class="icon-users"></i>
                        <span class="title">Manage Users</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="icon-basket"></i>
                        <span class="title">eCommerce</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="ecommerce_index.html">
                                <i class="icon-home"></i>
                                Dashboard</a>
                        </li>
                        <li>
                            <a href="ecommerce_orders.html">
                                <i class="icon-basket"></i>
                                Orders</a>
                        </li>
                        <li>
                            <a href="ecommerce_orders_view.html">
                                <i class="icon-tag"></i>
                                Order View</a>
                        </li>
                        <li>
                            <a href="ecommerce_products.html">
                                <i class="icon-handbag"></i>
                                Products</a>
                        </li>
                        <li>
                            <a href="ecommerce_products_edit.html">
                                <i class="icon-pencil"></i>
                                Product Edit</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="sidebar-footer hidden-small" id="sidebar-menu-option">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
    </div>
</div>