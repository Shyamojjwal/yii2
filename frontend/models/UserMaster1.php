<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_master".
 *
 * @property integer $id
 * @property string $username
 * @property string $role
 * @property string $first_name
 * @property string $last_name
 * @property string $full_name
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property integer $email_verified
 * @property string $mobile
 * @property integer $mob_verified
 * @property string $dob
 * @property string $proImg
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class UserMaster1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at'], 'required'],
            [['role'], 'string'],
            [['email_verified', 'mobile', 'mob_verified', 'status', 'created_at', 'updated_at'], 'integer'],
            [['dob'], 'safe'],
            [['username', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['first_name', 'last_name', 'full_name', 'proImg'], 'string', 'max' => 250],
            [['auth_key'], 'string', 'max' => 32],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'role' => 'Role',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'full_name' => 'Full Name',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'email_verified' => 'Email Verified',
            'mobile' => 'Mobile',
            'mob_verified' => 'Mob Verified',
            'dob' => 'Dob',
            'proImg' => 'Pro Img',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
