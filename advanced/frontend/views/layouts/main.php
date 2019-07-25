<?php

/**
 * Team: @NKL,NKU
 * Coding by 周辰霏 1712991
 * This is the main layout views for all the frontend web.
 */

/* @var $this \yii\web\View*/
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\web\Controller;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use  yii\web\Response;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta name="renderer" content="webkit">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <?= Html::csrfMetaTags() ?>
    <!-- 导航图标 -->
    <link rel="icon" href="statics/img/N.ico" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
    <title>NKL</title>
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<?php $this->beginBody() ?>

<body>
    <div class="wrap">
        <header id="header">
            <div class="container main-menu">
                <div class="row align-items-center justify-content-between d-flex">
                    <div id="logo">
                        <a href="<?php echo Url::to(['site/index']); ?>"><img src="statics/img/100nk.png" height="70px" width="220px" alt="" title="" /></a>
                    </div>
                    <!-- 导航栏跳转 -->
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li><a href="<?php echo Url::to(['site/index']); ?>"><img src="statics/img/home.ico" height="25" width="25" alt="">Home</a></li>
                            <li><a href="<?php echo Url::to(['site/news']); ?>"><img src="statics/img/news.ico" height="20" width="20" alt="">News</a></li>
                            <li><a href="<?php echo Url::to(['site/activities']); ?>"><img src="statics/img/activities.ico" height="20" width="20" alt="">Activities</a></li>
                            <li><a href="<?php echo Url::to(['site/shop']); ?>"><img src="statics/img/bag.ico" height="17" width="17" alt="">Souvenirs</a></li>
                            <li><a href="<?php echo Url::to(['site/bbs']); ?>"><img src="statics/img/about.ico" height="20" width="20" alt="">BBS</a></li>
                            <li><a href="<?php echo Url::to(['site/history']); ?>"><img src="statics/img/history.ico" height="20" width="20" alt="">History</a></li>
                            <li><a href="<?php echo Url::to(['site/statistics']); ?>"><img src="statics/img/statics.ico" height="20" width="20" alt=""></a></li>
                            <li><a href="../../backend/web/index.php"><img src="statics/img/user.svg" height="20" width="20" alt=""></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <!-- #header -->
        <!-- 其他各site本身的view部分 -->
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>
    <!-- 页脚 -->
    <footer class="footer-area section-gap" style="float:inline-end;margin-top:50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-6 col-md-offset-1">
                    <div class="single-footer-widget">
                        <h4>About Us</h4>
                        <p>We are NKUers who tend to paddle but want to strive for the upper reaches,either.</p>
                        <p class="footer-text">Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This Web is made by <i class="fa fa-heart-o" aria-hidden="true"></i>NKL</a></p>
                    </div>
                </div>
                <div class="col-md-3" style="margin-left:55px;">
                    <div class="single-footer-widget">
                        <h4>Link</h4>
                        <p><a href="https://www.nankai.edu.cn" target="_blank">南开大学</a></p>
                        <p><a href="http://100.nankai.edu.cn" target="_blank">南开大学百年校庆</a></p>
                        <p><a href="http://news.nankai.edu.cn" target="_blank">南开大学新闻网</a></p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="single-footer-widget">
                        <p style="margin-top:10px;"><img src="statics/img/bnxq.png" style="width:80px;height:80px"></p>
                        <p style="margin-top:10px;">百年校庆官微</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>