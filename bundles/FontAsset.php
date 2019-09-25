<?php
/**
 * @copyright Copyright (c) 2014 Digital Deals s.r.o.
 * @license http://www.digitaldeals.cz/license/
 */

namespace optim1zer\metronic\bundles;

use yii\web\AssetBundle;

class FontAsset extends AssetBundle
{
    public $css = [
        '//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,400italic,600italic&subset=latin,cyrillic',
    ];
}
