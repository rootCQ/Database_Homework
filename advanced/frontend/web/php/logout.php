<?php
/**
 * Team: @NKL,NKU
 * Coding by 朱心怡 1711304
 * This is the logout .
 */
	session_start();//初始化session
	session_destroy();//注销session
	header("location:../login.html");//注销session并跳转
?>