<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/statics2';
    public $css = [
        //'css/site.css',
        "css/easy-responsive-tabs.css",
        "css/flexslider.css",
        "css/bootstrap.css",
        "css/style.css",
        "css/font-awesome.min.css",
        "css/new1.css",
        "css/new2.css",
    ];
    public $js = [
        'js/jquery-2.1.4.min.js',
        "js/bootstrap.js",
        "js/easy-responsive-tabs.js",
        "js/responsiveslides.min.js",
        "js/jquery.magnific-popup.js",
        "js/waypoints.min.js",
        "js/counterup.min.js",
        "js/jquery.flexslider.js",
        "js/SmoothScroll.min.js",
        "js/move-top.js",
        "js/easing.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    public static function addScript($view, $jsfile)
    {
        $view->registerJsFile($jsfile, [AppAsset::className(), 'depends' => 'frontend\assets\AppAsset']);
    
    }
    
    public static function addCss($view, $cssfile)
    {
        $view->registerCssFile($cssfile, [AppAsset::className(), 'depends' => 'frontend\assets\AppAsset']);
    }
}
