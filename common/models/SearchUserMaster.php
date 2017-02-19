<?php

namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * User model
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $auth_key
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password write-only password
 */
class SearchUserMaster extends UserMaster {

    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;
    const ADMIN_ROLE = 1;
    const USER_ROLE = 2;

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return '{{%user_master}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['full_name', 'email', 'email_verified', 'mobile', 'created_at', 'status'], 'required', 'on' => ['admin-update-pro']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function search($params) {
        // create ActiveQuery
        $query = UserMaster::find()
                ->where("status!=:status", [':status' => 3]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        // Important: here is how we set up the sorting
        // The key is the attribute name on our "TourSearch" instance
//        $dataProvider->sort->attributes['city'] = [
//            'asc' => ['tbl_city.name' => SORT_ASC],
//            'desc' => ['tbl_city.name' => SORT_DESC],
//        ];
        // Lets do the same with country now
//        $dataProvider->sort->attributes['country'] = [
//            'asc' => ['tbl_country.name' => SORT_ASC],
//            'desc' => ['tbl_country.name' => SORT_DESC],
//        ];
        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }
        // We have to do some search... Lets do some magic
//        $query->andFilterWhere([])
//                ->andFilterWhere(['like', 'tbl_city.name', $this->city])
//                ->andFilterWhere(['like', 'tbl_country.name', $this->country]);

        return $dataProvider;
    }

}
