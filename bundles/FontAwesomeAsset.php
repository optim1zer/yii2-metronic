<?php

namespace optim1zer\metronic\bundles;

use yii\web\AssetBundle;

class FontAwesomeAsset extends AssetBundle
{

    public $sourcePath = '@assets';

    public $css = [
        'global/plugins/font-awesome/css/font-awesome.min.css',
    ];
    public $publishOptions = [
        'only' => [
            'fonts/',
            'css/',
        ]
    ];

}