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
class ModalAsset extends AssetBundle
{

    public $sourcePath = '@assets';

    public $js = [
        'global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js',
        'global/plugins/bootstrap-modal/js/bootstrap-modal.js',
    ];

    public  $css = [
        'global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css',
        'global/plugins/bootstrap-modal/css/bootstrap-modal.css',
    ];

    public $depends = [
        'optim1zer\metronic\bundles\CoreAsset',
    ];

}
