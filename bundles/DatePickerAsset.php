<?php

/**
 * @copyright Copyright (c) 2014 Digital Deals s.r.o.
 * @license http://www.digitaldeals.cz/license/
 */

namespace optim1zer\metronic\bundles;

use yii\web\AssetBundle;

class DatePickerAsset extends AssetBundle {

    public $sourcePath = '@optim1zer/metronic/assets';
    public static $extraJs = [];
    public $js = [
        'plugins/bootstrap-daterangepicker/moment.min.js',
        'plugins/bootstrap-datepicker-extended/js/bootstrap-datepicker.js',
    ];
    public $css = [
        'plugins/bootstrap-datepicker-extended/css/datepicker.css',
        'plugins/bootstrap-datepicker-extended/css/datepicker3.css',
    ];
    public $depends = [
        'optim1zer\metronic\bundles\CoreAsset',
    ];

    public function init()
    {
        $this->js = array_merge($this->js, static::$extraJs);
    }

}
