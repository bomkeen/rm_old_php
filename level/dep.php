<?php
if($_SESSION["level"]<2 )
{	
?>
	<SCRIPT language="JavaScript">
	alert("ท่นไม่มีสิทธิใช้งาน Page นี้");
	//location.href='login.php';
	</SCRIPT>
	<META HTTP-EQUIV="REFRESH" CONTENT="0;url=../body.php">
<?php	
}
?>