
<?include "./level/dep.php";?>
<?php
include './function/connect.php';
?>
<? if($add == '1' ){
$sql = "insert into code_complaint (ward_id, ward) values ('$ward_id_insert', '$ward_name_insert')"; 
//echo"$sql";
$dbquery = mysql_db_query($dbname, $sql);
} ?>
<? if($update == '1' ){
$sql = "update code_complaint set  ward ='$ward_edit_date' where ward_id='$ward_id_edit_date'"; 
//echo"$sql";
$dbquery = mysql_db_query($dbname, $sql);
} ?>
<? if($del != '' ){
$sql = ""; 
//echo"$sql";
$dbquery = mysql_db_query($dbname, $sql);
} ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<title>Untitled Document</title>
<? if($nameweb==''){
?>
<SCRIPT language="JavaScript">
	alert("กรุณา Login ก่อนเข้าใช้งาน page นี้");
location.href='index.php';
</SCRIPT>
<? } ?>


<link href="stylesheet.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
-->
</style></head>

<body leftmargin="0" topmargin="0">
<table width="100%"  border="0" cellspacing="0" cellpadding="1">
  <tr>
    <td bgcolor="#CCCCCC" class=" unnamed1"><strong class="boxtitle1">&nbsp;&nbsp;&nbsp;เพิ่ม/แก้ไข/ลบ หน่วยงาน </strong></td>
  </tr>
</table>
<br>
<? if($showedit == '') {?>
<form name="form1" method="post" action="AdminDepartment.php">
  <table width="400"  border="0" align="center" cellpadding="0" cellspacing="0">
    <tr class="unnamed1">
      <td class="unnamed1"><div align="center">รหัสหน่วยงาน</div></td>
      <td class="unnamed1"><div align="center">ชื่อหน่วยงาน</div></td>
      <td><div align="center">
        <input name="add" type="hidden" id="add" value="1">
      </div></td>
    </tr>
    <tr class="unnamed1">
      <td class="unnamed2"><div align="center">        
              <input name="ward_id_insert" type="text" class="unnamed1" id="codea" size="20">
      </div></td>
      <td class="unnamed2"><div align="center">
        <input name="ward_name_insert" type="text" class="unnamed1" id="namea" size="40">
      </div></td>
      <td><div align="center">
        <input name="Submit" type="submit" class="unnamed1" value="  เพิ่ม  ">
      </div></td>
    </tr>
  </table>
</form>
<? } ?>
<? if($showedit != '') { ?>
  <form name="form2" method="post" action="AdminDepartment.php">
    <table width="300" border="1" align="center" cellpadding="3" cellspacing="0" bordercolor="#FF0000" bordercolordark="#FFFFFF">
      <tr>
        <td><table width="400"  border="0" align="center" cellpadding="0" cellspacing="0">
          <tr class="unnamed1">
            <td class="unnamed2"><div align="center">รหัสหน่วยงาน</div></td>
            <td class="unnamed2"><div align="center">ชื่อหน่วยงาน</div></td>
            <td><div align="center">
                <input name="update" type="hidden" id="update" value="1">
            </div></td>
          </tr>
          <tr class="unnamed1">
            <td class="unnamed2"><div align="center">          
			
			 <?
	
	$sql="select * from code_complaint where ward_id ='$showedit'   ";
	//echo"$sql";
$dbquery = mysql_db_query($dbname, $sql);
$num_rows = mysql_num_rows($dbquery);
$i=0;
while ($i < $num_rows)
{
$result = mysql_fetch_array($dbquery);
$ward_id_edit = $result[0];
$ward_edit = $result[1];
$i++;
}
?>
			
			
			      <input name="ward_id_edit_date" type="text" class="unnamed1" id="codeee" value="<? echo"$ward_id_edit"; ?>" size="20">
            </div></td>
            <td class="unnamed2">
                <input name="ward_edit_date" type="text" class="unnamed1" id="nameee" value="<? echo"$ward_edit"; ?>" size="40">
            </td>
            <td><div align="center">
                <input name="Submit" type="submit" class="unnamed1" value="แก้ไข">
            </div></td>
          </tr>
        </table></td>
      </tr>
    </table>
  </form>
  <? } ?>
  <table width="500"  border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#999999" bordercolordark="#FFFFFF">
  <tr bgcolor="#799AE1" class="unnamed1">
    
    <td><div align="center">รหัสหน่วยงาน</div></td>
    <td class="unnamed1"><div align="center">ชื่อหน่วยงาน</div></td>
    <td class="unnamed2"><div align="center">แก้ไข</div></td>
    <td class="unnamed2"><div align="center">ลบ</div></td>
  </tr>

  <?
	
	$sql="select * from code_complaint order by ward_id   ";
	//echo"$sql";
$dbquery = mysql_db_query($dbname, $sql);
$num_rows = mysql_num_rows($dbquery);
$i=0;
while ($i < $num_rows)
{
$result = mysql_fetch_array($dbquery);
$id = $result[0];
$name = $result[1];
$order  = $i+1;
?>
  <tr class="unnamed1">

    <td><div align="center"><? echo"$id"; ?></div></td>
    <td class="unnamed2">
      <div align="left">&nbsp;<? echo"$name"; ?></div></td>
    <td><div align="center"><? echo"<A HREF='AdminDepartment.php?showedit=$id'>
  <img src=./images/edit.png></a>"; ?></div></td>
    <td><div align="center"><? echo"<A HREF='AdminDepartment.php?del=$id' onclick=\" return confirm('ยืนยันลบข้อมูลระบบความเสี่ยง $name ออกจากระบบ')\">
  <img src=./images/delete.png></a>"; ?>&nbsp;</div></td>
  </tr>
  <?
  $i++;
}
?>
</table>
<br>


</html>
