<?php 
$link=mysql_connect("localhost","admin","xxzx160168")or die('���ݿ�����ʧ��:'. mysql_error());
if(mysql_select_db("phpcms",$link))
echo "";
else
echo ('����ʧ��:'. mysql_error());
mysql_query("set names gbk") or die("errors!")



?>