<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/statics';
    public $css = [
        'css/font-awesome.min.css',
        'css/responsive.css',
        'vendors/revolution/css/settings.css',
        'css/style.css',
        'vendors/revolution/css/layers.css',
        'vendors/revolution/css/navigation.css',
        'vendors/owl-carousel/owl.carousel.min.css',
        'css/linearicons.css',
        'css/bootstrap.css',
        'css/magnific-popup.css',
        'css/jquery-ui.css',
        'css/nice-select.css',
        'css/animate.min.css',
        'css/owl.carousel.css',
        'css/main.css',
        'css/lightbox.css',
        'css/style1.css',
        'http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css',
        'css/clock.css',

       






    ];
    public $js = [
        'js/jquery-3.2.1.min.js',
        'js/popper.min.js',
        'vendors/revolution/js/jquery.themepunch.tools.min.js',
        'vendors/revolution/js/jquery.themepunch.revolution.min.js',
        'vendors/revolution/js/extensions/revolution.extension.actions.min.js',
        'vendors/revolution/js/extensions/revolution.extension.video.min.js',
        'vendors/revolution/js/extensions/revolution.extension.slideanims.min.js',
        'vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js',
        'vendors/revolution/js/extensions/revolution.extension.navigation.min.js',
        'vendors/revolution/js/extensions/revolution.extension.slideanims.min.js',
        'vendors/counterup/jquery.waypoints.min.js',
        'vendors/counterup/jquery.counterup.min.js',
        'vendors/counterup/apear.js',
        'vendors/counterup/countto.js',
        'vendors/owl-carousel/owl.carousel.min.js',
        'vendors/magnify-popup/jquery.magnific-popup.min.js',
        'js/smoothscroll.js',
        'js/theme.js',
        'https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA',
        'http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js',
        'js/clock.js',

       



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
