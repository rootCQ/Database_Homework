<?php
use yii\helpers\Html;
/**
 * Team: @NKL,NKU
 * Coding by 李伟 1711350
 * 未使用，来源于朱心怡的shop view
 */
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
</head>
<body data-spy="scroll" data-target=".navMenuCollapse">
    
    <div id="wrap">

		<!-- NAVIGATION -->
	  <nav class="navbar navbar-fixed-top navbar-slide bg-color3">
			<div class="container-fluid"> 
				<a class="navbar-brand goto" href="#"><img src="statics/img/products/微信图片_20190713160715.png" alt="Your logo" width="238" height="57"></a> 
			  <button class="round-toggle navbar-toggle menu-collapse-btn collapsed" data-toggle="collapse" data-target=".navMenuCollapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<div class="collapse navbar-collapse navMenuCollapse">
					<ul class="nav">
						<li><a href="#">TOP</a></li>
						<li><a href="#portfolio-shop">南开商品</a></li>
						<li></li>
					</ul>
				</div>
		  </div>
	  </nav>
		
		<!-- INTRO RIGHT BLOCK -->
		<header id="intro-right" class="container" style="background-image: url(statics/img/products/%E5%BE%AE%E4%BF%A1%E5%9B%BE%E7%89%87_20190713160734.jpg);">
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
					<div class="col-md-6 text-right">
						<p>在百年校庆之际，pick一款心仪的南开礼品吧！</p>
					</div>
				</div>
				<ul class="portfolio-list portfolio-4col">
					<li>
						<a href="statics/img/products/微信图片_20190713172451.jpg" title="Description"><span><i class="icon center-icon icon-magnifier-add"></i></span>
							<img src="statics/img/products/微信图片_20190713172451.jpg" alt="" width="320" height="461">
						</a>
						<div class="desc">
							<a href="?r=../products/payment&productname=南开风景明信片" class="btn btn-sm btn-primary"><i class="icon icon-basket"></i>Buy</a>
							<span class="name">南开风景明信片</span>
							<span class="price">14.00</span>
					  </div>
				  </li>
					<li> 
						<a href="statics/img/products/微信图片_20190713172455.jpg" title="Description">
							<span><i class="icon center-icon icon-magnifier-add"></i></span><img src="statics/img/products/微信图片_20190713172455.jpg" alt="">
						</a>
						<div class="desc">
							<a href="?r=products/payment&productname=学位熊" class="btn btn-sm btn-primary"><i class="icon icon-basket"></i>Buy</a>
							<span class="name">学位熊</span>
							<span class="price">150.00</span>
					  </div> 
				  </li>
					<li> 
						<a href="statics/img/products/微信图片_20190713172458.jpg" title="Description">
							<span><i class="icon center-icon icon-magnifier-add"></i></span><img src="statics/img/products/微信图片_20190713172458.jpg" alt="">
						</a> 
						<div class="desc">
							<a href="?r=products/payment&productname=阳阳与亮亮" class="btn btn-sm btn-primary"><i class="icon icon-basket"></i>Buy</a>
							<span class="name">阳阳与亮亮</span>
							<span class="price">110.00</span>
					  </div>
				  </li>
					<li> 
						<a href="statics/img/products/微信图片_20190713172505.jpg" title="Description"><span><i class="icon center-icon icon-magnifier-add"></i></span><img src="statics/img/products/微信图片_20190713172505.jpg" alt="">
						</a> 
						<div class="desc">
							<a href="?r=products/payment&productname=校徽" class="btn btn-sm btn-primary"><i class="icon icon-basket"></i>Buy</a>
							<span class="name">校徽</span>
							<span class="price">65.00<small>100.00</small></span>
					  </div>
				  </li>
					<li>
						<a href="statics/img/products/微信图片_20190713172502.jpg" title="Description">
						<span><i class="icon center-icon icon-magnifier-add"></i></span><img src="statics/img/products/微信图片_20190713172502.jpg" alt="">
						</a>
						<div class="desc">
							<a href="?r=products/payment&productname=口红套装" class="btn btn-sm btn-primary"><i class="icon icon-basket"></i>Buy</a>
						  <span class="name">口红套装</span>
						  <span class="price">280</span>.00</div>
				  </li>
					<li> 
						<a href="statics/img/products/微信图片_20190713172510.jpg" title="Description">
							<span><i class="icon center-icon icon-magnifier-add"></i></span><img src="statics/img/products/微信图片_20190713172510.jpg" alt="">
						</a>
						<div class="desc">
							<a href="?r=products/payment&productname=保温杯" class="btn btn-sm btn-primary"><i class="icon icon-basket"></i>Buy</a>
							<span class="name">保温杯</span>
							<span class="price">80.00</span>
					  </div>
				  </li>
					<li>
						<a href="statics/img/products/微信图片_20190713172515.jpg" title="Description">
							<span><i class="icon center-icon icon-magnifier-add"></i></span><img src="statics/img/products/微信图片_20190713172515.jpg" alt="">
						</a>
						<div class="desc">
							<a href="?r=products/payment&productname=荷花木雕水杯垫" class="btn btn-sm btn-primary"><i class="icon icon-basket"></i>Buy</a>
							<span class="name">荷花木雕水杯垫</span>
							<span class="price">18.00<small>20.00</small></span>
					  </div>
				  </li>
					<li> 
						<a href="statics/img/products/微信图片_20190713172518.jpg" title="Description">
							<span><i class="icon center-icon icon-magnifier-add"></i></span><img src="statics/img/products/微信图片_20190713172518.jpg" alt="">
						</a>
						<div class="desc">
							<a href="?r=products/payment&productname=兔仔玩偶" class="btn btn-sm btn-primary"><i class="icon icon-basket"></i>Buy</a>
							<span class="name">兔子玩偶</span>
							<span class="price">115.00</span>
					  </div>
				  </li>
				</ul>
		  </div>
	  </section>
		
		<!-- DOWNLOAD LINE 2 BLOCK -->
		<section id="download-line-2" class="dark-bg cover-bg" style="background-image: url(statics/img/products/%E5%BE%AE%E4%BF%A1%E5%9B%BE%E7%89%87_20190713163655.png);">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
					  <h2 class="giant-title"><a href="#"><br>
						</a></h2>
						<a href="#">
						<h3><i class="icon icon-focus"></i></h3>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
						</a>
					</div>
				</div>	
			</div>
	  </section>
		
		<!-- BENEFITS GRID BORDER BLOCK-->
		<section id="benefits-grid-border" class="text-center"></section>
		
		<!-- FOOTER LIST -->
		<footer id="footer-list" class="dark-bg bg-color1"></footer></div><!-- /#wrap -->
	

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
