<?
session_start();
//include "risk_db_job_index.php"; 
$startdate=$_POST[startdate];
$enddate=$_POST[enddate];
$clinic_id=$_POST[clinic_id];
	
  include "risk_db_job_index.php"; 
include "../function/connect.php";
mysql_query("set NAMES tis620");
$sql="SELECT c.clinic_name,count(c.clinic_id) as count_clinic,r.clinic_id
FROM
register_risk r
left outer join clinic_risk c on c.clinic_id = r.clinic_id
left outer join tb_member p on p.id=r.person_id
where r.`date` between '$startdate' and '$enddate'   and r.clinic_id <> 0 
and r.severity in ('E','F','G','H','I','3','4') group by c.clinic_id
";
$result=mysql_db_query($dbname,$sql);
$number=mysql_num_rows($result);
$no=1;
?>
<HTML>
<HEAD><TITLE>::  โปรแกรมความเสี่ยง  ::</TITLE>
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
                    
$clinic_id=$rs[clinic_id];
$clinic_name=$rs[clinic_name]; 
$count_clinic=$rs[count_clinic];      



		echo "
			<tr bgcolor=$bg>
<td width=300 align=center><font size=2 face=Tahoma, MS Sans Serif><A HREF=\"risk_report_severity.php?clinic_id=$clinic_id&startdate=$startdate&enddate=$enddate\">$clinic_name</A></td>

<td width=100 align=left><font size=2 face=Tahoma, MS Sans Serif><center>$count_clinic</center></td>
             


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
