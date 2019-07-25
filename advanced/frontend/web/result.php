<?php
/**
 * Team: @NKL,NKU
 * Coding by 朱心怡 1711304
 * This is the connection .
 */
?>
<!DOCTYPE html>
<html lang="cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>南开大学用户注册</title>
<link href="css/result.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/result.js"></script>
</head>
<body>
	<div class="login">
	    <div class="message">南开大学纪念品商店注册</div>
	    <div id="darkbannerwrap"></div>
	    <form name="result" action="php/result.php" method="post" onsubmit="return check()">
			<input name="name" id="name" placeholder="请输入帐号" type="text" required maxlength="16">
				<hr class="hr15">
			<input name="password" id="password" placeholder="请输入密码" type="password" required maxlength="16">
				<hr class="hr15">
			<input name="pwd" id="pwd" placeholder="请再次输入密码" type="password" required maxlength="16">
				<hr class="hr15">
			<input value="注册" style="width:100%;" type="submit" name="submit">
			<a href="login.html">返回登录</a>
			<a href="#">忘记密码</a>
				<hr class="hr20">
		</form>
	</div>
</body>
</html>