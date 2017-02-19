<style>
    .left-col{
        border-right: 2px solid #002a80;
    }
    .right-col{
        border-left: 2px solid #002a80;
    }
    .help-box{
        padding: 10px 0;
        background-color: #eee;
        height: 100%;
        border: 2px solid #ffe4c4;
        border-radius: 5px;
        margin: 10px 0;
    }
    .tutorial-sec label{
        background: #dff0d8;
        padding: 6px 13px;
        width: 100%;
    }
</style>
<div class="row help-box">
    <div class="col-sm-6 left-col">
        <div class="col-sm-12">
            <label class="control-label text-primary text-center" style="width: 100%; font-size: large;"><u>Create PDF File and Download</u></label>
            <div class="row" style="margin: 10px 0;">
                <a href="<?= Yii::$app->urlManager->createUrl('help/createpdf') ?>" target="_blank" class="pull-left" style="color: #007888"><b>View PDF File</b></a>
                <a href="<?= Yii::$app->urlManager->createUrl('help/createpdf') ?>" download="true" target="_blank" class="pull-right" style="color: #007888"><b>Download PDF File</b></a>
            </div>
            <div class="row tutorial-sec">
                Add below comment on your composer.json file require section:<br/>
                <label class="control-label">
                    "kartik-v/yii2-mpdf": "*"
                </label>
                <br/>
                and update your composer.<br/>
                Add below Setting on your common/config/main.php file
                <label class="control-label">
                    use kartik\mpdf\Pdf;
                    <br/><br/>
                    'components' => [<br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// setup Krajee Pdf component<br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'pdf' => [<br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    'class' => Pdf::classname(),<br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    'format' => Pdf::FORMAT_A4,<br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    'orientation' => Pdf::ORIENT_PORTRAIT,<br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    'destination' => Pdf::DEST_BROWSER,<br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    // refer settings section for all configuration options<br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    ......<br/>
                    ],
                </label>
                Use Below code on controller
                <label class="control-label">
                    $pdf = Yii::$app->pdf;
                    <br/>
                    $pdf->content = $htmlContent;
                    <br/>
                    $pdf->options = ["title" => "Testing PDF"];
                    <br/>
                    $pdf->methods = [
                    <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    'SetHeader' => 'Krajee Report Header',
                    <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    'SetFooter' => '{PAGENO}',
                    <br/>
                    ];
                    <br/>
                    Yii::$app->response->format = \yii\web\Response::FORMAT_RAW;
                    <br/>
                    Yii::$app->response->headers->add('Content-Type', 'application/pdf');
                    <br/>
                    return $pdf->render();
                    <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </label>
            </div>
        </div>
    </div>
    <div class="col-sm-6 right-col">
        <div class="col-sm-12">
            <label class="control-label text-primary text-center" style="width: 100%; font-size: large;">Read Excel File Data</label>
            <div class="row tutorial-sec">
                Add below comment on your composer.json file require section:<br/>
                <label class="control-label">
                    "moonlandsoft/yii2-phpexcel": "*"
                </label>
                <br/>
                and update your composer.<br/>
                Use Below code on controller
                <label class="control-label">
                    $data = \moonland\phpexcel\Excel::widget([
                    <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    'mode' => 'import',
                    <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    'fileName' => $fileName,
                    <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    'setFirstRecordAsKeys' => true,
                    <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    'setIndexSheetByName' => true,
                    <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    ]);
                    <br/>
                    print_r($data);
                    <br/>
                    exit;
                    <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </label>
            </div>
        </div>
    </div>
</div>

