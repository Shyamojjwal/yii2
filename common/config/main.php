<?php

use kartik\mpdf\Pdf;
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        // setup Krajee Pdf component
        'pdf' => [
            'class' => Pdf::classname(),
            'format' => Pdf::FORMAT_A4,
            'orientation' => Pdf::ORIENT_PORTRAIT,
            'destination' => Pdf::DEST_BROWSER,
        // refer settings section for all configuration options
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
