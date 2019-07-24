<!DOCTYPE html>
<html style="height:100%;">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>商品购买界面</title>

	<!--pageMeta-->

	<!-- Loading Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">

	<!-- Loading Elements Styles -->
	<link href="css/style.css" rel="stylesheet">

	<!-- Loading Magnific-Popup Styles -->
	<link href="css/magnific-popup.css" rel="stylesheet">

	<!-- Loading Font Styles -->
	<link href="css/iconfont-style.css" rel="stylesheet">


	<!-- Favicons -->
	<link rel="icon" href="images/562c11dfa9ec8a13bb1224f6fb03918fa0ecc098.jpg">
	<link rel="apple-touch-icon" href="images/favicons/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-touch-icon-114x114.png">
	<style>
		html,
		body {
			width: 100%;
			min-width: 1200px;
			height: 100%;
			padding: 0;
			margin: 0;
			font-family: "微软雅黑";
			background-color: #242736
		}

		.header {
			width: 100%;
			margin: 0 auto;
			height: 230px;
			background-color: #fff
		}

		.container {
			width: 100%;
			min-width: 100px;
			height: auto
		}

		.black {
			background-color: #242736
		}

		.blue {
			background-color: #0ae
		}

		.qrcode {
			width: 1200px;
			margin: 0 auto;
			height: 30px;
			background-color: #242736
		}

		.littlecode {
			width: 16px;
			height: 16px;
			margin-top: 6px;
			cursor: pointer;
			float: right
		}

		.showqrs {
			top: 30px;
			position: absolute;
			width: 100px;
			margin-left: -65px;
			height: 160px;
			display: none
		}

		.shtoparrow {
			width: 0;
			height: 0;
			margin-left: 65px;
			border-left: 8px solid transparent;
			border-right: 8px solid transparent;
			border-bottom: 8px solid #e7e8eb;
			margin-bottom: 0;
			font-size: 0;
			line-height: 0
		}

		.guanzhuqr {
			text-align: center;
			background-color: #e7e8eb;
			border: 1px solid #e7e8eb
		}

		.guanzhuqr img {
			margin-top: 10px;
			width: 80px
		}

		.shmsg {
			margin-left: 10px;
			width: 80px;
			height: 16px;
			line-height: 16px;
			font-size: 12px;
			color: #242323;
			text-align: center
		}

		.nav {
			width: 1200px;
			margin: 0 auto;
			height: 70px;
		}

		.open,
		.logo {
			display: block;
			float: left;
			height: 40px;
			width: 85px;
			margin-top: 20px
		}

		.divier {
			display: block;
			float: left;
			margin-left: 20px;
			margin-right: 20px;
			margin-top: 23px;
			width: 1px;
			height: 24px;
			background-color: #d3d3d3
		}

		.open {
			line-height: 30px;
			font-size: 20px;
			text-decoration: none;
			color: #1a1a1a
		}

		.navbar {
			float: right;
			width: 200px;
			height: 40px;
			margin-top: 15px;
			list-style: none
		}

		.navbar li {
			float: left;
			width: 100px;
			height: 40px
		}

		.navbar li a {
			display: inline-block;
			width: 100px;
			height: 40px;
			line-height: 40px;
			font-size: 16px;
			color: #1a1a1a;
			text-decoration: none;
			text-align: center
		}

		.navbar li a:hover {
			color: #00AAEE
		}

		.title {
			width: 1200px;
			margin: 0 auto;
			height: 80px;
			line-height: 80px;
			font-size: 20px;
			color: #FFF
		}

		.content {
			width: 100%;
			min-width: 1200px;
			height: 660px;
			background-color: #fff;
		}

		.alipayform {
			width: 800px;
			margin: 0 auto;
			height: 600px;
			border: 1px solid #0ae
		}

		.element {
			width: 600px;
			height: 80px;
			margin-left: 100px;
			font-size: 20px
		}

		.etitle,
		.einput {
			float: left;
			height: 26px
		}

		.etitle {
			width: 150px;
			line-height: 26px;
			text-align: right
		}

		.einput {
			width: 200px;
			margin-left: 20px
		}

		.einput input {
			width: 398px;
			height: 24px;
			border: 1px solid #0ae;
			font-size: 16px
		}

		.mark {
			margin-top: 10px;
			width: 500px;
			height: 30px;
			margin-left: 80px;
			line-height: 30px;
			font-size: 12px;
			color: #999
		}

		.legend {
			margin-left: 100px;
			font-size: 24px
		}

		.alisubmit {
			width: 400px;
			height: 40px;
			border: 0;
			background-color: #0ae;
			font-size: 16px;
			color: #FFF;
			cursor: pointer;
			margin-left: 170px
		}

		.footer {
			width: 100%;
			height: 120px;
			background-color: #242735
		}

		.footer-sub a,
		span {
			color: #808080;
			font-size: 12px;
			text-decoration: none
		}

		.footer-sub a:hover {
			color: #00aeee
		}

		.footer-sub span {
			margin: 0 3px
		}

		.footer-sub {
			padding-top: 40px;
			height: 20px;
			width: 600px;
			margin: 0 auto;
			text-align: center
		}
	</style>


	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!--[if lt IE 9]>
      <script src="scripts/html5shiv.js"></script>
      <script src="scripts/respond.min.js"></script>
    <![endif]-->

	<!--headerIncludes-->

</head>

<body data-spy="scroll" data-target=".navMenuCollapse" style="height:100%;">

	<div class="header">

		<div class="container">
			<div class="nav"><span class="divier"></span>
				<a class="open" target="_blank">南开收银</a>
				<ul class="navbar">
					<li><a href="index.php?r=site/shop1">返回商城主页</a></li>
					<li></li>
				</ul>
				<ul class="navbar">
					<li><a href="index.php">百年南开主页</a></li>
					<li></li>
				</ul>
			</div>
		</div>
		<div class="container" style="background-color:#fff;height:650%;>
		<div id=" wrap">
			<section id="portfolio-shop" class="portfolio-block">
				<div class="container">
					<div class="row sep-bottom no-dev">
						<div class="container">
							<div class="row sep-bottom no-dev">
								<div class="container">
									<div class="row sep-bottom no-dev">
									<div class="col-md-6">
										<h2>支付成功</h2>
									</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</body>

</html>