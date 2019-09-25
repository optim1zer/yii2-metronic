<?php

namespace optim1zer\metronic;

use Yii;

/**
 * This is the class of Metronic Component
 */
class Metronic extends \yii\base\Component {

    /**
     * layout
     */
    const LAYOUT_1 = 'layout';
    const LAYOUT_2 = 'layout2';
    const LAYOUT_3 = 'layout3';
    const LAYOUT_4 = 'layout4';
    const LAYOUT_5 = 'layout5';
    const LAYOUT_6 = 'layout6';
    const LAYOUT_7 = 'layout7';

    /**
     * Style
     */
    const STYLE_SQUARE = 'default';
    const STYLE_ROUNDED = 'rounded';

    /**
     * Layout
     */
    const LAYOUT_FLUID = 'default';
    const LAYOUT_BOXED = 'boxed';

    /**
     * Header
     */
    const HEADER_DEFAULT = 'default';
    const HEADER_FIXED = 'fixed';

    /**
     * Header Dropdowns
     */
    const HEADER_DROPDOWN_DARK = 'dark';
    const HEADER_DROPDOWN_LIGHT = 'light';

    /**
     * Sidebar
     */
    const SIDEBAR_DEFAULT = 'default';
    const SIDEBAR_FIXED = 'fixed';

    /**
     * Sidebar menu
     */
    const SIDEBAR_MENU_ACCORDION = 'accordion';
    const SIDEBAR_MENU_HOVER = 'hover';

    /**
     * Sidebar position
     */
    const SIDEBAR_POSITION_LEFT = 'left';
    const SIDEBAR_POSITION_RIGHT = 'right';

    /**
     * Footer
     */
    const FOOTER_DEFAULT = 'default';
    const FOOTER_FIXED = 'fixed';

    /**
     * UI Colors blue
     */
    const UI_COLOR_BLUE = 'blue';
    const UI_COLOR_BLUE_HOKI = 'blue-hoki';
    const UI_COLOR_BLUE_STEEL = 'blue-steel';
    const UI_COLOR_BLUE_MADISON = 'blue-madison';
    const UI_COLOR_BLUE_CHAMBRAY = 'blue-chambray';
    const UI_COLOR_BLUE_EBONYCLAY = 'blue-ebonyclay';

    /**
     * UI Colors green
     */
    const UI_COLOR_GREEN = 'green';
    const UI_COLOR_GREEN_MEADOW = 'green-meadow';
    const UI_COLOR_GREEN_SEAGREEN = 'green-seagreen';
    const UI_COLOR_GREEN_TORQUOISE = 'green-torquoise';
    const UI_COLOR_GREEN_JUNGLE = 'green-jungle';
    const UI_COLOR_GREEN_HAZE = 'green-haze';

    /**
     * UI Colors red
     */
    const UI_COLOR_RED = 'red';
    const UI_COLOR_RED_PINK = 'red-pink';
    const UI_COLOR_RED_SUNGLO = 'red-sunglo';
    const UI_COLOR_RED_INTENSE = 'red-intense';
    const UI_COLOR_RED_THUNDERBIRD = 'red-thunderbird';
    const UI_COLOR_RED_FLAMINGO = 'red-flamingo';
    const UI_COLOR_RED_HAZE = 'red-haze';

    /**
     * UI Colors yellow
     */
    const UI_COLOR_YELLOW = 'yellow';
    const UI_COLOR_YELLOW_GOLD = 'yellow-gold';
    const UI_COLOR_YELLOW_CASABLANCA = 'yellow-casablanca';
    const UI_COLOR_YELLOW_CRUSTA = 'yellow-crusta';
    const UI_COLOR_YELLOW_LEMON = 'yellow-lemon';
    const UI_COLOR_YELLOW_SAFFRON = 'yellow-saffron';

    /**
     * UI Colors purple
     */
    const UI_COLOR_PURPLE = 'purple';
    const UI_COLOR_PURPLE_PLUM = 'purple-plum';
    const UI_COLOR_PURPLE_MEDIUM = 'purple-medium';
    const UI_COLOR_PURPLE_STUDIO = 'purple-studio';
    const UI_COLOR_PURPLE_WISTERIA = 'purple-wisteria';
    const UI_COLOR_PURPLE_SEANCE = 'purple-seance';

    /**
     * UI Colors grey
     */
    const UI_COLOR_GREY = 'grey';
    const UI_COLOR_GREY_CASCADE = 'grey-cascade';
    const UI_COLOR_GREY_SILVER = 'grey-silver';
    const UI_COLOR_GREY_STEEL = 'grey-steel';
    const UI_COLOR_GREY_CARARRA = 'grey-cararra';
    const UI_COLOR_GREY_GALLERY = 'grey-gallery';

    /**
     * @var string version
     */
    public $layout = self::LAYOUT_2;

    /**
     * @var string Theme
     */
    public $themeCss = 'default';

    /**
     * @var string Theme corner style
     */
    public $style = self::STYLE_ROUNDED;

    /**
     * @var string Layout mode
     */
    public $layoutOption = self::LAYOUT_FLUID;

    /**
     * @var string Header display
     */
    public $headerOption = self::HEADER_FIXED;

    /**
     * @var string Header dropdowns
     */
    public $headerDropdown = self::HEADER_DROPDOWN_LIGHT;

    /**
     * @var string Sidebar display
     */
    public $sidebarOption = self::SIDEBAR_DEFAULT;

    /**
     * @var string Sidebar display
     */
    public $sidebarMenu = self::SIDEBAR_MENU_HOVER;

    /**
     * @var string Sidebar position
     */
    public $sidebarPosition = self::SIDEBAR_POSITION_LEFT;

    /**
     * @var string Footer display
     */
    public $footerOption = self::FOOTER_DEFAULT;

    /**
     * @var array resources paths
     */
    public $assetsPath = '@app/views/layouts/assets';

    public $assetBundle;

    /**
     * @return Metronic Get Metronic component
     */
    public static function getComponent()
    {
        return Yii::$app->metronic;
    }

}