<?
session_start();
include('../level/manager.php');
$startdate=$_POST[startdate];
$enddate=$_POST[enddate];
$ward_id=$_POST[ward_id];
include "risk_db_job_line_follow.php"; 
include "../function/connect.php";
mysql_query("set NAMES tis620");
$sql="SELECT f.follow_name,count(f.follow_id) as count_follow_id
FROM
register_risk r
left outer join tracking_code_fix f on f.follow_id=r.follow_id
left outer join tb_member p on p.id=r.person_id
where r.`date` between '$startdate'and'$enddate'  and f.follow_id <> '0' group by f.follow_id
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
                    
  
$follow_name=$rs[follow_name];
$count_follow_id=$rs[count_follow_id];



		echo "
			<tr bgcolor=$bg>

<td width=200 align=left><font size=2 face=Tahoma, MS Sans Serif>$follow_name</td>
<td width=100 align=left><font size=2 face=Tahoma, MS Sans Serif>$count_follow_id</td>
              
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