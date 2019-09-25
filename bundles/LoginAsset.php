<?php

namespace optim1zer\metronic\bundles;

use yii\web\AssetBundle;
use optim1zer\metronic\Metronic;

class LoginAsset extends AssetBundle
{

    public $sourcePath = '@assets';

    /**
     * @var array depended bundles
     */
    public $depends = [
        'optim1zer\metronic\bundles\CoreAsset',
        'optim1zer\metronic\bundles\StyleBasedAsset',
    ];

    /**
     * @var array css assets
     */
    public $css = [
        'pages/css/login-4.css',
    ];

    /**
     * @var array js assets
     */
    public $js = [
        'global/plugins/backstretch/jquery.backstretch.min.js',
        //'pages/scripts/login-4.js'
    ];

}
