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
		document.user.submit();
}
</script>
<?include ("./function/connect.php");
$id=$_GET['showedit'];
	$sql = "select pd.*,dep.ward,dep2.ward,l.name from pd_depart AS pd
join code_complaint AS dep ON pd.codedepart=dep.ward_id
LEFT OUTER JOIN code_complaint AS dep2 ON pd.dep_sec=dep2.ward_id
join level AS l ON pd.level=l.id
where pd.id = '".$id."' ";
	//echo $sql;
	$result = mysql_query($sql) or die(mysql_error());
	$rs = mysql_fetch_array($result) 
?>
<form name="user" action="user_edit_s.php" method="post" class="basic-grey"  onsubmit="javascript:return ck();">
    <h1>แก้ไขข้อมูลผู้ใช้งานระบบ
        <span>Please fill all the texts in the fields.</span>
    </h1>
	<label><span>Name</span><INPUT TYPE="text" NAME="name" value="<?echo $rs[2];?>"> </label>
	<label><span>Username</span><INPUT TYPE="text" NAME="user" value="<?echo $rs[3];?>"> </label>
	แผนกหลัก<BR>
	<select  name="dep_main"   >
			<option value="<?echo $rs[1];?>"><?echo $rs[7];?></option>
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
			<option value="<?echo $rs[6];?>"><?echo $rs[8];?></option>
			<option value="0">--ไม่เลือกแผนก--</option>
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
			<option value="<?echo $rs[5];?>"><?echo $rs[9];?></option>
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