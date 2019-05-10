<?php
error_reporting(0);
header("Content-type:text/html;charset=utf-8");
include "head.php"; 
include "conn.php";?>
<?php

 $sql = "select * from book" or die(mysql_error());

 $query = mysql_query($sql) or die(mysql_error());

 while ($row = mysql_fetch_array($query)){

?>

<tr bgcolor = "#eff3ff">

<td>标题： <?php echo  $row[user]?>   用户：<?php echo $row[title]?></td>

</tr>

<tr bgcolor = "#ffffff">

<td>内容：<?php echo $row[content]?></td>

</tr>

<?php

 } 

?>
