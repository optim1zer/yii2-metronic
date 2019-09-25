<?php

/**
 * @copyright Copyright (c) 2014 Digital Deals s.r.o.
 * @license http://www.digitaldeals.cz/license/
 */

namespace optim1zer\metronic\bundles;

use yii\web\AssetBundle;

/**
 * DateRangePickerAsset for dateRangePicker widget.
 */
class DateRangePickerAsset extends AssetBundle {

    public $sourcePath = '@assets';

    public $js = [
        'global/plugins/bootstrap-daterangepicker/moment.min.js',
        'global/plugins/bootstrap-daterangepicker/daterangepicker.js',
    ];
    public $css = [
        'global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css',
        'global/plugins/bootstrap-datetimepicker/css/datetimepicker.css',
    ];
    public $depends = [
        'optim1zer\metronic\bundles\CoreAsset',
    ];

}
