<?php
error_reporting(0);
header("Content-type:text/html;charset=utf-8"); 
include "conn.php";
echo $_SESSION['user'];
if($_POST['submit']){
	$sql="insert into book (user,title,content,time) value('$_POST[user]','$_POST[title]','$_POST[content]',now())";

if(mysql_query($sql)===True){
	echo "<script>alert('Add Successfully')</script>";
}
else{
	echo "对不起，留言出错";
}
}
?>
<title>
	留言板
</title>
<form action="add.php" method="post">
用户: <input type="text" name="user" size="10"/><br>
标题: <input type="text" name="title"/><br>
内容: <textarea name="content"></textarea><br><br>
<input type="submit" name="submit" value="发布留言"/>
</form>
