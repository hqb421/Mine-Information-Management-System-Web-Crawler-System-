<?php session_start(); include("conn.php");


if($Submit=="�ύ"){
//$query=mysql_query("insert into myself_matches ('id','day','time','typename','hometeam','points','guestteam','halfpoints','remarks')values('$id','$day','$time','$typename','$hometeam','$points','$guestteam','$halfpoints','$remarks')");}
//$query=mysql_query("insert into myself_matches (`id`,day,`time`,`typename`,`hometeam`,`points`,`guestteam`,`halfpoints`,`remarks`) values('$id','$day','$time','$typename','$hometeam','$points','$guestteam','$halfpoints','$remarks')"); }
$query=mysql_query("insert into myself_matches (id) values($id),$link"); 
}
if($query==true){
echo "...�������ӳɹ�!!";
}else{echo "...���ݲ���ʧ��!!";};
	mysql_close( $link );
?>