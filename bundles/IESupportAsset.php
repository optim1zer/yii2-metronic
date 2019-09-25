<?php

namespace optim1zer\metronic\bundles;

use yii\web\AssetBundle;
use yii\web\View;

class IESupportAsset extends AssetBundle
{

    public $sourcePath = '@assets';

    public $js = [
        'global/plugins/respond.min.js',
        'global/plugins/excanvas.min.js'
    ];
    public $jsOptions = [
        'condition'=>'lt IE 9',
        //'position' => View::POS_HEAD,
    ];

}