<?php 
$link=mysql_connect("localhost","admin","xxzx160168") or die('����ʧ��:' . mysql_error());

mysql_query("set names gbk");
if(mysql_select_db("phpcms",$link))
  echo "���ݿ����ӳɹ�"."<br>";
  //echo "<br>";
  else
  echo ('���ݿ�ѡ��ʧ��:' . mysql_error());
?>