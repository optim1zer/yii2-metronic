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
class SpinnerAsset extends AssetBundle
{
    public $sourcePath = '@assets';

    public $js = [
        'plugins/fuelux/js/spinner.min.js',
    ];

    public $depends = [
        'optim1zer\metronic\bundles\CoreAsset',
    ];

}
