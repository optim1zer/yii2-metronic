<?php

namespace optim1zer\metronic\bundles;

use Yii;
use yii\web\AssetBundle;
use optim1zer\metronic\Metronic;

class ProfileAsset extends AssetBundle
{

    public $sourcePath = '@assets';

    /**
     * @var array css assets
     */
    public $css = [
        'pages/css/profile.css',
    ];

    /**
     * @var array depends on
     */
    public $depends = [
        'optim1zer\metronic\bundles\CoreAsset',
    ];

}
