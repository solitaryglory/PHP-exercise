<?php
//Create on 2019-4-17 to improve development capabilities


//Connect database
$conn=mysql_connect('localhost:3306','root','root') or die('There is something wrong in the Database');
mysql_select_db('messageboard') or die('Error');
mysql_set_charset('utf8');//set utf8
?>