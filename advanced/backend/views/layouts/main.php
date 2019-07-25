<?php

/**
 * Team: @NKL,NKU
 * Coding by 乔静欣 1711295 主体框架部分,周辰霏 1712991 提供模板以及CSS样式支持
 * Main Layout for the backend web site.
 */

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\web\Response;
use yii\helpers\Url;
use yii\web\controller;
use backend\models\NklBbsSelectRecord;
use backend\models\NklBbsSelectRecordSearch;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="statics/img/N.ico" type="image/x-icon" />
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    
    <!-- Start: Header -->
    <header class="navbar navbar-fixed-top navbar-shadow">
        <div class="navbar-branding">
            <a class="navbar-brand" >
                <b>NK</b>L
            </a>
            <span id="toggle_sidemenu_l" class="ad ad-lines">
            </span>

            <?php
    NavBar::begin([
        'brandLabel' => 'NKL',
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
        </div>

    </header>
    <!-- End: Header -->
    
    <aside id="sidebar_left" class="nano nano-light affix">

        <!-- Start: Sidebar Left Content -->
        <div class="sidebar-left-content nano-content">

            <!-- Start: Sidebar Menu -->
            <ul class="nav sidebar-menu">
                <li class="sidebar-label pt20">About NKl</li>
                <li>
                    <a href="index.php">
                    <span class="glyphicon glyphicon-home"></span>
                        <span class="sidebar-title">Members</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo Yii::$app->urlManager->createAbsoluteUrl(['site/homework']); ?>">
                        <span class="glyphicon glyphicon-duplicate"></span>
                        <span class="sidebar-title">Homework</span>
                    </a>
                </li>
                <li class="sidebar-label pt20">Administrator Operation</li>
                <li>
                    <a href="<?php echo Yii::$app->urlManager->createAbsoluteUrl(['site/searchnews']); ?>">
                        <span class="glyphicon glyphicon-fire"></span>
                        <span class="sidebar-title">Search News</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo Yii::$app->urlManager->createAbsoluteUrl(['site/addnews']); ?>">
                        <span class="glyphicon glyphicon-fire"></span>
                        <span class="sidebar-title">Add News</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo Yii::$app->urlManager->createAbsoluteUrl(['site/searchactivities']); ?>">
                        <span class="glyphicon glyphicon-bell"></span>
                        <span class="sidebar-title">Search Activities</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo Yii::$app->urlManager->createAbsoluteUrl(['site/addactivities']); ?>">
                        <span class="glyphicon glyphicon-bell"></span>
                        <span class="sidebar-title">Add Activities</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo Yii::$app->urlManager->createAbsoluteUrl(['site/searchbbs']); ?>">
                        <span class="fa fa-envelope-o"></span>
                        <span class="sidebar-title">Search BBS Record</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo Yii::$app->urlManager->createAbsoluteUrl(['site/addbbs']); ?>">
                        <span class="fa fa-envelope-o"></span>
                        <span class="sidebar-title">Select BBS</span>
                    </a>
                </li>
            </ul>
            <!-- End: Sidebar Menu -->

            <!-- Start: Sidebar Collapse Button -->
            <div class="sidebar-toggle-mini">
                <a href="<?php echo Url::to(['site/login'])?>">
                    <span class="fa fa-sign-out"></span>
                </a>
            </div>
            <!-- End: Sidebar Collapse Button -->

        </div>
        <!-- End: Sidebar Left Content -->

    </aside>

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

        <!-- Start: Topbar-Dropdown -->
        <div id="topbar-dropmenu" class="alt">
            <div class="topbar-menu row">
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="metro-tile bg-primary light">
                        <span class="glyphicon glyphicon-inbox text-muted"></span>
                        <span class="metro-title">Messages</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="metro-tile bg-info light">
                        <span class="glyphicon glyphicon-user text-muted"></span>
                        <span class="metro-title">Users</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="metro-tile bg-success light">
                        <span class="glyphicon glyphicon-headphones text-muted"></span>
                        <span class="metro-title">Support</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="metro-tile bg-system light">
                        <span class="glyphicon glyphicon-facetime-video text-muted"></span>
                        <span class="metro-title">Videos</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="metro-tile bg-warning light">
                        <span class="fa fa-gears text-muted"></span>
                        <span class="metro-title">Settings</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="metro-tile bg-alert light">
                        <span class="glyphicon glyphicon-picture text-muted"></span>
                        <span class="metro-title">Pictures</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- End: Topbar-Dropdown -->

        <!-- Begin: Content -->
        <section id="content" class="table-layout animated fadeIn">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
        </section>
        <!-- End: Content -->

        <!-- Begin: Page Footer -->
        <footer id="content-footer" class="affix">
            <div class="row">
                <div class="col-md-6">
                    <span class="footer-legal">© 2019 NKLDesign</span>
                </div>
                <div class="col-md-6 text-right">
                    <span class="footer-meta">Nankai University <b>100</b> Anniversary</span>
                    <a href="#content" class="footer-return-top">
                        <span class="fa fa-arrow-up"></span>
                    </a>
                </div>
            </div>
        </footer>
        <!-- End: Page Footer -->

    </section>
    <!-- End: Content-Wrapper -->

</div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
