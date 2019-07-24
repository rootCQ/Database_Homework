<?php
use yii\helpers\Html;
use frontend\models\NklProductsInfo;
?>
<!DOCTYPE html>
<html id="home" class="slider-area">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>商品购买界面</title>
    
    <!--pageMeta-->

    <!-- Loading Bootstrap -->
    <link href="statics/css/products/bootstrap.css" rel="stylesheet">
	
    <!-- Loading Elements Styles -->   
    <link href="statics/css/products/style.css" rel="stylesheet">
	
	<!-- Loading Magnific-Popup Styles --> 
    <link href="statics/css/products/magnific-popup.css" rel="stylesheet"> 
	   
    <!-- Loading Font Styles -->
    <link href="statics/css/products/iconfont-style.css" rel="stylesheet">
	
	
	<!-- Favicons -->
	<link rel="icon" href="statics/img/products/562c11dfa9ec8a13bb1224f6fb03918fa0ecc098.jpg">
	<link rel="apple-touch-icon" href="statics/img/products/favicons/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="statics/img/products/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="statics/img/products/favicons/apple-touch-icon-114x114.png">


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="scripts/html5shiv.js"></script>
      <script src="scripts/respond.min.js"></script>
    <![endif]-->
    
    <!--headerIncludes-->
    
</head>
<body data-spy="scroll" data-target=".navMenuCollapse">
    
    <div id="wrap">

		<!-- NAVIGATION -->
		<header id="intro-right" class="container" style="background-image: url(images/%E5%BE%AE%E4%BF%A1%E5%9B%BE%E7%89%87_20190713160734.jpg);width:1170px;height:600px;margin-left:auto;margin-right:auto;">
		  <div class="container">
		    <div class="slogan">
		      <div class="container">
		        <div class="slogan">
		          <h1>&nbsp;</h1>
		          <h2 class="giant-title">&nbsp;</h2>
	            </div>
		        <a href="#portfolio-shop-2" class="goto">
		          <h2><i class="icon icon-gift"></i></h2>
	            </a> </div>
		    </div>
		  </div>
		</header>
		<!-- PORTFOLIO SHOP BLOCK -->
		<section id="portfolio-shop" class="portfolio-block">
		  <div class="container">
				<div class="row sep-bottom no-dev">
					<div class="col-md-6">
						<h2>南开品牌文化</h2>
					</div>
					<div class="col-md-5 text-right" style="margin-top:28px;margin-left:50px;">
						<p>在百年校庆之际，pick一款心仪的南开纪念品吧！</p>
					</div>
				</div>
				<ul class="portfolio-list portfolio-4col">
					<li>
						<a href="images/微信图片_20190713172451.jpg" title="Description"><span><i class="icon center-icon icon-magnifier-add"></i></span>
							<img src="images/微信图片_20190713172451.jpg" alt="" width="320" height="461">
						</a>
						<?php $NklProductsInfo = NklProductsInfo::find()->where(['product_id' =>1])->all(); ?>
						<div class="desc">
							<a href="?r=nklproductsinfo/payment&productname=南开风景明信片" class="btn btn-sm btn-primary"><i class="icon icon-basket"></i>Buy</a>
							<span class="name"><?= Html::encode("{$NklProductsInfo[0]->product_name}") ?></span>
							<span class="price"><?= Html::encode("￥ {$NklProductsInfo[0]->product_price}") ?></span>
					  </div>
				  </li>
					<li> 
						<a href="images/微信图片_20190713172455.jpg" title="Description">
							<span><i class="icon center-icon icon-magnifier-add"></i></span><img src="images/微信图片_20190713172455.jpg" alt="">
						</a>
						<?php $NklProductsInfo = NklProductsInfo::find()->where(['product_id' =>2])->all(); ?>
						<div class="desc">
							<a href="?r=nklproductsinfo/payment&productname=学位熊" class="btn btn-sm btn-primary"><i class="icon icon-basket"></i>Buy</a>
							<span class="name"><?= Html::encode("{$NklProductsInfo[0]->product_name}") ?></span>
							<span class="price"><?= Html::encode("￥ {$NklProductsInfo[0]->product_price}") ?></span>
					  </div> 
				  </li>
					<li> 
						<a href="images/微信图片_20190713172458.jpg" title="Description">
							<span><i class="icon center-icon icon-magnifier-add"></i></span><img src="images/微信图片_20190713172458.jpg" alt="">
						</a> 
						<?php $NklProductsInfo = NklProductsInfo::find()->where(['product_id' =>3])->all(); ?>
						<div class="desc">
							<a href="?r=nklproductsinfo/payment&productname=阳阳与亮亮" class="btn btn-sm btn-primary"><i class="icon icon-basket"></i>Buy</a>
							<span class="name"><?= Html::encode("{$NklProductsInfo[0]->product_name}") ?></span>
							<span class="price"><?= Html::encode("￥ {$NklProductsInfo[0]->product_price}") ?></span>
					  </div>
				  </li>
					<li> 
						<a href="images/微信图片_20190713172505.jpg" title="Description"><span><i class="icon center-icon icon-magnifier-add"></i></span><img src="images/微信图片_20190713172505.jpg" alt="">
						</a> 
						<?php $NklProductsInfo = NklProductsInfo::find()->where(['product_id' =>4])->all(); ?>
						<div class="desc">
							<a href="?r=nklproductsinfo/payment&productname=校徽" class="btn btn-sm btn-primary"><i class="icon icon-basket"></i>Buy</a>
							<span class="name"><?= Html::encode("{$NklProductsInfo[0]->product_name}") ?></span>
							<span class="price"><?= Html::encode("￥ {$NklProductsInfo[0]->product_price}") ?></span>
					  </div>
				  </li>
					<li>
						<a href="images/微信图片_20190713172502.jpg" title="Description">
						<span><i class="icon center-icon icon-magnifier-add"></i></span><img src="images/微信图片_20190713172502.jpg" alt="">
						</a>
						<?php $NklProductsInfo = NklProductsInfo::find()->where(['product_id' =>5])->all(); ?>
						<div class="desc">
							<a href="?r=nklproductsinfo/payment&productname=口红套装" class="btn btn-sm btn-primary"><i class="icon icon-basket"></i>Buy</a>
							<span class="name"><?= Html::encode("{$NklProductsInfo[0]->product_name}") ?></span>
							<span class="price"><?= Html::encode("￥ {$NklProductsInfo[0]->product_price}") ?></span>
				  </li>
					<li> 
						<a href="images/微信图片_20190713172510.jpg" title="Description">
							<span><i class="icon center-icon icon-magnifier-add"></i></span><img src="images/微信图片_20190713172510.jpg" alt="">
						</a>
						<?php $NklProductsInfo = NklProductsInfo::find()->where(['product_id' =>6])->all(); ?>
						<div class="desc">
							<a href="?r=nklproductsinfo/payment&productname=保温杯" class="btn btn-sm btn-primary"><i class="icon icon-basket"></i>Buy</a>
							<span class="name"><?= Html::encode("{$NklProductsInfo[0]->product_name}") ?></span>
							<span class="price"><?= Html::encode("￥ {$NklProductsInfo[0]->product_price}") ?></span>
					  </div>
				  </li>
					<li>
						<a href="images/微信图片_20190713172515.jpg" title="Description">
							<span><i class="icon center-icon icon-magnifier-add"></i></span><img src="images/微信图片_20190713172515.jpg" alt="">
						</a>
						<?php $NklProductsInfo = NklProductsInfo::find()->where(['product_id' =>7])->all(); ?>
						<div class="desc">
							<a href="?r=nklproductsinfo/payment&productname=荷花木雕水杯垫" class="btn btn-sm btn-primary"><i class="icon icon-basket"></i>Buy</a>
							<span class="name"><?= Html::encode("{$NklProductsInfo[0]->product_name}") ?></span>
							<span class="price"><?= Html::encode("￥ {$NklProductsInfo[0]->product_price}") ?></span>
					  </div>
				  </li>
					<li> 
						<a href="images/微信图片_20190713172518.jpg" title="Description">
							<span><i class="icon center-icon icon-magnifier-add"></i></span><img src="images/微信图片_20190713172518.jpg" alt="">
						</a>
						<?php $NklProductsInfo = NklProductsInfo::find()->where(['product_id' =>8])->all(); ?>
						<div class="desc">
							<a href="?r=nklproductsinfo/payment&productname=兔子玩偶" class="btn btn-sm btn-primary"><i class="icon icon-basket"></i>Buy</a>
							<span class="name"><?= Html::encode("{$NklProductsInfo[0]->product_name}") ?></span>
							<span class="price"><?= Html::encode("￥ {$NklProductsInfo[0]->product_price}") ?></span>
					  </div>
				  </li>
				</ul>
		  </div>
	  </section>
		
		<!-- DOWNLOAD LINE 2 BLOCK -->
		<section id="download-line-2" class="dark-bg cover-bg" style="background-image: url(images/%E5%BE%AE%E4%BF%A1%E5%9B%BE%E7%89%87_20190713163655.png);width:1170px;height:600px;margin-left:auto;margin-right:auto;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
					  <h2 class="giant-title"><a href="#">
						</a></h2>
						<a href="#">
						<h3><i class="icon icon-focus"></i></h3>
						</a>
					</div>
				</div>	
			</div>
	  </section>
		
		<!-- BENEFITS GRID BORDER BLOCK-->
	<!-- MODALS BEGIN-->
	<div class="modal fade" id="modalMessage" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 class="modal-title">&nbsp;</h3>
			</div>
		</div>
</div>
	<!-- MODALS END-->
</body>
</html>
