<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	
	<title>支付宝即时到账交易接口</title>
</head>
<?php
$dbhost = 'localhost';  // mysql服务器主机地址
    $dbuser = 'root';            // mysql用户名
    $dbpass = 'root';          // mysql用户名密码
    $dbname = 'yii2advanced';
    $db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if(! $db )
    {
        die('Could not connect: ' . mysqli_error());
    }
?>
<style>
	html,body {
		width:100%;
		min-width:1200px;
		height:auto;
		padding:0;
		margin:0;
		font-family:"微软雅黑";
		background-color:#242736
	}
	.header {
		width:100%;
		margin:0 auto;
		height:230px;
		background-color:#fff
	}
	.container {
		width:100%;
		min-width:100px;
		height:auto
	}
	.black {
		background-color:#242736
	}
	.blue {
		background-color:#0ae
	}
	.qrcode {
		width:1200px;
		margin:0 auto;
		height:30px;
		background-color:#242736
	}
	.littlecode {
		width:16px;
		height:16px;
		margin-top:6px;
		cursor:pointer;
		float:right
	}
	.showqrs {
		top:30px;
		position:absolute;
		width:100px;
		margin-left:-65px;
		height:160px;
		display:none
	}
	.shtoparrow {
		width:0;
		height:0;
		margin-left:65px;
		border-left:8px solid transparent;
		border-right:8px solid transparent;
		border-bottom:8px solid #e7e8eb;
		margin-bottom:0;
		font-size:0;
		line-height:0
	}
	.guanzhuqr {
		text-align:center;
		background-color:#e7e8eb;
		border:1px solid #e7e8eb
	}
	.guanzhuqr img {
		margin-top:10px;
		width:80px
	}
	.shmsg {
		margin-left:10px;
		width:80px;
		height:16px;
		line-height:16px;
		font-size:12px;
		color:#242323;
		text-align:center
	}
	.nav {
		width:1200px;
		margin:0 auto;
		height:70px;
	}
	.open,.logo {
		display:block;
		float:left;
		height:40px;
		width:85px;
		margin-top:20px
	}
	.divier {
		display:block;
		float:left;
		margin-left:20px;
		margin-right:20px;
		margin-top:23px;
		width:1px;
		height:24px;
		background-color:#d3d3d3
	}
	.open {
		line-height:30px;
		font-size:20px;
		text-decoration:none;
		color:#1a1a1a
	}
	.navbar {
		float:right;
		width:200px;
		height:40px;
		margin-top:15px;
		list-style:none
	}
	.navbar li {
		float:left;
		width:100px;
		height:40px
	}
	.navbar li a {
		display:inline-block;
		width:100px;
		height:40px;
		line-height:40px;
		font-size:16px;
		color:#1a1a1a;
		text-decoration:none;
		text-align:center
	}
	.navbar li a:hover {
		color:#00AAEE
	}
	.title {
		width:1200px;
		margin:0 auto;
		height:80px;
		line-height:80px;
		font-size:20px;
		color:#FFF
	}
	.content {
		width:100%;
		min-width:1200px;
		height:660px;
		background-color:#fff;		
	}
	.alipayform {
		width:800px;
		margin:0 auto;
		height:600px;
		border:1px solid #0ae
	}
	.element {
		width:600px;
		height:80px;
		margin-left:100px;
		font-size:20px
	}
	.etitle,.einput {
		float:left;
		height:26px
	}
	.etitle {
		width:150px;
		line-height:26px;
		text-align:right
	}
	.einput {
		width:200px;
		margin-left:20px
	}
	.einput input {
		width:398px;
		height:24px;
		border:1px solid #0ae;
		font-size:16px
	}
	.mark {
        margin-top: 10px;
        width:500px;
        height:30px;
        margin-left:80px;
        line-height:30px;
        font-size:12px;
        color:#999
    }
	.legend {
		margin-left:100px;
		font-size:24px
	}
	.alisubmit {
		width:400px;
		height:40px;
		border:0;
		background-color:#0ae;
		font-size:16px;
		color:#FFF;
		cursor:pointer;
		margin-left:170px
	}
	.footer {
		width:100%;
		height:120px;
		background-color:#242735
	}
	.footer-sub a,span {
		color:#808080;
		font-size:12px;
		text-decoration:none
	}
	.footer-sub a:hover {
		color:#00aeee
	}
	.footer-sub span {
		margin:0 3px
	}
	.footer-sub {
		padding-top:40px;
		height:20px;
		width:600px;
		margin:0 auto;
		text-align:center
	}
</style>
<body>
	<div class="header">
		<div class="container black">
			<div class="qrcode"></div>
		</div>
		<div class="container">
			<div class="nav"><span class="divier"></span>
				<a class="open" target="_blank">南开收银</a>
				<ul class="navbar">
					<li><a href="http://127.0.0.1/shop/shop.php" target="_blank">返回商城主页</a></li>
					<li></li>
				</ul>
			</div>
		</div>
		<div class="container blue">
			<div class="title">支付宝即时到账</div>
		</div>
	</div>
	<div class="content">
		<form action="pr1.php" class="alipayform" method="post" target="_blank">
			<div class="element" style="margin-top:60px;">
				<div class="legend">支付宝、南开品牌文化联名交易接口</div>
			</div>
			<div class="element">
				<div class="etitle">商户序号:</div>
				<div class="einput">
                <?php
				$var = $_GET['new'];
                 $query = "SELECT product_id FROM nkl_products_info where product_name=\"$var\";";
                 $result = $db->query($query);
    $num_results = $result->num_rows;
    for ($i = 0;$i < $num_results; $i++){
        $row = $result->fetch_assoc();
		$pid = htmlspecialchars(stripslashes($row['product_id']));
        echo htmlspecialchars(stripslashes($row['product_id']));
    }
				 ?>
                </div>
				<br>
				<div class="mark"></div>
			</div>
			
              <div class="element">
				<div class="etitle">商品名称:</div>
				<div class="einput">
                <?php
                 echo $var;
                 ?>
                </div>
				<br>
				<div class="mark"></div>
			</div>
			<div class="element">
				<div class="etitle">付款金额:</div>
				<div class="einput">
                <?php
                 $query = "SELECT product_price FROM nkl_products_info where product_name=\"$var\";";
                 $result = $db->query($query);
    $num_results = $result->num_rows;
    for ($i = 0;$i < $num_results; $i++){
        $row = $result->fetch_assoc();
		
        echo htmlspecialchars(stripslashes($row['product_price']));
    }
                 ?>
                </div>
				<br>
				<div class="mark"></div>
			</div>
			<div class="element">
				<div class="etitle">商品库存:</div>
				<div class="einput">
                <?php
                 $query = "SELECT product_storage FROM nkl_products_info where product_name=\"$var\";";
                 $result = $db->query($query);
    $num_results = $result->num_rows;
    for ($i = 0;$i < $num_results; $i++){
        $row = $result->fetch_assoc();
        echo htmlspecialchars(stripslashes($row['product_storage']));
    }
                 ?>
                </div>
				<br>
				<div class="mark"></div>
			</div>
			<div class="element">
				<input type="submit" class="alisubmit" value ="确认支付">
			</div>
		</form>
        <?php 
		 $query = "SELECT product_storage FROM nkl_products_info where product_name=\"$var\";";
                 $result = $db->query($query);
    $num_results = $result->num_rows;
    for ($i = 0;$i < $num_results; $i++){
        $row = $result->fetch_assoc();
        $num = $row['product_storage'];
    }
	$num = $num - 1;
	$query = "update nkl_products_info set product_storage = \"$num\" where product_name = \"$var\";";
	$db->query($query);
	
	session_start();
	$username = $_SESSION['name'];
	$nowtime = date('Y-m-d H:i:s',time());
	$sql = "INSERT INTO shoprecords (username, productid, time)
VALUES ('$username', '$pid', '$nowtime')";
    $db->query($sql);
		?>
	</div>
	<div class="footer">
		<p class="footer-sub">南开大学出品@NKL</p>
	</div>
</body>
</html>