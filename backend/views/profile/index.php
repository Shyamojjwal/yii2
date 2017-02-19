<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$user = $this->context->getUser(Yii::$app->user->id);
$userName = ($user->first_name != '' || $user->first_name != NULL) ? $user->first_name : $user->username;
$userFullName = ($user->full_name != '' || $user->full_name != NULL) ? $user->full_name : "NOT SET";
?>
<!--======================= Title Bar ========================-->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="<?= Yii::$app->urlManager->createUrl('/') ?>">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="javascript:void(0);">User Account</a>
        </li>
    </ul>
    <div class="page-toolbar">
    </div>
</div>
<!--======================= Page Title Bar ========================-->
<?php if (Yii::$app->session->hasFlash('success-msg')) : ?>
    <div class="alert alert-success alert-dismissable" style="font-size: 15px;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> <?= Yii::$app->session->getFlash('success-msg') ?>
    </div>
<?php endif; ?>
<div class="row">
    <div class="col-md-12">
        <div class="profile-sidebar" style="width:250px;">
            <div class="portlet light profile-sidebar-portlet">
                <div class="profile-userpic">
                    <img src="<?= $this->context->getUserImages(Yii::$app->user->id) ?>" title="Click to Upload New Profile Picture" onclick="$('#profileimg-modal').modal('show')" style="cursor: pointer;" class="title-tooltip img-responsive" alt="<?= $userFullName ?>">
                </div>
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name"><?= $userFullName ?></div>
                    <div class="profile-usertitle-job"><?php // ucwords(Yii::$app->controller->modules->id.' Module')                        ?></div>
                </div>
            </div>
        </div>
        <div class="profile-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light">
                        <div class="portlet-title tabbable-line">
                            <div class="caption caption-md">
                                <i class="icon-globe theme-font hide"></i>
                                <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                            </div>
                            <ul class="nav nav-tabs">
                                <li class=" <?= ($passError == false) ? 'active' : '' ?>">
                                    <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
                                </li>
                                <li class=" <?= ($passError == true) ? 'active' : '' ?>">
                                    <a href="#tab_1_3" data-toggle="tab">Change Password</a>
                                </li>
                            </ul>
                        </div>
                        <div class="portlet-body">
                            <div class="tab-content">
                                <!-- PERSONAL INFO TAB -->
                                <div class="tab-pane <?= ($passError == false) ? 'active' : '' ?>" id="tab_1_1">
                                    <!--<form role="form" action="#">-->
                                    <?php $form = ActiveForm::begin(['class' => '']); ?>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label">User Name</label>
                                                <?= $form->field($userDetails, 'username')->textInput(['readonly' => true, 'class' => 'form-control', 'placeholder' => 'User Name'])->label(false) ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">First Name</label>
                                                <?= $form->field($userDetails, 'first_name')->textInput(['class' => 'form-control', 'placeholder' => 'First Name'])->label(false) ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">Last Name</label>
                                                <?= $form->field($userDetails, 'last_name')->textInput(['class' => 'form-control', 'placeholder' => 'Last Name'])->label(false) ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">Email Address</label>
                                                <?= $form->field($userDetails, 'email')->textInput(['class' => 'form-control', 'placeholder' => 'Email Address'])->label(false) ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">Mobile Number</label>
                                                <?= $form->field($userDetails, 'mobile')->textInput(['class' => 'form-control', 'placeholder' => 'Mobile Number'])->label(false) ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">Date of Birth</label>
                                                <?= $form->field($userDetails, 'dob')->textInput(['readonly' => true, 'class' => 'form-control', 'placeholder' => 'Mobile Number'])->label(false) ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="margiv-top-10">
                                        <button class="btn green-haze" type="submit">Save Changes</button>
                                    </div>
                                    <?php ActiveForm::end(); ?>
                                </div>
                                <div class="tab-pane <?= ($passError == true) ? 'active' : '' ?>" id="tab_1_3">
                                    <?php $form1 = ActiveForm::begin(['class' => '']); ?>
                                    <div class="form-group">
                                        <label class="control-label">Current Password</label>
                                        <?= $form1->field($userPass, 'crnt_pass')->passwordInput(['class' => 'form-control', 'placeholder' => 'Current Pssword'])->label(false) ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">New Password</label>
                                        <?= $form1->field($userPass, 'new_pass')->passwordInput(['class' => 'form-control', 'placeholder' => 'New Pssword'])->label(false) ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Re-type New Password</label>
                                        <?= $form1->field($userPass, 'confirm_pass')->passwordInput(['class' => 'form-control', 'placeholder' => 'Confirm Pssword'])->label(false) ?>
                                    </div>
                                    <div class="margin-top-10">
                                        <button type="submit" class="btn green-haze">Change Password</button>
                                        <button type="reset" class="btn btn-close">Reset</button>
                                    </div>
                                    <?php ActiveForm::end(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PROFILE CONTENT -->
    </div>
</div>
<!-- END PAGE CONTENT-->
<!---------- img upload modal --------------->
<div class="modal fade" id="profileimg-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Choose Profile Picture</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label text-primary col-md-3">Name:</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" readonly="readonly" value="<?= $userFullName ?>"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label text-primary">Current Picture:</label>
                            <!--<img style="height: 150px;" src="<?= $this->context->getUserImages(Yii::$app->user->id) ?>" class="img-responsive" alt="<?= $userFullName ?>"/>-->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label text-primary">Upload Picture:</label>
                            <!--<img style="height: 150px;" src="<?= $this->context->getUserImages(Yii::$app->user->id) ?>" class="img-responsive" alt="<?= $userFullName ?>"/>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!---------- end img upload modal --------------->
<?php
$script = <<< JS
JS;
$this->registerJs($script);
?>