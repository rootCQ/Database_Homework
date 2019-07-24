<?php
$serve = '192.168.64.1';
$username = 'root';
$password = 'sHnnzbl-2210';
$dbname = 'NKL';
$mysqli = new Mysqli($serve,$username,$password,$dbname);
if($mysqli->connect_error){
  die('connect error:'.$mysqli->connect_errno);
}
$mysqli->set_charset('UTF-8'); // 设置数据库字符集


 ?>
