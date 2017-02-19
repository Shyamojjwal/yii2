<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use common\components\BackendController;

/**
 * Site controller
 */
class SiteController extends BackendController {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post', 'get'],
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex() {
        if (!Yii::$app->user->isGuest) {
            return $this->redirect(['dashboard/index']);
//            return $this->redirect(\Yii::$app->urlManager->createUrl("dashboard/index"));
        } else {
            return $this->redirect(['site/login']);
        }
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin() {
        $resp = [];
        $resp['flag'] = false;
        Yii::$app->view->title = "Admin Login"; // set page title
        $this->layout = "login_layout";

        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginForm();
        if (Yii::$app->request->isAjax) {
            if ($model->load(Yii::$app->request->post()) && $model->login()) {
                $resp['flag'] = true;
                $resp['msg'] = "You are Successfully Loged in. Please Wait...";
                $resp['redirectUrl'] = Yii::$app->urlManager->createUrl(['/']);
            } else {
                $resp['msg'] = "Errors! Please check your credentials";
                $resp['error'] = $model->getErrors();
            }

            echo json_encode($resp);
            exit;
        }
        return $this->render('login', ['model' => $model]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->goHome();
    }

}
