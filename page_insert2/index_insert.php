<?php session_start(); 
	$fpath = str_replace('\\', '/',substr(dirname(__FILE__), 0, -17));
	require_once $fpath.'/include/common.inc.php'; 
	//echo $fpath.'/include/common.inc.php';//����·���Ƿ���ȷ
  //include("conn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>160���Ż�ҳ���̷������ݲ���ϵͳ</title>
<script src="/member/login.php?action=abc"></script>
</head>
<body>
	
<?php
$Submit = isset($__POST['Submit']) ? trim($__POST['Submit']) : '';
//$pid = isset($__POST['pid']) ? trim($__POST['pid']) : '';
$remark = isset($__POST['remark']) ? trim($__POST['remark']) : '';
//$info_code = isset($__POST['info_code']) ? trim($__POST['info_code']) : '';
//$name = isset($__POST['name']) ? trim($__POST['name']) : '';
$fullname = isset($__POST['fullname']) ? trim($__POST['fullname']) : '';//����
//$omissible = isset($__POST['omissible']) ? trim($__POST['omissible']) : '';//����
//$unomissible = isset($__POST['unomissible']) ? trim($__POST['unomissible']) : '';//����
//$random_name = isset($__POST['random_name']) ? trim($__POST['random_name']) : '';//����
//$main_work = isset($__POST['main_work']) ? trim($__POST['main_work']) : '';//����
//$attribute = isset($__POST['attribute']) ? trim($__POST['attribute']) : '';//����
//$branch = isset($__POST['branch']) ? trim($__POST['branch']) : '';//����branch
//$adjective = isset($__POST['adjective']) ? trim($__POST['adjective']) : '';//����
//$address = isset($__POST['address']) ? trim($__POST['address']) : '';
$district = isset($__POST['district']) ? trim($__POST['district']) : '';//����
//$street = isset($__POST['street']) ? trim($__POST['street']) : '';//����
//$road = isset($__POST['road']) ? trim($__POST['road']) : '';
//$number = isset($__POST['number']) ? trim($__POST['number']) : '';//����
$edifice = isset($__POST['edifice']) ? trim($__POST['edifice']) : '';
$floor = isset($__POST['floor']) ? trim($__POST['floor']) : '';
//$cell = isset($__POST['cell']) ? trim($__POST['cell']) : '';
$linkman  = isset($__POST['linkman']) ? trim($__POST['linkman']) : '';
//$category  = isset($__POST['category']) ? trim($__POST['category']) : '';
$business  = isset($__POST['business']) ? trim($__POST['business']) : '';
//$telephone = isset($__POST['telephone']) ? trim($__POST['telephone']) : '';
$new_phone = isset($__POST['new_phone']) ? trim($__POST['new_phone']) : '';
//$mobilephone = isset($__POST['mobilephone']) ? trim($__POST['mobilephone']) : '';
$fax  = isset($__POST['fax']) ? trim($__POST['fax']) : '';
$website  = isset($__POST['website']) ? trim($__POST['website']) : '';
//$email  = isset($__POST['email']) ? trim($__POST['email']) : '';
//$principal  = isset($__POST['principal']) ? trim($__POST['principal']) : '';
//$editor  = isset($__POST['editor']) ? trim($__POST['editor']) : '';
$editor  = $_username;
//$edittime  = isset($__POST['edittime']) ? trim($__POST['edittime']) : '';
if(phpversion()>='5.1.0')
{ 
    //echo date_default_timezone_get();////��ȡphp��ǰʹ��ʱ��
    date_default_timezone_set('Asia/Shanghai'); //����ʱ��
}
$edittime = date("Y-m-d H:i:s");

//print_r($_POST);
if($Submit=="�ύ"){
if(!empty($editor)){
$sqlstr = "INSERT INTO china_szpage ( 
           remark, fullname,linkman,
           district,edifice,floor,business,
           new_phone,fax,website,editor,edittime) 
           VALUES (
           '$remark', '$fullname' ,'$linkman',
           '$district','$edifice',
           '$floor','$business','$new_phone','$fax','$website',
           '$editor','$edittime'
)";
echo "<br>";
echo $sqlstr;
//$query=mysql_query( $sqlstr, $link ) or die(mysql_error());
$query=mysql_query( $sqlstr) or die(mysql_error());
if($query==true)
     {	     	
	     	echo "<br>";echo "<br>";
	     	echo "<font color=red>"."���ݲ���ɹ�!!���������Ƿ���ȷ��"."</font>"."<br>"."<br>"
	     	."<a href='/mine/page_insert2'>����˴�����������Ź��̷�������</a>";
	     	//."�����������ݣ����˻����ڵ�ַ�����룺http://172.20.1.21/mine/football_insert/";
	    echo "<br>";
	    }
else
    {echo "���ݲ���ʧ��!!";}
}
else 
{
  echo "��û�е�¼ϵͳû�в���Ȩ�ޣ�<a href=''>�����˴���¼�������������¼�룡</a>";}
}
/*
����������Զ���ת���������
$query=mysql_query("INSERT INTO china_szpage ( 
					id, day, time, typename, hometeam, points, guestteam, halfpoints, remarks
					) VALUES (
					'$id', '$day' ,'$time' ,'$typename' ,'$hometeam' ,'$points' ,'$guestteam' ,'$halfpoints' ,'$remarks'  
					)") or die(mysql_error());
        if($query==true)
        { echo "<script>alert('�����곡�������ϲ���ɹ�!!');window.location.href='http://172.20.1.21/mine/football_insert/';</script>";
        }
        else
        {echo "���ݲ���ʧ��!!";}*/
    
else
{echo "...δ�ύ����!!";};
//mysql_close( $link );
?>