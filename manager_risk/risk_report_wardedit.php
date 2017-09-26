<?
session_start();
include('../level/manager.php');
$startdate=$_POST[startdate];
$enddate=$_POST[enddate];
$ward_id=$_POST[ward_id];
include "risk_db_job_line_wardedit.php"; 
include "../function/connect.php";
mysql_query("set NAMES tis620");
$sql="SELECT cr.ward,count(cr.ward_id) as count_wardedit_id,r.wardedit_id 
FROM
register_risk r
left outer join proriskdetail pd on pd.id=r.prorisk_detail_id
left outer join pro_risk pr on pr.pro_risk_id=pd.pro_risk_id
left outer join clinic_risk c on c.clinic_id = r.clinic_id
left outer join code_complaint cm on cm.ward_id= r.ward_id
left outer join code_complaint cr on cr.ward_id= r.wardedit_id
left outer join tracking_code_fix f on f.follow_id=r.follow_id
left outer join tb_member p on p.id=r.person_id
left outer join review rw on rw.review_id = r.review_id
left outer join system sy on sy.system_id = r.system_id
left outer join reborn rb on rb.reborn_id = r.reborn_id
left outer join source_code sc on sc.source_code_id = r.source_code_id
where r.`date` between '$startdate'and'$enddate'  and cr.ward_id <> '0' group by cr.ward_id
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
	//include "admin_menu.php"; 

	if ($number<>0) {
	echo "

	 <table align='center' border='1' width='300' cellpadding='0' cellspacing='0'>
		<TR BGCOLOR=#E8E8E8> 
               
<td width=200 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>หน่วยงานรายงาน</B></CENTER></font></td>
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
                    
  
$wardedit_name=$rs[ward];
$count_wardedit_id=$rs[count_wardedit_id];
$wardedit_id=$rs[wardedit_id];



		echo "
			<tr bgcolor=$bg>

<td width=200 align=center><font size=2 face=Tahoma, MS Sans Serif><A HREF=\"wardedit_report.php?wardedit_id=$wardedit_id&startdate=$startdate&enddate=$enddate\">$wardedit_name</A></td>

<td width=100 align=left><font size=2 face=Tahoma, MS Sans Serif>$count_wardedit_id</td>
              
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