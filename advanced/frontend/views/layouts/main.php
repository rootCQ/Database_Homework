<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
// use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

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
    <link rel="icon" href="statics/img/N.ico" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
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
			        <a href="index.php"><img src="statics/img/100nk.png" height="150" width="150" alt="" title="" /></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="index.php"><img src="statics/img/home.ico"height="25" width="25" alt="">Home</a></li>
			          <li class="menu-has-children"><a href=""><img src="statics/img/news.ico"height="20" width="20" alt="">News</a>
			            <ul>
			              <li><a href="blog-home.html">News List</a></li>
			              <li><a href="blog-single.html">News Page</a></li>
			            </ul>
			          </li>				          					          		          
                      <li><a href="contact.html"><img src="statics/img1/core-img/bag.svg"height="20" width="20" alt="">Souvenirs</a></li>
                      <li><a href="about.php"><img src="statics/img/about.ico"height="20" width="20" alt="">About</a></li>
                      <li><a href="index.php"><img src="statics/img1/core-img/heart.svg" height="20" width="20" alt=""></a></li>
                      <li><a href="index.php"><img src="statics/img1/core-img/user.svg" height="20" width="20" alt=""></a></li>

			        </ul>
                  </nav><!-- #nav-menu-container -->	
                <!-- User Login Info -->
		    	</div>
		    </div>
		  </header><!-- #header -->
<!--?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-expand-lg navbar-light bg-light',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
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
 ?-->

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>
<footer class="footer-area section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>About Me</h4>
                                <p>We are NKUers who tend to paddle but want to strive for the upper reaches,either.</p>
                                <p class="footer-text">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Web is made by <i class="fa fa-heart-o" aria-hidden="true"></i>NKL</a></p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>Link</h4>
                                <p><a href="https://www.nankai.edu.cn" target="_blank">南开大学</a></p>
                                <p><a href="http://100.nankai.edu.cn" target="_blank">南开大学百年校庆</a></p>
                                <p><a href="http://news.nankai.edu.cn" target="_blank">南开大学新闻网</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
<!-- <footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer> -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
