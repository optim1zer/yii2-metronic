<?php

namespace optim1zer\metronic\bundles;

use yii\web\AssetBundle;
use optim1zer\metronic\Metronic;

class ErrorAsset extends AssetBundle {

    public $sourcePath = '@assets';

    /**
     * @var array css assets
     */
    public $css = [
        'pages/css/error.css',
    ];

}
