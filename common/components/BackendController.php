<?php

namespace common\components;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\UserMaster;

/**
 * Site controller
 */
class BackendController extends Controller {

    public function beforeAction($action) {
        $falseCsrf = ['uploadproimg'];
        if (in_array($action->id, $falseCsrf)) {
            Yii::$app->request->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }

//    ============= change site project title ====================
//    public function adminUrl($route) {
//        return Yii::$app->urlManager->createUrl($route);
//    }
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

//    ============= get user ====================
    public function getUser($id) {
        return UserMaster::findOne($id);
    }

//    ============= get user images ====================
    public function getUserImages($id) {
        $user = UserMaster::findOne($id);
        if ($user->proImg != '' || $user->proImg != NULL) {
            $userImg = Yii::$app->request->baseUrl . "/themes/images/userImages/img/default-user-img.jpg";
        } else {
            $userImg = Yii::$app->request->baseUrl . "/themes/assets/images/userImages/default-user-img.jpg";
        }
        return $userImg;
    }

}
