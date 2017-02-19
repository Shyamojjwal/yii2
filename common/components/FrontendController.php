<?php

namespace common\components;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use common\models\UserMaster;

/**
 * Site controller
 */
class FrontendController extends Controller {

//    ============= change site project title ====================
    public function getProjectTItle() {
        $project = "Yii2";
        return $project;
    }
    
//    ============= get site Big Logo title ====================
    public function getProjectBigLogo() {
        $logo = Yii::$app->request->baseUrl . "/themes/assets/images/logo-img/logo-big.png";
        return $logo;
    }

//    ============= get site static images ====================
    public function getStaticImages($img) {
        $staticImg = Yii::$app->request->baseUrl . "/themes/global/assets/img/" . $img;
        return $staticImg;
    }

//    ============= get user images ====================
    public function getUserImages() {
        $user = UserMaster::findOne(Yii::$app->user->id);
        if ($user->proImg != '' || $user->proImg != NULL) {
            $userImg = Yii::$app->request->baseUrl . "/themes/assets/images/userImages/img/default-user-img.jpg";
        } else {
            $userImg = Yii::$app->request->baseUrl . "/themes/assets/images/userImages/img/default-user-img.jpg";
        }
        return $userImg;
    }
}
