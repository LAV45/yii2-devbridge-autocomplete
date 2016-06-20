<?php
/**
 * @link https://github.com/LAV45/yii2-devbridge-autocomplete
 * @copyright Copyright (c) 2015 LAV45!
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace lav45\widget;

use yii\web\AssetBundle;

/**
 * Class AutoCompleteAsset
 * @package lav45\widget
 */
class AutoCompleteAsset extends AssetBundle
{
    public $sourcePath = '@vendor/lav45/yii2-devbridge-autocomplete/src/assets';

    public $css = [
        'autocomplete.min.css',
    ];

    public $depends = [
        'lav45\widget\AutoCompletePluginAsset',
    ];
}