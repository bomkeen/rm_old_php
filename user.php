<?php
session_start();
?>
<?
if($_SESSION["level"]<5)
{	
?>
	<SCRIPT language="JavaScript">
	alert("ท่านไม่มีสิทธิใช้งาน Page นี้");
	//location.href='login.php';
	</SCRIPT>
	<META HTTP-EQUIV="REFRESH" CONTENT="0;url=body.php">
<?	
}
?>
<?php
include './function/connect.php';
?>

<? if($del != '' )
	{?>
<SCRIPT language="JavaScript">
	alert("ท่านต้องการลบข้อมูลหรือไม่");
	//location.href='login.php';
	</SCRIPT>
<?
$sql = "delete from pd_depart where id='$del'"; 
$dbquery = mysql_db_query($dbname, $sql);
} ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
 <title>Untitled Document</title>

<link href="./css/stylesheet.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
-->
</style></head>

<body leftmargin="0" topmargin="0"><BR>

<CENTER><FONT SIZE="5" COLOR="#FF66FF">!!! การแก้ไขข้อมูลนั้น ทำด้วยความละมัดระวัง !!! </FONT></CENTER><BR>

<table width="100%"  border="0" cellspacing="0" cellpadding="1">
  <tr>
    <td bgcolor="#CCCCCC" class=" unnamed1"><strong class="boxtitle1">&nbsp;&nbsp;&nbsp;เพิ่ม/แก้ไข/ลบ ผู้ใช้ระบบ </strong></td>
  </tr>
</table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A HREF="user_add.php"><IMG SRC="img/user_add.gif" WIDTH="40" HEIGHT="40" BORDER="0" ALT=""></A>
<A HREF="user_add.php"><FONT SIZE="3" COLOR="#7bbf6a">Add User</FONT></A>
  <table  width="80%-"  border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC" bordercolordark="#FFFFFF">
  <tr bgcolor="#799AE1" class="unnamed1">
    <td><div align="center">ลำดับ</div></td>
    <td><div align="center">รหัสหน่วยงาน</div></td>
    <td class="unnamed1"><div align="center"><FONT SIZE="2" COLOR="">ชื่อหน่วยงาน</FONT></div></td>
    <td class="unnamed2"><div align="center"><FONT SIZE="2" COLOR="">ชื่อรหัสผ่าน</FONT></div></td>
    <td class="unnamed2"><div align="center"><FONT SIZE="2" COLOR="">รหัสผ่าน</FONT></div></td>
    <td class="unnamed2"><div align="center"><FONT SIZE="2" COLOR="">สิทธิการใช้ระบบ</FONT></div></td>
    <td class="unnamed2"><div align="center"><FONT SIZE="2" COLOR="">แก้ไข</FONT></div></td>
	<td class="unnamed2"><div align="center"><FONT SIZE="2" COLOR="">แก้ไข รหัสผ่าน</FONT></div></td>
    <td class="unnamed2"><div align="center"><FONT SIZE="2" COLOR="">ลบ</FONT></div></td>
  </tr>
  <?
$sql="select pd.*,dep.ward from pd_depart AS pd
join code_complaint AS dep ON pd.codedepart=dep.ward_id
 order by  id";
	//echo"$sql";
$dbquery = mysql_db_query($dbname, $sql);
$num_rows = mysql_num_rows($dbquery);
$i=0;
while ($i < $num_rows)
{
$result = mysql_fetch_array($dbquery);
$id = $result[0];
$codedepart = $result[7];
$namedepart = $result[2];
$usernamedepart  = $result[3];
$passdepart = $result[4];
$leveldepart  = $result[5];
$order = $i+1;
?>
  <tr class="unnamed1">
    <td><div align="center"><span class="unnamed2"><? echo"$id"; ?>
    </span></div></td>
    <td><div align="center"><? echo"$codedepart"; ?></div></td>
    <td class="unnamed2">
      <div align="left">&nbsp;&nbsp;&nbsp;<? echo"$namedepart"; ?></div></td>
    <td>&nbsp;<? echo"$usernamedepart"; ?></td>
    <td>&nbsp;<? echo"$passdepart"; ?></td>
    <td>&nbsp;<?
	if($leveldepart=='1'){$nameleveldepart='<font color="#9900FF">เจ้าหน้าที่</font>';}
	if($leveldepart=='2'){$nameleveldepart='<font color="#66FF00">หัวหน้าแผนก</font>';}
	if($leveldepart=='3'){$nameleveldepart='<font color="#FFFF00">ผู้บริหารความเสี่ยง</font>';}
	if($leveldepart=='4'){$nameleveldepart='<font color="#003399">ผู้อำนวยการ</font>';}
	if($leveldepart=='5'){$nameleveldepart='<font color="#FF0000">ผู้ดูแลระบบ</font>';}
	echo"$nameleveldepart"; ?></td>
    <td><div align="center"><? echo"<A HREF='user_edit.php?showedit=$id'>
  <img src=./images/edit.png></a>"; ?></div></td>
  <td><div align="center"><? echo"<A HREF='editpass.php?showedit=$id'>
  <img src=./images/edit.png></a>"; ?></div></td>
    <td><div align="center"><? echo"<A HREF='user.php?del=$id'>
  <img src=./images/delete.png></a>"; ?>&nbsp;</div></td>
  </tr>
  <?
  $i++;
}
?>
</table>
<br>
</html>
