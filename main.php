<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<HTML>
<HEAD>
    
<TITLE>ระบบบริหารความเสี่ยง</TITLE>
<meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″ />
<?php 
$nameweb=$_SESSION['nameweb'];
$codedepart=$_SESSION['codedepart'];
?>
<?php if($_SESSION['nameweb']==''){ ?>
<SCRIPT language="JavaScript">
	alert("กรุณา Login ก่อนการใช้งาน page นี้");
location.href='index.php';
</SCRIPT>
<?php } ?>



</HEAD>

<?php if($nameweb!=''){ ?>

<?php
include "function/connect.php";

$rs = mysql_query("SELECT COUNT(*) as n FROM register_risk WHERE method LIKE '' and wardedit_id='$codedepart'" ) or die ('Error query: ' . mysql_error());;
$data=mysql_fetch_array($rs);

?>	

<SCRIPT language="JavaScript">
	alert(" ****สวัสดีครับ <?php echo $nameweb;?> แผนกของคุณมีความเสี่ยงที่ไม่ได้รับการแก้ไข <?php echo $data[0];?> รายการ******");
</SCRIPT>
<?php } ?>

<FRAMESET ROWS="300" COLS="15%,80%" frameborder="no">
	<FRAME SRC="menu.php" NAME="leftframe">
	<FRAME SRC="body.php" NAME="center">
</FRAMESET>

<BODY>

</HTML>

