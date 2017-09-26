<?
session_start();
include('../level/manager.php');
//include "risk_db_job_index.php"; 
$startdate=$_POST[startdate];
$enddate=$_POST[enddate];
$clinic_id=$_POST[clinic_id];
  include "risk_db_job_reborn.php"; 
include "../function/connect.php";
mysql_query("set NAMES tis620");
$sql="SELECT b.reborn_name,count(b.reborn_id) as count_reborn_id,b.reborn_id
FROM
register_risk r
left outer join reborn b on b.reborn_id=r.reborn_id
left outer join tb_member p on p.id=r.person_id
where r.`date` between '$startdate'and'$enddate'  and b.reborn_id <> '0'  group by b.reborn_id
";
$result=mysql_db_query($dbname,$sql);
$number=mysql_num_rows($result);
$no=1;
?>
<HTML>
<HEAD><TITLE>:: โปรแกรมความเสี่ยง ::</TITLE>
</HEAD>
<BODY>

 
<? 
//	include "admin_menu.php"; 
//  include "risk_db_job_index.php"; 

	if ($number<>0) {
	echo "
	
	 <table align='center' border='1' width='200' cellpadding='0' cellspacing='0'>
		<TR BGCOLOR=#E8E8E8> 
               

<td width=100 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>ความเสี่ยงด้าน</B></CENTER></font></td>
<td width=100 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>จำนวน</B></CENTER></font></td>
<td width=100 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>รายงาน</B></CENTER></font></td>




		</TR> ";

	while($rs=mysql_fetch_array($result)) {
             if ($bg=="#FFFF99")
                { //color
                    $bg="#CCFFFF";
                }else{
                    $bg="#FFFF99";
                } //color
    //color
 //   
//p.name as person_name
                    
$reborn_id=$rs[reborn_id];
$reborn_name=$rs[reborn_name]; 
$count_reborn_id=$rs[count_reborn_id];      



		echo "
			<tr bgcolor=$bg>

<td width=100 align=left><font size=2 face=Tahoma, MS Sans Serif><center>$reborn_name</center></td>
<td width=100 align=left><font size=2 face=Tahoma, MS Sans Serif><center>$count_reborn_id</center></td>
 <td width=100 align=center><font size=2 face=Tahoma, MS Sans Serif><A HREF=\"risk_report_reborn_main.php?reborn_id=$reborn_id&startdate=$startdate&enddate=$enddate\">รายงาน</A></td>             


			</TR>
		</TR>";
		$no++;
	}
	echo "</TABLE>";	
	mysql_close();
} 
?>

</BODY>
</HTML>