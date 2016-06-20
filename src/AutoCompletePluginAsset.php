<?php
/**
 * @link https://github.com/LAV45/yii2-devbridge-autocomplete
 * @copyright Copyright (c) 2015 LAV45!
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace lav45\widget;

use yii\web\AssetBundle;

/**
 * Class AutoCompletePluginAsset
 * @package lav45\widget
 */
class AutoCompletePluginAsset extends AssetBundle
{
    public $sourcePath = '@bower/devbridge-autocomplete';

    public $js = [
        'dist/jquery.autocomplete.min.js'
    ];

    public $depends = [
        'yii\jui\JuiAsset',
        'yii\web\JqueryAsset',
    ];
}