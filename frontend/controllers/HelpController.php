<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use kartik\mpdf\Pdf;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use common\components\FrontendController;

/**
 * Site controller
 */
class HelpController extends FrontendController {

    public function init() {

        parent::init();
    }

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index'],
                'rules' => [
                    [
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
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
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex() {
        return $this->render('index');
    }

    public function actionCreatepdf() {
        $htmlContent = $this->renderPartial('pdf');
        $pdf = Yii::$app->pdf;
        $pdf->content = $htmlContent;
        $pdf->options = ["title" => "Testing PDF"];
        $pdf->methods = [
            'SetHeader' => 'Krajee Report Header Shyam',
            'SetFooter' => '{PAGENO}',
        ];
        Yii::$app->response->format = \yii\web\Response::FORMAT_RAW;
        Yii::$app->response->headers->add('Content-Type', 'application/pdf');
        return $pdf->render();
    }

    public function actionSpreadsheet() {
        $fileName = dirname(Yii::$app->basePath) . '/uploads/States_list.xlsx';
        $data = \moonland\phpexcel\Excel::widget([
                    'mode' => 'import',
                    'fileName' => $fileName,
                    'setFirstRecordAsKeys' => true,
                    'setIndexSheetByName' => true,
        ]);
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        exit;
    }

    public function actionPdf() {
        // get your HTML raw content without any layouts or scripts
        $content = $this->renderPartial('pdf');
        // setup kartik\mpdf\Pdf component
        $pdf = new Pdf([
            // set to use core fonts only
            'mode' => Pdf::MODE_CORE,
            // A4 paper format
            'format' => Pdf::FORMAT_A4,
//            // portrait orientation
            'orientation' => Pdf::ORIENT_PORTRAIT,
//            // stream to browser inline
            'destination' => Pdf::DEST_BROWSER,
            // your html content input
            'content' => $content,
            // format content from your own css file if needed or use the
            // enhanced bootstrap css built by Krajee for mPDF formatting 
            'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
//            // any css to be embedded if required
            'cssInline' => '.kv-heading-1{font-size:18px}',
            // set mPDF properties on the fly
            'options' => ['title' => 'Krajee Report Title'],
//            // call mPDF methods on the fly
            'methods' => [
                'SetHeader' => ['Krajee Report Header'],
                'SetFooter' => ['{PAGENO}'],
            ]
        ]);

        // return the pdf output as per the destination setting
        Yii::$app->response->format = \yii\web\Response::FORMAT_RAW;
        Yii::$app->response->headers->add('Content-Type', 'application/pdf');
        return $pdf->render();
    }

}
