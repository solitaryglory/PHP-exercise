<?php
session_start();
error_reporting(0);
header("Content-type:text/html;charset=utf-8"); 
include "conn.php";
$user='lihuaiqiu';
$passwd='lihuaiqiujiawo';
$_SESSION['user']=$_POST['user'];
$_SESSION['password']=$_POST['password'];
if(isset($_POST['submit'])){
	if($_SESSION['user']==$user and $_SESSION['password']==$passwd){
		echo "<script>alert('Log success')</script>";
		header('location:admin.php');

}
else{
	echo "<script>alert('wrong');</script>";
}
}
?>
<html>
<style>
body{
   background:url(./public/background.jpg)  no-repeat center center;
   background-size:cover;
   background-attachment:fixed;
   background-color:#CCCCCC;
   text-align: center;
}
h1{
	color:orange;
    text-align:center;
}
</style>
<h1>
	欢迎登陆管理系统
</h1>
<body>
<form action="" method="post">
请输入用户:<input type="text" name="user"/><br>
请输入密码:<input type="password" name="password">
<input type="submit" name="submit">
</form></body>