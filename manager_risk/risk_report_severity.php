<?
session_start();
include ("../level/manager.php");
//include "risk_db_job_index.php"; 
//$d1=$_POST[d1];

//$m1=$_POST[m1];
//$y1=$_POST[y1];
//$yy1=$y1;
//$startdate=$yy1."-".$m1."-".$d1;
//$startdate1=  strtotime("+1 days",$startdate);
//$d2=$_POST[d2];

//$m2=$_POST[m2];
//$y2=$_POST[y2];
//$yy2=$y2;
$startdate=$_GET[startdate];
$enddate=$_GET[enddate];
$clinic_id=$_GET[clinic_id];


if($clinic_id==1){
    $clinic_1 = "('A' ,'B' ,'C' ,'D' ,'E' ,'F' ,'G' ,'H' ,'I')";
}
 elseif ($clinic_id==2){
    $clinic_1 = "('A' ,'B' ,'C' ,'D' ,'E' ,'F' ,'G' ,'H' ,'I')";
}
 elseif ($clinic_id==3){
    $clinic_1 = "('1' ,'2' ,'3')";
}


 
//echo "$startdate";
//echo "$enddate";
//echo "$clinic_id";
  include "risk_db_job_line.php"; 
include "../function/connect.php";
mysql_query("set NAMES tis620");
$sql="SELECT r.severity ,count(r.severity) as count_severity
FROM
register_risk r
left outer join tb_member p on p.id=r.person_id
 where r.`date` between '$startdate'and'$enddate' and r.severity in $clinic_1  
 and r.severity in ('E','F','G','H','I','3','4') 
group by r.severity order by r.severity
";
$result=mysql_db_query($dbname,$sql);
$number=mysql_num_rows($result);
$no=1;
?>
<HTML>
<HEAD><TITLE>:: ���������ѳ���ç��Һ�� ::</TITLE>
</HEAD>
<BODY>

 
<? 
//	include "admin_menu.php"; 
//  include "risk_db_job_index.php"; 

	if ($number<>0) {
	echo "
	
	 <table align='center' border='1' width='200' cellpadding='0' cellspacing='0'>
		<TR BGCOLOR=#E8E8E8> 
               

<td width=100 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>�����ع�ç</B></CENTER></font></td>
<td width=100 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>�ӹǹ</B></CENTER></font></td>
<td width=100 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>��§ҹ</B></CENTER></font></td>




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
                    

$severity=$rs[severity]; 
$count_severity=$rs[count_severity];      



		echo "
		<tr bgcolor=$bg>

<td width=100 align=left><font size=2 face=Tahoma, MS Sans Serif><center>$severity</center></td>
<td width=100 align=left><font size=2 face=Tahoma, MS Sans Serif><center>$count_severity</center></td>
 <td width=100 align=center><font size=2 face=Tahoma, MS Sans Serif><A HREF=\"risk_report_clinic_main.php?clinic_id=$severity&startdate=$startdate&enddate=$enddate\">��§ҹ</A></td>
             


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