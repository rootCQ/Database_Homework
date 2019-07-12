<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
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
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!-- 复制页面开始 -->
<!-- banner -->
<div class=" banner">
	<div class="wthree-different-dot">
	<!-- header -->
		<div class="header">
			<div class="container">  
				<div class="header-mdl agileits-logo"><!-- header-two --> 
					<h1><a href="index.html">Fit Club</a></h1> 
				</div>
				<div class="header-nav"><!-- header-three --> 	
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button> 
						</div>
						<!-- top-nav -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="index.php" class="scroll" data-hover="Home">Home</a></li>
								<li><a href="#about" class="scroll" data-hover="About">About</a></li> 
								<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="#testimonials" class="scroll" data-hover="Testimonials">Testimonials</a></li>
										<li><a href="#pricing" class="scroll" data-hover="Pricing tables">Pricing tables</a></li>
									</ul>
								</li> 
								<li><a href="#coaches" class="scroll" data-hover="Coaches">Coaches</a></li>
								<li><a href="#contact" class="scroll" data-hover="Contact">Contact</a></li>
							</ul>  
							<div class="clearfix"> </div>	
						</div>
					</nav>    
				</div>	
			</div>	
		</div>	
		<!-- //header --> 
		
		<!-- banner slider -->
		<div class="banner-top">
			<div class="slider">
				<div class="callbacks_container">
					<ul class="rslides callbacks callbacks1" id="slider4">
						<li>
						<div class="wthree-different-dot">
							<div class="banner_text">
							<div class="container">
								<h2>Health and strength</h2>
								<p>Aenean molestie enim consectetur, iaculis nisi eu, viverra velit. Suspendisse accumsan ultricies enim in tristique. Nulla eget ligula in odio suscipit dignissim ut vel velit. Duis ut semper risus.</p>
								<div class="thim-click-to-bottom">
									<a href="#about" class="scroll" data-hover="About">
										<i class="fa  fa-long-arrow-down"></i>
									</a>
								</div>
							</div>
							</div>
						</div>
						</li>
						<li>
						<div class="wthree-different-dot">	
							<div class="banner_text">
							<div class="container">
								<h3>Fit and strong</h3>
								<p>Aenean molestie enim consectetur, iaculis nisi eu, viverra velit. Suspendisse accumsan ultricies enim in tristique. Nulla eget ligula in odio suscipit dignissim ut vel velit. Duis ut semper risus.</p>
								<div class="thim-click-to-bottom">
									<a href="#about" class="scroll">
										<i class="fa  fa-long-arrow-down"></i>
									</a>
								</div>
							</div>
							</div>
							</div>
						</li>
						<li>
						<div class="wthree-different-dot">
							<div class="banner_text">
							<div class="container">
								<h3>Workout harder</h3>
								<p>Aenean molestie enim consectetur, iaculis nisi eu, viverra velit. Suspendisse accumsan ultricies enim in tristique. Nulla eget ligula in odio suscipit dignissim ut vel velit. Duis ut semper risus.</p>
								<div class="thim-click-to-bottom">
									<a href="#about" class="scroll">
										<i class="fa  fa-long-arrow-down"></i>
									</a>
								</div>
							</div>
							</div>
							</div>
						</li>
						<li>	
						<div class="wthree-different-dot">
							<div class="banner_text">
							<div class="container">
								<h3>Run and exercise</h3>
								<p>Aenean molestie enim consectetur, iaculis nisi eu, viverra velit. Suspendisse accumsan ultricies enim in tristique. Nulla eget ligula in odio suscipit dignissim ut vel velit. Duis ut semper risus.</p>
								<div class="thim-click-to-bottom">
									<a href="#about" class="scroll">
										<i class="fa  fa-long-arrow-down"></i>
									</a>
								</div>
							</div>
							</div>
							</div>
                        </li>
                    </ul>
				</div>
			</div>
		</div>
		<!-- banner slider -->
		
	</div>
</div>
<!-- //banner -->

<!-- Modal pop-up -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4>Fit club</h4>
				<img src="images/b2.jpg" alt=" " class="img-responsive">
				<h5>Success your business </h5>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
			</div>
		</div>
		<!-- //Modal content-->
	</div>
</div>
<!-- //Modal pop-up -->

<!-- about -->	
<section class="about" id="about">
	<div class="container">
		<h3 class="heading">About <span>us</span></h3>
		<div class="col-md-8 about-left">
			<div class="about-left-grids">
					<h3>Truisque nisi elit, porttitor ut porta id, eleifend vel mauris.</h3>
				<div class="about-left-top">
					<div class="col-md-2 gridicon">
						<i class="fa fa-arrows-alt" aria-hidden="true"></i>
					</div>
					<div class="col-md-4 gridtext">
						<h4>Cross fit</h4>
						<p>Lorem ipsum dolor sit amet, enim sit consectetur adipiscing elit. Inest congue vel. accumsan ultrin dolor sit.</p>
					</div>
					<div class="col-md-2 gridicon">
						<i class="fa fa-anchor" aria-hidden="true"></i>

					</div>
					<div class="col-md-4 gridtext">
						<h4>Gymnastic</h4>
						<p>Ut pulvinar erat in eros sodales sit tristique. Pellentesque risus dui. vel.</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="about-left-bottom">
					<div class="col-md-2 gridicon">
						<i class="fa fa-compass" aria-hidden="true"></i>
					</div>
					<div class="col-md-4 gridtext">
						<h4>Aerobic </h4>
						<p>Ut pulvinar erat in eros sodales sit tristique. Pellentesque risus dui. vel.</p>
					</div>
					<div class="col-md-2 gridicon">
						<i class="fa fa-child" aria-hidden="true"></i>
					</div>
					<div class="col-md-4 gridtext">
						<h4>Body workout</h4>
						<p>Lorem ipsum dolor sit amet, enim sit consectetur adipiscing elit. Inest</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="col-md-4 about-right">
			<img src="images/about.jpg" alt="" />
		</div>
		<div class="clearfix"></div>
		
		<!-- about bottom grids -->
		<div class="about-btm-wthree">
			<div class="col-md-4">
				<div class="about-w3-grids">
					<h4>SPACIOUS GYM</h4>
					<p class="para-agileits-w3layouts">Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum velit. </p>
					<a href="#" data-toggle="modal" data-target="#myModal">Read More <span class="fa fa-long-arrow-right"></span></a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="about-w3-grids grid1">
					<h4>GYM EQUIPMENTS</h4>
					<p class="para-agileits-w3layouts">Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum velit. </p>
					<a href="#" data-toggle="modal" data-target="#myModal">Read More <span class="fa fa-long-arrow-right"></span></a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="about-w3-grids grid2">
					<h4>FREE WORKOUT</h4>
					<p class="para-agileits-w3layouts">Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum velit. </p>
					<a href="#" data-toggle="modal" data-target="#myModal">Read More <span class="fa fa-long-arrow-right"></span></a>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<!-- //about bottom grids -->

	</div>
</section>
<!-- about -->

<!-- Our Classes -->
<section class="popular_classes" id="classes">
	<div class="container">
		<h3 class="heading">Our <span>Classes</span></h3>
		<div class="classes_grids">
			<div class="col-md-4">
			<div class="classes_grid1">
				<img src="images/c1.jpg" alt="popular cakes" />
				<h3>Beginner Classes</h3>
				<p>Vestibulum volutpat faucibus semper int Proin ultricies vestibulum velit.</p>
			</div>
			</div>
			<div class="col-md-4">
			<div class="classes_grid1">
				<img src="images/c2.jpg" alt="popular cakes" />
				<h3>Personal Training</h3>
				<p>Vestibulum volutpat faucibus semper int Proin ultricies vestibulum velit.</p>
			</div>
			</div>
			<div class="col-md-4">
			<div class="classes_grid1">
				<img src="images/c3.jpg" alt="popular cakes" />
				<h3>Gymnastic Classes</h3>
				<p>Vestibulum volutpat faucibus semper int Proin ultricies vestibulum velit.</p>
			</div>
			</div>
			<div class="clearfix"></div>
			<div class="classes_bottom_grids">
				<div class="col-md-4">
				<div class="classes_grid1">
					<img src="images/c4.jpg" alt="popular cakes" />
					<h3>Barbell Training</h3>
					<p>Vestibulum volutpat faucibus semper int Proin ultricies vestibulum velit.</p>
				</div>
				</div>
				<div class="col-md-4">
				<div class="classes_grid1">
					<img src="images/c5.jpg" alt="popular cakes" />
					<h3>6pack workout</h3>
					<p>Vestibulum volutpat faucibus semper int Proin ultricies vestibulum velit.</p>
				</div>
				</div>
				<div class="col-md-4">
				<div class="classes_grid1">
					<img src="images/c6.jpg" alt="popular cakes" />
					<h3>Crossfit Classes</h3>
					<p>Vestibulum volutpat faucibus semper int Proin ultricies vestibulum velit.</p>
				</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div> 
</section>
<!-- //Our Classes -->
<div class="tlinks">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div>
<!-- stats -->
<section class="stats" id="stats">
	<div class="wthree-different-dot1">
		<div class="container">
			<h3 class="heading">Our <span>Stats</span></h3>
			<div class="agileits_stats_grids">
				<div class="col-md-3 col-xs-4 agileinfo_stats">
					<div class="agileinfo_stats_grid">
						<p class="counter">654</p>
						<h3>People</h3>
					</div>
				</div>
				<div class="col-md-3 col-xs-4 agileinfo_stats mid-w3l-stat">
					<div class="agileinfo_stats_grid">
						<p class="counter">432</p>
						<h3>Classes</h3>
					</div>
				</div>
				<div class="col-md-3 col-xs-4 agileinfo_stats mid-w3l-stat">
					<div class="agileinfo_stats_grid">
						<p class="counter">20</p>
						<h3>Experience</h3>
					</div>
				</div>
				<div class="col-md-3 col-xs-4 agileinfo_stats mid-w3l-stat">
					<div class="agileinfo_stats_grid">
						<p class="counter">230</p>
						<h3>Coaches</h3>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</section>
<!-- //stats -->

<!-- agents section -->
<section class="demo" id="coaches">
	<div class="container">  
		<h3 class="heading">Meet Our <span>Coaches</span></h3>
		<div id="verticalTab">
			<ul class="resp-tabs-list">
				<li>
					<div class="col-md-4 tab1">
						<img src="images/s1.jpg" alt="" />
					</div>
					<div class="col-md-8 tab1">
						<h3>william  d'cruz</h3>
						<h4>Fit club trainer</h4>
					</div>
					<div class="clearfix"></div>
				</li>
				<li>
					<div class="col-md-4 tab1">
						<img src="images/s4.jpg" alt="" />
					</div>
					<div class="col-md-8 tab1">
						<h3>sanrick  d'cruz</h3>
						<h4>Fit club trainer</h4>
					</div>
					<div class="clearfix"></div>
				</li>
				<li>
					<div class="col-md-4 tab1">
						<img src="images/s2.jpg" alt="" />
					</div>
					<div class="col-md-8 tab1">
						<h3>louis phillipe</h3>
						<h4>Fit club trainer</h4>
					</div>
					<div class="clearfix"></div>
				</li>
				<li>
					<div class="col-md-4 tab1">
						<img src="images/s3.jpg" alt="" />
					</div>
					<div class="col-md-8 tab1">
						<h3>mary lindey</h3>
						<h4>Fit club trainer</h4>
					</div>
					<div class="clearfix"></div>
				</li>
			</ul>
			<div class="resp-tabs-container">
				<div>
					<div class="col-md-7 tabs-right1">
						<h3>william  d'cruz</h3>
						<h4>Coach : Fit club trainer</h4>
						<ul class="social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a  href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
						<div class="tab-bottom">
							<p><i class="fa fa-map-marker" aria-hidden="true"></i>4615 50 Ave, Lloydminster, Canada</p>
							<p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:mail@example.com">mail@example.com</a></p>
							<p><i class="fa fa-phone" aria-hidden="true"></i>+120 233 455 7654</p>
						</div>
						
							<p>Lorem ipsum dolor sit amet, consectetur adipisthn cingelit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit dolor sit amet.</p>
						
					</div>	
					<div class="col-md-5 tabs-right2">
							<img src="images/s11.jpg" alt="" />
					</div>
					<div class="clearfix"></div>
				</div>
				<div>
					<div class="col-md-7 tabs-right1">
						<h3>sanrick  d'cruz</h3>
						<h4>Coach : Fit club trainer</h4>
						<ul class="social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a  href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
						<div class="tab-bottom">
							<p><i class="fa fa-map-marker" aria-hidden="true"></i>4615 50 Ave, Lloydminster, Canada</p>
							<p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:mail@example.com">mail@example.com</a></p>
							<p><i class="fa fa-phone" aria-hidden="true"></i>+010 233 455 6789</p>
						</div>
						
							<p>Lorem ipsum dolor sit amet, consectetur adipisthn cingelit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit dolor sit amet.</p>
						
					</div>	
					<div class="col-md-5 tabs-right2">
							<img src="images/s44.jpg" alt="" />
					</div>
					<div class="clearfix"></div>
				</div>
				<div>
					<div class="col-md-7 tabs-right1">
						<h3>louis phillipe</h3>
						<h4>Coach : Fit club trainer</h4>
						<ul class="social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a  href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
						<div class="tab-bottom">
							<p><i class="fa fa-map-marker" aria-hidden="true"></i>4615 50 Ave, Lloydminster, Canada</p>
							<p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:mail@example.com">mail@example.com</a></p>
							<p><i class="fa fa-phone" aria-hidden="true"></i>+210 927 633 2468</p>
						</div>
						
							<p>Lorem ipsum dolor sit amet, consectetur adipisthn cingelit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit dolor sit amet.</p>
						
					</div>	
					<div class="col-md-5 tabs-right2">
							<img src="images/s22.jpg" alt="" />
					</div>
					<div class="clearfix"></div>
				</div>
				<div>
					<div class="col-md-7 tabs-right1">
						<h3>mary lindey</h3>
						<h4>Coach : Fit club trainer</h4>
						<ul class="social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a  href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
						<div class="tab-bottom">
							<p><i class="fa fa-map-marker" aria-hidden="true"></i>4615 50 Ave, Lloydminster, Canada</p>
							<p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:mail@example.com">mail@example.com</a></p>
							<p><i class="fa fa-phone" aria-hidden="true"></i>+105 967 254 7834</p>
						</div>
						
							<p>Lorem ipsum dolor sit amet, consectetur adipisthn cingelit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit dolor sit amet.</p>
						
					</div>	
					<div class="col-md-5 tabs-right2">
							<img src="images/s33.jpg" alt="" />
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //agents section -->

<!-- Clients -->
<section class="clients-main" id="testimonials">
	<div class="wthree-different-dot1">
		<div class="container">
			<!-- Owl-Carousel -->
			<h3 class="heading">What People <span>Say</span> </h3>
			<div class="cli-ent">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="item g1">
									<div class="agile-dish-caption">
									<img class="lazyOwl" src="images/s1.jpg" alt="" />
										<h5>Michael</h5>
										<h4>A great start to healthy life</h4>
									</div>
									
									<div class="clearfix"></div>
									<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span> Phasellus iaculis sapien in tellus gravida, a placerat lacus elementum. Nulla vitae lacus nec elit mollis pretium. Sed sed nunc lectus. Integer vehicula elit eget dignissim congue. Aliquam sed ultricies tortor. Curabitur ut odio vestibulum consectetur adipisthn</p>
								</div>
							</li>
							<li>
								<div class="item g1">
									<div class="agile-dish-caption">
									<img class="lazyOwl" src="images/s2.jpg" alt="" />
										<h5>don libero</h5>
										<h4>Very professional club & coaches</h4>
									</div>
									
									<div class="clearfix"></div>
									<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span> Phasellus iaculis sapien in tellus gravida, a placerat lacus elementum. Nulla vitae lacus nec elit mollis pretium. Sed sed nunc lectus. Integer vehicula elit eget dignissim congue. Aliquam sed ultricies tortor. Curabitur ut odio vestibulum consectetur adipisthn</p>
								</div>
							</li>
							<li>
								<div class="item g1">
									<div class="agile-dish-caption">
									<img class="lazyOwl" src="images/s3.jpg" alt="" />
										<h5>Elisa</h5>
										<h4>Workouts are worth attending</h4>
									</div>
									
									<div class="clearfix"></div>
									<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span> Phasellus iaculis sapien in tellus gravida, a placerat lacus elementum. Nulla vitae lacus nec elit mollis pretium. Sed sed nunc lectus. Integer vehicula elit eget dignissim congue. Aliquam sed ultricies tortor. Curabitur ut odio vestibulum consectetur adipisthn</p>
								</div>
							</li>
						</ul>
					</div>
				</section>
			</div>
			<!--// Owl-Carousel -->
		</div>
	</div>
</section>
<!--// Clients -->

<!-- pricing plans -->
<section class="pricing" id="pricing">
	<div class="container">
		<h3 class="heading">Pricing <span>Plans</span></h3>
		<div class="w3l-pricing-grids">
			<div class="agileits-pricing-grid first">
				<div class="pricing_grid">
					<div class="pricing-top">
						<h3>Standard</h3>
					</div>
						<div class="wthree-pricing-info">
							<p>$<span>15</span>/month</p>
						</div>
					<div class="pricing-bottom">
						<div class="pricing-bottom-bottom">
							<p><span class="fa fa-check"></span><span>Training</span> Overview</p>
							<p><span class="fa fa-times"></span><span>Beginner </span> Classes</p>
							<p><span class="fa fa-times"></span><span>Personal </span> Training</p>  
							<p><span class="fa fa-times"></span><span>Olympic </span> weightlifting</p>
							<p class="text"><span class="fa fa-times"></span><span>Foundation</span> Training</p>
						</div>
						<div class="buy-button">
							<a class="popup-with-zoom-anim" href="#small-dialog">Buy Now</a>
						</div>
					</div>
				</div>
			</div>
			<div class="agileits-pricing-grid second">
				<div class="pricing_grid">
					<div class="pricing-top blue-top">
						<h3>Popular</h3>
					</div>
						<div class="wthree-pricing-info blue-top">
							<p>$<span>20</span>/month</p>
						</div>
					<div class="pricing-bottom">
						<div class="pricing-bottom-bottom blue-pricing-bottom-top">
							<p><span class="fa fa-check"></span><span>Training</span> Overview</p>
							<p><span class="fa fa-check"></span><span>Beginner </span> Classes</p>
							<p><span class="fa fa-times"></span><span>Personal </span> Training</p>  
							<p><span class="fa fa-times"></span><span>Olympic </span> weightlifting</p>
							<p class="text"><span class="fa fa-times"></span><span>Foundation</span> Training</p>
						</div>
						<div class="buy-button">
							<a class="popup-with-zoom-anim" href="#small-dialog">Buy Now</a>
						</div>
					</div>
				</div>
			</div>
			<div class="agileits-pricing-grid third">
				<div class="pricing_grid">
					<div class="pricing-top green-top">
						<h3>Golden</h3>
					</div>
						<div class="wthree-pricing-info green-top">
							<p>$<span>35</span>/month</p>
						</div>
					<div class="pricing-bottom">
						<div class="pricing-bottom-bottom green-pricing-bottom-top">
							<p><span class="fa fa-check"></span><span>Training</span> Overview</p>
							<p><span class="fa fa-check"></span><span>Beginner </span> Classes</p>
							<p><span class="fa fa-check"></span><span>Personal </span> Training</p>  
							<p><span class="fa fa-times"></span><span>Olympic </span> weightlifting</p>
							<p class="text"><span class="fa fa-times"></span><span>Foundation</span> Training</p>
						</div>
						<div class="buy-button">
							<a class="popup-with-zoom-anim" href="#small-dialog">Buy Now</a>
						</div>
					</div>
				</div>
			</div>
			
			<div class="agileits-pricing-grid fourth">
				<div class="pricing_grid">
					<div class="pricing-top yellow-top">
						<h3>Professional</h3>
					</div>
						<div class="wthree-pricing-info yellow-top">
							<p>$<span>50</span>/month</p>
						</div>
					<div class="pricing-bottom">
						<div class="pricing-bottom-bottom yellow-pricing-bottom-top">
							<p><span class="fa fa-check"></span><span>Training</span> Overview</p>
							<p><span class="fa fa-check"></span><span>Beginner </span> Classes</p>
							<p><span class="fa fa-check"></span><span>Personal </span> Training</p>  
							<p><span class="fa fa-check"></span><span>Olympic </span> weightlifting</p>
							<p class="text"><span class="fa fa-check"></span><span>Foundation</span> Training</p>
						</div>
						<div class="buy-button">
							<a class="popup-with-zoom-anim" href="#small-dialog">Buy Now</a>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</section>
<!-- //pricing plans -->

<!--pop-up-grid-->
<div id="popup">
	<div id="small-dialog" class="mfp-hide">
		<div class="signin-form profile">
			<h3>Sign Up</h3>
			<div class="login-form">
				<form action="#" method="post">
					<input type="text" name="name" placeholder="Username" required="">
					<input type="email" name="email" placeholder="E-mail" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<input type="password" name="password" placeholder="Confirm Password" required="">
					<input type="submit" value="Sign Up">
				</form>
			</div>
		</div>
	</div>
</div>						
<!--pop-up-grid-->

<!-- contact -->
<section class="w3ls-section contact" id="contact">
	<div class="container">
		<div class="w3ls-title">
			<h3 class="heading">Get in <span>touch</span></h3>
		</div>
		<div class="w3ls_map">
			<iframe src=""
				style="border:0"></iframe>
		</div>

		<div class="contact_wthreerow agileits-w3layouts">
		
			<div class="col-md-7 w3l_contact_form">
				<h4>Contact Form</h4>
				<form action="#" method="post">
					<input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}"
						required="">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"
						required="">
					<input type="text" name="Phone" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}"
						required="">
					<textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required>Message...</textarea>
					<input type="submit" value="Submit">
				</form>
			</div>
			<div class="col-md-5 agileits_w3layouts_contact_gridl">
				<div class="agileits_mail_grid_right_grid">
					<h4>Contact Info</h4>
					<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur. Nunc id dui vitae urna tincidunt varius.</p>
					<ul class="contact_info">
						<li><span class="fa fa-map-marker" aria-hidden="true"></span>1234k Avenue, 4th block, 3FB, New Jersey.</li>
						<li><span class="fa fa-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
						<li><span class="fa fa-phone" aria-hidden="true"></span>+1(21) 244 567 5678</li>
						<li><span class="fa fa-globe" aria-hidden="true"></span><a href="#">info@website.com</a></li>
					</ul>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</section>
<!-- //contact -->
 
<!-- footer -->
<section class="footer">
	<div class="container">
		<div class="agileinfo-grids">
			<div class="agile-grid-left agile-grid-right">
				<h4>Keep Updated On Social Media</h4>
				<div class="social">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-rss"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#"><i class="fa fa-vk"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="agile-nav">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="#about" class="scroll">About</a></li>
				<li><a href="#classes" class="scroll">Classes</a></li>
				<li><a href="#coaches" class="scroll">Our Coaches</a></li>
				<li><a href="#testimonials" class="scroll">Testimonials</a></li>
				<li><a href="#pricing" class="scroll">Pricing Plans</a></li>
				<li><a href="#contact" class="scroll">Contact us</a></li>
			</ul>
		</div>
	</div>
</section>
<!-- //footer -->
<!-- 复制模板主题代码结束 -->

<!-- 复制模板相关Js设置 -->
<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion           
			width: 'auto', //auto or any width like 600px
			fit: true,   // 100% fit in a container
			closed: 'accordion', // Start closed if in accordion view
			activate: function(event) { // Callback function if tab is switched
			var $tab = $(this);
			var $info = $('#tabInfo');
			var $name = $('span', $info);
			$name.text($tab.text());
			$info.show();
			}
			});
			$('#verticalTab').easyResponsiveTabs({
			type: 'vertical',
			width: 'auto',
			fit: true
			});
		});
	</script>
	<!-- scrolling script -->
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script> 
	<!-- //scrolling script -->
	<!--banner Slider starts Here-->
    <script>
		// You can also use "$(window).load(function() {"
		$(function () {
		  // Slideshow 4
		  $("#slider4").responsiveSlides({
			auto: true,
			pager:true,
			nav:true,
			speed: 500,
			namespace: "callbacks",
			before: function () {
			  $('.events').append("<li>before event fired.</li>");
			},
			after: function () {
			  $('.events').append("<li>after event fired.</li>");
			}
		  });
	
		});
	 </script>
    <!--banner Slider ends Here-->
    	<!-- Pop-up for pricing tables -->
    <script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
																							
		});
		</script>
    <!-- //Pop-up for pricing tables -->
    <!-- Stats-Number-Scroller-Animation-JavaScript -->
	<script>
		jQuery(document).ready(function( $ ) {
			$('.counter').counterUp({
				delay: 10,
				time: 1000 
			});
		});
	</script>
	<!-- //Stats-Number-Scroller-Animation-JavaScript -->
	<!-- flexSlider --><!-- for testimonials -->
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
	<!-- //flexSlider --><!-- for testimonials -->
	<!-- Smooth scrolling -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- //Smooth scrolling -->


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
