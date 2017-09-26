<?
session_start();
include('../level/manager.php');
//include "risk_db_job_index.php"; 
$startdate=$_POST[startdate];
$enddate=$_POST[enddate];
$clinic_id=$_POST[clinic_id];
 
  include "risk_db_job_review.php"; 
include "../function/connect.php";
mysql_query("set NAMES tis620");
$sql="SELECT count(v.review_id) as count_review_id ,v.review_name,v.review_id
FROM
register_risk r
left outer join review v on v.review_id=r.review_id
left outer join tb_member p on p.id=r.person_id
where r.`date` between '$startdate'and'$enddate'   and v.review_id <> '0' group by v.review_id
";
$result=mysql_db_query($dbname,$sql);
$number=mysql_num_rows($result);
$no=1;
?>
<HTML>
<HEAD><TITLE>:: โปรแกรมครุภัณฑ์โรงพยาบาล ::</TITLE>
</HEAD>
<BODY>

 
<? 
//	include "admin_menu.php"; 
//  include "risk_db_job_index.php"; 

	if ($number<>0) {
	echo "
	
	 <table align='center' border='1' width='400' cellpadding='0' cellspacing='0'>
		<TR BGCOLOR=#E8E8E8> 
               

<td width=200 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>ความเสี่ยงด้าน</B></CENTER></font></td>
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
                    
$review_id=$rs[review_id];
$review_name=$rs[review_name]; 
$count_review_id=$rs[count_review_id];      



		echo "
			<tr bgcolor=$bg>

<td width=200 align=left><font size=2 face=Tahoma, MS Sans Serif>$review_name</td>
<td width=100 align=left><font size=2 face=Tahoma, MS Sans Serif><center>$count_review_id</center></td>
 <td width=100 align=center><font size=2 face=Tahoma, MS Sans Serif><A HREF=\"risk_report_review_main.php?review_id=$review_id&startdate=$startdate&enddate=$enddate\">รายงาน</A></td>             


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