<?session_start();?>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<?

if($_SESSION["level"]<5)
{	
?>
	<SCRIPT language="JavaScript">
	alert("��ҹ������Է����ҹ Page ���");
	location.href='index.php';
	</SCRIPT> 
<?	
}
?>
<?
include ("function/connect.php");
$name=$_POST["name"];
$user=$_POST["user"];
$dep_main=$_POST["dep_main"];
$dep_sec=$_POST["dep_sec"];
$user_level=$_POST["user_level"];
$id=$_POST["id"];
 //echo $job_type;
$sql="update pd_depart set codedepart='$dep_main', namedepart='$name',username='$user',level='$user_level'
,dep_sec='$dep_sec' where id='$id'";
//echo $sql;
mysql_query($sql) ;
mysql_close();
?>
<SCRIPT language="JavaScript">
	alert("���º����");
	location.href='user.php';
</SCRIPT>





