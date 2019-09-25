<?php

/**
 * @copyright Copyright (c) 2014 Digital Deals s.r.o.
 * @license http://www.digitaldeals.cz/license/
 */

namespace optim1zer\metronic\bundles;

use yii\web\AssetBundle;

class DatePickerAsset extends AssetBundle {

    public $sourcePath = '@assets';

    public static $extraJs = [];
    public $js = [
        'global/plugins/bootstrap-daterangepicker/moment.min.js',
        'global/plugins/bootstrap-datepicker-extended/js/bootstrap-datepicker.js',
    ];
    public $css = [
        'global/plugins/bootstrap-datepicker-extended/css/datepicker.css',
        'global/plugins/bootstrap-datepicker-extended/css/datepicker3.css',
    ];
    public $depends = [
        'optim1zer\metronic\bundles\CoreAsset',
    ];

    public function init()
    {
        $this->js = array_merge($this->js, static::$extraJs);
        return parent::init();
    }

}
