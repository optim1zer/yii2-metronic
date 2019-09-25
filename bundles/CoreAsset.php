<?php

/**
 * @copyright Copyright (c) 2014 Digital Deals s.r.o.
 * @license http://www.digitaldeals.cz/license/
 */

namespace optim1zer\metronic\bundles;

use Yii;
use yii\web\AssetBundle;

class CoreAsset extends AssetBundle {

    public $sourcePath = '@assets';

    /**
     * @var array css assets
     */
    public $css = [
        //'global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',
        'global/plugins/jquery-multi-select/css/multi-select.css',
        'global/plugins/bootstrap-editable-select2v4/bootstrap3-editable/css/bootstrap-editable.css',
    ];

    /**
     * @var array js assets
     */
    public $js = [
        'global/plugins/jquery-migrate.min.js',
        'global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
        'global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
        'global/plugins/jquery.blockui.min.js',
        //'global/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
        'global/plugins/jquery-multi-select/js/jquery.multi-select.js',
        'global/plugins/autosize/autosize.min.js',
        'global/plugins/bootstrap-editable-select2v4/bootstrap3-editable/js/bootstrap-editable.min.js',
        'global/scripts/app.js',
    ];

    /**
     * @var array depended packages
     */
    public $depends = [
        'optim1zer\metronic\bundles\IESupportAsset',
        //'yii\jui\JuiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

    /**
     * Inits bundle
     */
    public function init()
    {
        // обновляем путь если bundle минифицирован
        if (empty($this->sourcePath)) {
            $this->sourcePath = '@assets';
        }
        return parent::init();
    }

}
