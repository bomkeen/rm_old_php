
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
<HEAD>
<TITLE></TITLE>
<meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″ />
</HEAD>
<BODY>
<?php
OB_START();
include 'function/connect.php';
?>
<?php
$passwords=$_POST['passwords'];
$username=$_POST['username'];
$md5pass=md5($passwords) ;
$sql="select * from  pd_depart where username='$username' and passwords='$md5pass'";
$dbquery = mysql_db_query($dbname, $sql);
$num_rows = mysql_num_rows($dbquery);
$i=0;
while ($i < $num_rows)
{
$result = mysql_fetch_array($dbquery);
$name = $result['namedepart'];
$i++;
}
	if($i==0)
	{?>
<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=index.php?falselogin=1;"> 
<?php	 }
else{
$sql="select * from  pd_depart where username='$username' and passwords='$md5pass'";
$dbquery = mysql_db_query($dbname, $sql);
$num_rows = mysql_num_rows($dbquery);
$i=0;
while ($i < $num_rows)
{
$result = mysql_fetch_array($dbquery);
$nameweb = $result['namedepart'];
$level = $result['level'];
$iddepartweb = $result['id'];
$codedepart = $result['codedepart'];
$username = $result['username'];
$dep_sec = $result['dep_sec'];
$i++;
}
        session_start();
	$_SESSION["level"]=$level;
	$_SESSION["nameweb"]=$nameweb; //���ͧ͢user
	$_SESSION["iddepartweb"]=$iddepartweb; // id �ͧuser 
        $_SESSION["codedepart"]=$codedepart; //����Ἱ�
        $_SESSION["username"]=$username; //username
	$_SESSION["dep_sec"]=$dep_sec;
	session_write_close();
?>
<META HTTP-EQUIV="REFRESH" CONTENT="0;url=main.php">
<?php } ?>
</HTML>
