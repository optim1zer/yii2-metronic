<?php

/**
 * @link http://www.digitaldeals.cz/
 * @copyright Copyright (c) 2014 Digital Deals s.r.o.
 * @license http://www.digitaldeals.cz/license/
 */

namespace optim1zer\metronic\bundles;

use Yii;
use yii\web\AssetBundle;
use optim1zer\metronic\Metronic;

class ThemeAsset extends AssetBundle
{

    public $css = [
        'css/layout.css',
    ];

    public $js = [
        'scripts/layout.js',
    ];

    public $depends = [
        'optim1zer\metronic\bundles\CoreAsset',
        'optim1zer\metronic\bundles\StyleBasedAsset',
        'optim1zer\metronic\bundles\NotificationAsset',
    ];

    /**
     * Inits bundle
     */
    public function init()
    {
        // добавляем только если bundle не минифицирован
        if (!empty($this->css)) {
            $this->sourcePath = '@assets/layouts/' . Yii::$app->metronic->layout;
            $this->css[] = 'css/themes/'.Yii::$app->metronic->themeCss.'.css';
        }
        return parent::init();
    }

}
