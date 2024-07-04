<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/global.css',
        'css/style.css',
        'css/owl.carousel.min.css',
    ];
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
    public $js = [
        'js/jquery.cookie.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    public static function addCss($view, $cssfile) {
        $view->registerCssFile($cssfile);
    }
    public static function addScript($view, $jsfile) {
        $view->registerJsFile($jsfile);
    }
}
