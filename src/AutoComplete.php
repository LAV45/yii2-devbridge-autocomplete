<?php
/**
 * @link https://github.com/LAV45/yii2-devbridge-autocomplete
 * @copyright Copyright (c) 2015 LAV45!
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace lav45\widget;

use yii\helpers\Json;
use yii\helpers\Html;
use yii\widgets\InputWidget;

/**
 * Class AutoComplete
 * @package lav45\widget
 */
class AutoComplete extends InputWidget
{
    /**
     * @var array
     */
    public $clientOptions = [];

    /**
     * @inheritdoc
     */
    public function run()
    {
        $this->registerAssets();
        $this->registerJS();

        return $this->hasModel() ?
            Html::activeTextInput($this->model, $this->attribute, $this->options) :
            Html::textInput($this->name, $this->value, $this->options);
    }

    /**
     * Register assets
     */
    public function registerAssets()
    {
        AutoCompleteAsset::register($this->getView());
    }

    /**
     * Register js extension
     */
    public function registerJS()
    {
        $options = Json::encode($this->clientOptions);
        $this->getView()->registerJs( "jQuery('#{$this->options['id']}').autocomplete($options);");
    }
}
