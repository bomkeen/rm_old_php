<?session_start();
?>

<?

if($_SESSION["level"]<5)
{	
?>
	<SCRIPT language="JavaScript">
	alert("ท่านไม่มีสิทธิใช้งาน Page นี้");
	location.href='login.php';
	</SCRIPT> 
<?	
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<link rel="stylesheet" href="css/form.css" type="text/css"/>
<BR><BR>

<script language="javascript">
function ck()
{
	if(document.user.name.value == "")
	{
		alert('ใส่ชื่อด้วยพี่');
		document.user.name.focus();
		return false;
	}	
	if(document.user.user.value == "")
	{
		alert('ใส่ User ด้วยน้อง');
		document.user.user.focus();		
		return false;
	}
	if(document.user.dep_main.value == "")
	{
		alert('ใส่ Pass ด้วยจ่ะ');
		document.user.dep_main.focus();		
		return false;
	}
	if(document.user.level.value == "")
	{
		alert('ใส่ Pass ด้วยจ่ะ');
		//document.user.dep_main.focus();		
		return false;
	}
		document.user.submit();
}
</script>
<?include ("./function/connect.php");?>
<form name="user" action="user_add_s.php" method="post" class="basic-grey"  onsubmit="javascript:return ck();">
    <h1>แก้ไขข้อมูลผู้ใช้งานระบบ
        <span>Please fill all the texts in the fields.</span>
    </h1>
	<label><span>Name</span><INPUT TYPE="text" NAME="name" value=""> </label>
	<label><span>Username</span><INPUT TYPE="text" NAME="user" value=""> </label>
	<label><span>Username</span><INPUT TYPE="text" NAME="pass" value=""> </label>
	แผนกหลัก<BR>
	<select  name="dep_main"   >
			<option value="">---เลือกแผนก---</option>
			<?
			include('./function/connect.php');
			$strSQL = "SELECT * FROM code_complaint";
			$objQuery = mysql_query($strSQL);
			while($objResuut = mysql_fetch_array($objQuery))
			{
			?>
			<option value="<?=$objResuut[0];?>"> <?=$objResuut[1];?> </option>
			<?
			}
			?>
	  </select><BR>
	  แผนกรองหรือทีมหน่วยงาน
	<select  name="dep_sec"   >
			<option value="0">---เลือกทีม---</option>
			
			<?
			include('./function/connect.php');
			$strSQL = "SELECT * FROM code_complaint";
			$objQuery = mysql_query($strSQL);
			while($objResuut = mysql_fetch_array($objQuery))
			{
			?>
			<option value="<?=$objResuut[0];?>"> <?=$objResuut[1];?> </option>
			<?
			}
			?>
	  </select>
	  <BR>
	  ระดับการใช้งาน
	<select  name="user_level"   >
			<option value="">---ระดับการใช้งาน---</option>
			<?
			include('./function/connect.php');
			$strSQL = "SELECT * FROM level";
			$objQuery = mysql_query($strSQL);
			while($objResuut = mysql_fetch_array($objQuery))
			{
			?>
			<option value="<?=$objResuut[0];?>"> <?=$objResuut[1];?> </option>
			<?
			}
			?>
	  </select>
	  <INPUT TYPE="hidden" NAME="id" value="<?=$id;?>">
	<label>
        <span>&nbsp;</span> 
        <input type="submit" class="button" value="Submit" /> 
    </label>    
</form>

<CENTER><IMG SRC="img/logo.gif" WIDTH="150" HEIGHT="110" BORDER="0" ALT=""></CENTER>