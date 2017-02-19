<?php

namespace backend\controllers;

use yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\components\BackendController;
use common\models\UserMaster;
use backend\models\ChangePassword;

class ProfileController extends BackendController {

    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
//                    [
//                        'actions' => ['login', 'error'],
//                        'allow' => true,
//                    ],
                    [
                        'actions' => ['index', 'uploadproimg'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex() {
        Yii::$app->view->title = "Admin Profile";
        $this->layout = "profile_layout";
        $passError = false;

        $userDetails = UserMaster::findOne(Yii::$app->user->id);
        $userPass = new ChangePassword;

        $userDetails->scenario = "admin-update-pro";
        if ($userDetails->load(Yii::$app->request->post())) {
            $userDetails->full_name = $userDetails->first_name . ' ' . $userDetails->last_name;
            $userDetails->updated_at = date("Y-m-d H:i:s");
            if ($userDetails->validate() && $userDetails->save()) {
                Yii::$app->session->setFlash('success-msg', 'Your Profile successfully updated.');
            }
        }

        if ($userPass->load(Yii::$app->request->post())) {

            if ($userPass->validate()) {
                $userDetails->password_hash = Yii::$app->security->generatePasswordHash($userPass->new_pass);
                $userDetails->save(false);
                Yii::$app->session->setFlash('success-msg', 'Your Account Password successfully updated.');
            } else {
                $passError = true;
            }
        }

        $data['passError'] = $passError;
        $data['userDetails'] = $userDetails;
        $data['userPass'] = $userPass;

        return $this->render('index', $data);
    }

    public function actionUploadproimg() {
        $resp = [];
        $resp['flag'] = false;
        echo '<pre>';
        print_r($_FILES);
        echo '</pre>';
        exit();
        if (Yii::$app->request->isAjax) {
            if (isset($_FILES) && $_FILES['UserMaster']['error']['proImg'] == 0) {
                $file = $_FILES['UserMaster'];
                $imgName = $file['name']['proImg'];
                $imgTempName = $file['tmp_name']['proImg'];
                $fileArr = explode('.', $imgName);
                $fileExt = end($fileArr);
                $acceptExt = ['png', 'PNG', 'jpg', 'JPG', 'jpeg', 'JPEG', 'gif', 'GIF'];
                if (!in_array($fileExt, $acceptExt)) {
                    echo "Here";
                    $resp['msg'] = "Please Upload only JPG, JPEG, PNG and GIF type Images.";
                } else {
                    $fileName = time() . '-' . $imgName;
                    $uploadlocation = dirname(Yii::getAlias('@app')) . '/uploads/userImg';
                    $model = UserMaster::findOne(Yii::$app->user->id);
                    if (is_dir($uploadlocation)) {
                        if (move_uploaded_file($uploadlocation, $imgTempName)) {
                            echo 'true';
                        }
                    } else {
                        echo "false";
                    }
                }
            }else{
                echo "not File";
            }
        }else{
            echo "not ajax request";
        }
    }

}
