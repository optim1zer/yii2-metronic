<?php
/**
 * @copyright Copyright (c) 2014 Digital Deals s.r.o.
 * @license http://www.digitaldeals.cz/license/
 */

namespace  optim1zer\metronic\bundles;

use yii\web\AssetBundle;

/**
 * SpinnerAsset for spinner widget.
 */
class Select2Asset extends AssetBundle
{
    public $sourcePath = '@optim1zer/metronic/assets';
    public $js = [
        'global/plugins/select2/select2.min.js',
    ];

    public $css = [
        'global/plugins/select2/select2.css',
        'global/plugins/select2/select2-bootstrap.css',
    ];


    public $depends = [
        'optim1zer\metronic\bundles\CoreAsset',
    ];
}
