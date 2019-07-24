<?PHP
	ini_set("error_reporting","E_ALL & ~E_NOTICE");
	session_start();//启动Session
	if(!$_SESSION['name']){
    	echo "<script language='javascript'>alert('对不起，您未登录！');history.back();</script>";
	}
?>
<html lang="cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>欢迎成功进入首页！</title>
</head>
<body>
	<h1>当前登录用户：</h1>
	<h2>
		<?PHP
			echo $_SESSION['name'];
		?>
	</h2>
	<a href="logout.php">注销用户</a>
</body>
</html>