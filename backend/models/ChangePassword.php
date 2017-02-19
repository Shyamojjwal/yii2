<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use common\models\UserMaster;

class ChangePassword extends Model {

    public $crnt_pass;
    public $new_pass;
    public $confirm_pass;

    public function rules() {
        return [
            [['crnt_pass', 'new_pass', 'confirm_pass'], 'required'],
            [['crnt_pass', 'new_pass', 'confirm_pass'], 'trim'],
            ['crnt_pass', 'validatePassword'],
            [['new_pass', 'confirm_pass'], 'string', 'min' => 6],
            ['new_pass', 'compare', 'compareAttribute' => 'confirm_pass'],
        ];
    }

    public function attributeLabels() {
        return [
            'crnt_pass' => 'Current Password',
            'new_pass' => 'New Password',
            'confirm_pass' => 'Confirm Password',
        ];
    }

    public function validatePassword($attribute, $params) {
        $user = UserMaster::findOne(Yii::$app->user->id);
        if (!$user || !$user->validatePassword($this->crnt_pass)) {
            $this->addError($attribute, 'Current Password doesnot match.');
        }
    }

}
