<?php

namespace optim1zer\metronic\bundles;

use Yii;
use yii\web\AssetBundle;
use yii\helpers\ArrayHelper;
use optim1zer\metronic\Metronic;

class StyleBasedAsset extends AssetBundle
{

    public $sourcePath = '@assets';

    public $css = [
        'global/css/plugins.css',
    ];

    public $depends = [
        'optim1zer\metronic\bundles\CoreAsset',
    ];

    /**
     * Inits bundle
     */
    public function init()
    {
        // добавляем только если bundle не минифицирован
        if (!empty($this->css)) {
            $this->css[] = Yii::$app->metronic->style == Metronic::STYLE_SQUARE? 'global/css/components.css': 'global/css/components-rounded.css';
        }
        return parent::init();
    }

}
