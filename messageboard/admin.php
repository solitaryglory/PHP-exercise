<?php
error_reporting(0);
include("head.php");
header("Content-type:text/html;charset=utf-8"); 
include "conn.php";
$user=$_POST['user'];
$deletesql='delete from book where user='.$user;
if(isset($_POST['submit'])){
	if(mysql_query($deletesql)===True){
		echo "<script>alert('删除成功');</script>";
	}
	else{
		echo "<script>alert('删除失败');</script>";
	}


}

?>
<!DOCTYPE html>
<html>
<head>
	<title>后台管理系统</title>
</head>
<body>
	<form action="admin.php" method="post">
		请输入你想要删除的用户名:<input type="text" name="user">
	</br>
		请输入你想要更新的用户名:<input type="text" name="deuser"><br>
		请输入更新后的用户名:<input type="text" name="newuser">
		<input type="submit" name="submit">


</body>
</html>