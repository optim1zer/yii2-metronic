<?php

/**
 * @copyright Copyright (c) 2014 Digital Deals s.r.o.
 * @license http://www.digitaldeals.cz/license/
 */

namespace optim1zer\metronic\bundles;

use yii\web\AssetBundle;

class TreeAsset extends AssetBundle
{

    public $sourcePath = '@assets';

    /**
     * @var array CSS
     */
    public $css = [
        'global/plugins/jstree/dist/themes/default/style.min.css',
    ];
    public $js = [
        'global/plugins/jstree/dist/jstree.min.js',
    ];

    /**
     * @var array depends on
     */
    public $depends = [
        'optim1zer\metronic\bundles\CoreAsset',
    ];

}
