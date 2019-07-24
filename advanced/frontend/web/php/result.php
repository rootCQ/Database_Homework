<?php
  header("Content-Type: text/html; charset=utf8");

  if(!isset($_POST['submit'])){
    exit("错误执行");
  }//判断是否有submit操作

  $name=$_POST['name'];//post获取表单里的name
  $password1=md5($_POST['password']);//post获取表单里的password,使用MD5加密，不可逆


  include('connect.php');//链接数据库

  $sql = "select username from nkl_user_login where username = '$name'";//SQL语句
  $result = mysqli_query($mysqli,$sql);//执行SQL语句
  $num = mysqli_num_rows($result);//统计执行结果影响的行数
  if ($num) {//如果已经存在该用户
  	 echo "<script>alert('温馨提示：用户存在！'); history.go(-1);</script>";
  } else {
  	$q="insert into nkl_user_login(username,password) values ('$name','$password1')";//向数据库插入表单传来的值的sql
  	$reslut=mysqli_query($mysqli,$q);//执行sql
  if (!$reslut){
    die('Error: ' . mysqli_error());//如果sql执行失败输出错误
  }else{
    echo "注册成功";//成功输出注册成功
    echo "
           <script>
              setTimeout(function(){window.location.href='../index.php?r=login/login';},1000);
           </script>";
           //如果注册成功使用js 1秒后跳转到登录页面;
  	}
  }
  mysqli_close($mysqli);//关闭数据库
?>