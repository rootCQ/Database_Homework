<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

use yii\helpers\Html;
use yii\widgets\LinkPager;
use common\models\NklNewsInfo;
use  yii\db\ActiveRecord;
use  common\models\NklBbsInfo;
?>
<!-- <div class="site-index"> -->

<!-- <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div> -->
<!-- <div class="container">
			<div class="row fullscreen align-items-center justify-content-between">
				<div class="col-lg-6 col-md-6 banner-left">
					<h6>This is our</h6>
					<h1>100 NK</h1>
					<p>
						You will begin to realise why this exercise is called the Dickens Pattern with reference to the ghost showing Scrooge some different futures.
					</p>
					<a href="#" class="primary-btn text-uppercase">discover now</a>
				</div>
			</div>
        </div>	 -->


<div class="imgo timer_wrap">
	<div id="home" class="slider-area">
		<div data-velocity=".2"></div>
		<div class="col-md-12  col-md-offset-0 col-md-pull-0 col-md-push-0">
			<div class="carousel-indicators1">
				<div id="counter"> </div>
			</div>
			<div id="slide-list" class="carousel-fade carousel slide" data-ride="carousel">
				<div class="carousel-indicators2">距离<img src="statics/img/nku.png" style="width:160px;height:80px;">百年校庆还有</div>
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<div class="slide-text-wrapper">
							<div class="slide-text">
								<img class="imgg" src="statics/img/l5.jpg">
							</div>
						</div>
					</div>
					<div class="item">
						<div class="slide-text-wrapper">
							<div class="slide-text">
								<img class="imgg" src="statics/img/l2.jpg">
							</div>
						</div>
					</div>
					<div class="item">
						<div class="slide-text-wrapper">
							<div class="slide-text">
								<img class="imgg" src="statics/img/l3.jpg">
							</div>
						</div>
					</div>
					<div class="item">
						<div class="slide-text-wrapper">
							<div class="slide-text">
								<img class="imgg" src="statics/img/l4.jpg">
							</div>
						</div>
					</div>
					<div class="item">
						<div class="slide-text-wrapper">
							<div class="slide-text">
								<img class="imgg" src="statics/img/l1.jpg">
							</div>
						</div>
					</div>
					<div class="item">
						<div class="slide-text-wrapper">
							<div class="slide-text">
								<img class="imgg" src="statics/img/l6.jpg">
							</div>
						</div>
					</div>
					<div class="item">
						<div class="slide-text-wrapper">
							<div class="slide-text">
								<img class="imgg" src="statics/img/l7.jpg">
							</div>
						</div>
					</div>
				</div>
				<ol class="carousel-indicators">
					<li data-target="#slide-list" data-slide-to="0" class="active"></li>
					<li data-target="#slide-list" data-slide-to="1"></li>
					<li data-target="#slide-list" data-slide-to="2"></li>
					<li data-target="#slide-list" data-slide-to="3"></li>
					<li data-target="#slide-list" data-slide-to="4"></li>
					<li data-target="#slide-list" data-slide-to="5"></li>
					<li data-target="#slide-list" data-slide-to="6"></li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="body-content">
	<div class="row1">
		<div class="col-md-9" frag="面板6">
			<h2>
				<span></span> <img src="statics/img/nk100.png" style="width:60px;">
			</h2>
			<hr style="margin:10px 0 10px 0">
			<div class="row" frag="面板19" style="padding-left:15px;padding-right:15px;padding-bottom:30px;">
				<div class="col-md-12" frag="窗口19" portletmode="simpleList">
					<!-- List -->
					<?php $NklNewsInfos = NklNewsInfo::find()->orderBy('news_releaseTime DESC')->limit(8)->all(); ?>
					<?php foreach ($NklNewsInfos as $NklNewsInfo) : ?>
						<div class="news-list row">
							<div class="col-md-12">
								<a class="item-title" href="<?= Html::encode("{$NklNewsInfo->news_link}") ?>"><?= Html::encode("· {$NklNewsInfo->news_title}") ?></a>
								<p class="item-date"><small><?= Html::encode("{$NklNewsInfo->news_releaseTime}") ?></small></p>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>

		<div class="timeline" style="margin-bottom:0px;" frag="面板111">
			<div class="timeline-left" frag="窗口11101">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="wp_article_list_table">
					<tbody>
						<?php $NklBbsInfos = NklBbsInfo::find()->where(['bbs_isSelected' => 1])->orderBy('bbs_time,bbs_id DESC')->limit(5)->all(); ?>
						<?php foreach ($NklBbsInfos as $NklBbsInfo) : ?>
							<tr>
								<td>
									<div class="item item-light">
										<p style="margin-top:0px;margin-bottom:0px;color:#666666;"><?= Html::encode("@ {$NklBbsInfo->bbs_content}") ?></p>
									</div>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>

		<!-- </div> -->
		<!-- <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div> -->

	</div>
</div>
<!-- </div> -->
<!-- 复制模板相关Js设置 -->
<script>
	$(document).ready(function() {
		$('#horizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion           
			width: 'auto', //auto or any width like 600px
			fit: true, // 100% fit in a container
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
		$(".scroll").click(function(event) {
			event.preventDefault();
			$('html,body').animate({
				scrollTop: $(this.hash).offset().top
			}, 1000);
		});
	});
</script>
<!-- //scrolling script -->
<!--banner Slider starts Here-->
<script>
	// You can also use "$(window).load(function() {"
	$(function() {
		// Slideshow 4
		$("#slider4").responsiveSlides({
			auto: true,
			pager: true,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			before: function() {
				$('.events').append("<li>before event fired.</li>");
			},
			after: function() {
				$('.events').append("<li>after event fired.</li>");
			}
		});

	});
</script>
<!--banner Slider ends Here-->
<!-- Pop-up for pricing tables -->
<script src="statics/js/jquery.magnific-popup.js" type="text/javascript"></script>
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
	jQuery(document).ready(function($) {
		$('.counter').counterUp({
			delay: 10,
			time: 1000
		});
	});
</script>
<!-- //Stats-Number-Scroller-Animation-JavaScript -->
<!-- flexSlider -->
<!-- for testimonials -->
<script type="text/javascript">
	$(window).load(function() {
		$('.flexslider').flexslider({
			animation: "slide",
			start: function(slider) {
				$('body').removeClass('loading');
			}
		});
	});
</script>
<!-- //flexSlider -->
<!-- for testimonials -->
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

		$().UItoTop({
			easingType: 'easeOutQuart'
		});

	});
</script>
<!-- //here ends scrolling icon -->
<!-- //Smooth scrolling -->

<!--popup-js-->
<script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
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
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
<!--//popup-js-->