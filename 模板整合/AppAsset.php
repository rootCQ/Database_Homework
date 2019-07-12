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
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/responsive.css',
        'vendors/revolution/css/settings.css',
        'css/style.css',
        'vendors/revolution/css/layers.css',
        'vendors/revolution/css/navigation.css',
        'vendors/owl-carousel/owl.carousel.min.css',
        'css1/core-style.css',
        'css1/style.css',
        'css2/linearicons.css',
        'css2/font-awesome.min.css',
        'css2/bootstrap.css',
        'css2/magnific-popup.css',
        'css2/jquery-ui.css',
        'css2/nice-select.css',
        'css2/animate.min.css',
        'css2/owl.carousel.css',
        'css2/main.css',
        'css3/animate.css',
        'css3/jquery.fancybox.min.css',
        'fonts3/ionicons/css/ionicons.min.css',
        'fonts3/fontawesome/css/font-awesome.min.css',
        'fonts3/flaticon/font/flaticon.css',





    ];
    public $js = [
        'js/jquery-3.2.1.min.js',
        'js/popper.min.js',
        'js/bootstrap.min.js',
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
        'js1/jquery/jquery-2.2.4.min.js',
        'js1/popper.min.js',
        'js1/bootstrap.min.js',
        'js1/plugins.js',
        'js1/classy-nav.min.js',
        'js1/active.js',
        'js2/vendor/jquery-2.2.4.min.js',
        'js2/popper.min.js',
        'js2/vendor/bootstrap.min.js',
        'https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA',
        'js2/easing.min.js',
        'js2/hoverIntent.js',
        'js2/superfish.min.js',
        'js2/jquery.ajaxchimp.min.js',
        'js2/jquery.magnific-popup.min.js',
        'js2/jquery.tabs.min.js',
        'js2/jquery.nice-select.min.js',
        'js2/isotope.pkgd.min.js',
        'js2/waypoints.min.js',
        'js2/jquery.counterup.min.js',
        'js2/simple-skillbar.js',
        'js2/owl.carousel.min.js',
        'js2/mail-script.js',
        'js2/main.js',
        'js3/jquery-migrate-3.0.1.min.js',
        'js3/popper.min.js',
        'js3/bootstrap.min.js',
        'js3/jquery.waypoints.min.js',
        'js3/jquery.fancybox.min.js',
        'js3/jquery.stellar.min.js',
        'js3/main.js',



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
