<?php

use yii\helpers\Html;
?>
<style>
    .alert{
        border-radius: 5px !important;
    }
    input, button{
        border-radius: 5px !important;
    }
</style>
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="login-form" id="loginform" action="" method="post">
        <input type="hidden" name="_csrf" value="<?= Yii::$app->request->getCsrfToken() ?>"/>
        <h3 class="form-title">Login to your account</h3>
        <div class="alert alert-danger alert-dismissable display-hide" onclick="$('#help-block').parent('div').addClass('display-hide');">
            <a href="javascript:void(0);" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <span id="help-block"></span>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input class="form-control placeholder-no-fix" type="text" id="loginform-username" autocomplete="off" placeholder="Username" name="LoginForm[username]"/>
            </div>
            <div class="help-block"></div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control placeholder-no-fix" id="loginform-password" type="password" autocomplete="off" placeholder="Password" name="LoginForm[password]"/>
            </div>
            <div class="help-block"></div>
        </div>
        <div class="form-actions">
            <label class="checkbox">
                <input type="checkbox" name="remember" value="1"/> Remember me </label>
            <button type="submit" class="btn blue pull-right">
                <img src="<?= $this->context->getStaticImages('ajax-loader.gif') ?>" id="login-progress-loader" width="16" style="margin-right: 7px; display: none;"/>
                Login <i class="m-icon-swapright m-icon-white"></i>
            </button>
        </div>
    </form>
    <!-- END LOGIN FORM -->
</div>