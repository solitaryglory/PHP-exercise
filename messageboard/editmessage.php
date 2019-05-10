<?php
include("head.php");
if(!empty($_FILES['upfile'])){
	$name=$_FILES['upfile']['name'];
	$tmp_name=$_FILES['upfile']['tmp_name'];
	$path="F:\\phpstudy\\WWW\\messageboard\\upload\\";
	move_uploaded_file($tmp_name, $path.$name);
	echo "文件上传成功";
}
?>
<meta charset="utf-8">
<form action="message.php" method="post" enctype="multipart/form-data">
请上传您的头像:<input type="file" name="upfile"/>
</br>
请填写您的昵称:<input type="text" name="name"/>
</br>
请填写您的性别:<input type="text" name="sex"/>
</br>
<input type="submit" name="submit" value="提交">
</form>