<?php
/**
 * Team: @NKL,NKU
 * Coding by 周辰霏 1712991 整体,李伟 1711350 提供倒计时JS支持
 * This is the activities views for the frontend web.
 */

/* @var $this yii\web\View */

$this->title = 'Home of NKL';

use yii\helpers\Html;
use yii\widgets\LinkPager;
use common\models\NklNewsInfo;
use  yii\db\ActiveRecord;
use  common\models\NklBbsInfo;
?>
<div class="imgo timer_wrap">
	<div id="home" class="slider-area">
		<div data-velocity=".2"></div>
		<div class="col-md-12  col-md-offset-0 col-md-pull-0 col-md-push-0">
		<!-- 倒计时嵌入 -->
			<div class="carousel-indicators1">
				<div id="counter"> </div>
			</div>
			<!-- 倒计时结束浮在跳马灯上 -->
			<!-- 跳马灯 -->
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
								<img class="imgg" src="statics/img/NKU_1.jpg">
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
								<img class="imgg" src="statics/img/NKU_2.jpg">
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
				<!-- 跳马灯指示器利用该CSS生成1和2使得文字和倒计时可以显示在上面 -->
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
			<!-- 跳马灯结束 -->
		</div>
	</div>
</div>
<!-- 新闻列表 -->
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
		<!-- 新闻结束 -->
		<!-- 留言列表 -->
		<div class="timeline" style="margin-bottom:0px;margin-top:70px;" frag="面板111">
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
		<!-- 留言结束 -->
	</div>
</div>
<!-- 以下JS from 李伟 -->
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