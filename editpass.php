<?php
session_start();
?>

<?//echo $showedit;
//echo $key;
?>
<?php
include './function/connect.php';
include('./level/manager.php');
?>
<? if($update == '1' ){
$md5passe=md5($passworde);
$sql = "update pd_depart set  passwords='$md5passe' where id='$key' "; 
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
	alert("��س� Login ��͹�����ҹ page ���");
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
    <td bgcolor="#CCCCCC" class=" unnamed1"><strong class="boxtitle1">&nbsp;&nbsp;&nbsp;������ʼ�ҹ</strong></td>
  </tr>
</table>
<br>


<? if($showedit != '') { ?>
<?
	
	$sql="select * from pd_depart where id ='$showedit'   ";
	//echo"$sql";
$dbquery = mysql_db_query($dbname, $sql);
$num_rows = mysql_num_rows($dbquery);
$i=0;
while ($i < $num_rows)
{
$result = mysql_fetch_array($dbquery);
$codee = $result[1];
$namee = $result[2];
$usernamee = $result[3];
//$passworde = $result[4];
//$levele = $result[5];
$i++;
}
?>
 
  <form name="form2" method="post" action="editpass.php">
    <table width="300" border="1" align="center" cellpadding="3" cellspacing="0" bordercolor="#FF0000" bordercolordark="#FFFFFF">
      <tr>
        <td><table width="600"  border="0" align="center" cellpadding="0" cellspacing="0">
          <tr class="unnamed1">
            <td class="unnamed1"><div align="center">����˹��§ҹ</div></td>
            <td class="unnamed1"><div align="center">����˹��§ҹ</div></td>
            <td><div align="center">�������ʼ�ҹ</div></td>
            <td><div align="center">������ʼ�ҹ</div></td>
           
            <td><div align="center">
                <input name="update" type="hidden" id="update" value="1">
				 <input name="key" type="hidden" id="key" value="<?echo "$showedit";?>">
      
          </tr>
          <tr class="unnamed1">
            <td class="unnamed2"><div align="center"><? echo"$codee"; ?>
            </div></td>
            <td class="unnamed2"><div align="center"><? echo"$namee"; ?>
            </div></td>
            <td><div align="center">
              <? echo"$usernamee"; ?>
            </div></td>
            <td><div align="center">
              <input name="passworde" type="text" class="unnamed1" id="passworde" size="10">
            </div></td>

            <td><div align="center">
                <input name="Submit" type="submit" class="unnamed1" value="  ���  ">
            </div></td>
          </tr>
        </table></td>
      </tr>
    </table>
    
	
	<span class="unnamed2">    </span>  
</form>
  
  
  <? } ?>
  <table width="600"  border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#999999" bordercolordark="#FFFFFF">
  <tr bgcolor="#799AE1" class="unnamed1">
    <td><div align="center">�ӴѺ</div></td>
    <td><div align="center">����˹��§ҹ</div></td>
    <td class="unnamed1"><div align="center">����˹��§ҹ</div></td>
    <td class="unnamed2"><div align="center">�������ʼ�ҹ</div></td>
    <td class="unnamed2"><div align="center">���ʼ�ҹ</div></td>
    <td class="unnamed2"><div align="center">�Է�ԡ�����к�</div></td>
    <td class="unnamed2"><div align="center">���</div></td>

  </tr>

 
  
  
  <?
	
	$sql="select * from pd_depart where id = '$showedit' order by  codedepart, level DESC    ";
	//echo"$sql";
$dbquery = mysql_db_query($dbname, $sql);
$num_rows = mysql_num_rows($dbquery);
$i=0;
while ($i < $num_rows)
{
$result = mysql_fetch_array($dbquery);
$id = $result[0];
$codedepart = $result[1];
$namedepart = $result[2];
$usernamedepart  = $result[3];
$passdepart = $result[4];
$leveldepart  = $result[5];
$order = $i+1;
?>
 
  
  
  <tr class="unnamed1">
    <td><div align="center"><span class="unnamed2"><? echo"$order"; ?>
    </span></div></td>
    <td><div align="center"><? echo"$codedepart"; ?></div></td>
    <td class="unnamed2">
      <div align="left">&nbsp;&nbsp;&nbsp;<? echo"$namedepart"; ?></div></td>
    <td>&nbsp;<? echo"$usernamedepart"; ?></td>
    <td>&nbsp;<? echo"$passdepart"; ?></td>
    <td>&nbsp;<?
	if($leveldepart=='1'){$nameleveldepart='<font color="#FF0000">���˹�ҷ��</font>';}
	if($leveldepart=='2'){$nameleveldepart='<font color="#FF0000">���˹��Ἱ�</font>';}
	if($leveldepart=='3'){$nameleveldepart='<font color="#FF0000">�������ä�������§</font>';}
	if($leveldepart=='4'){$nameleveldepart='<font color="#FF0000">����ӹ�¡��</font>';}
	if($leveldepart=='5'){$nameleveldepart='�������к�';}
	
	 echo"$nameleveldepart"; ?></td>
    <td><div align="center"><? echo"<A HREF='editpass.php?showedit=$id'>
  ���</a>"; ?></div></td>

  </tr>
  <?
  $i++;
}
?>
</table>
<br>


</html>
<script>
function nochange() {
alert('���͹حҵ��������¹�ŧ��������ǹ���');
		event.returnValue = false;
} 
</script>