<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\components\BackendController;
use common\models\UserMaster;
use common\models\SearchUserMaster;

/**
 * Site controller
 */
class ManageuserController extends BackendController {
    
    
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index'],
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
        $this->view->title = "Show Users";
        $model = new SearchUserMaster();
//        $searchQuery = $model->search();
        
        
        return $this->render('index');
    }

}
