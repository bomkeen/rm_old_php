<?
session_start();
$startdate = $_POST[startdate];
$enddate = $_POST[enddate];

include "risk_db_job_risk_pro.php";
include "../function/connect.php";
mysql_query("set NAMES tis620");
$sql = "SELECT pr.pro_risk_name,count(pr.pro_risk_id) as count_pro_risk,pr.pro_risk_id
FROM
register_risk r
left outer join pro_risk pr on pr.pro_risk_id=r.pro_risk_id
left outer join tb_member p on p.id=r.person_id
where r.`date` between '$startdate'and'$enddate' and pr.pro_risk_id <> 0 group by pr.pro_risk_id
";
$result = mysql_db_query($dbname, $sql);
$number = mysql_num_rows($result);
$no = 1;
?>
<HTML>
    <HEAD><TITLE>:: โปรแกรมความเสี่ยง ::</TITLE>
    </HEAD>
    <BODY>


        <?
        //include "admin_menu.php"; 
        //   include "risk_db_job_risk_pro.php";

        if ($number <> 0) {
            echo "
	
	 <table align='center' border='1' width='300' cellpadding='0' cellspacing='0'>
		<TR BGCOLOR=#E8E8E8> 
               
                <td width=200 align=center><font size=2 face=Tahoma, MS Sans Serif><B>โปรแกรมความเสี่ยง </B></font></td>
<td width=100 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>จำนวน</B></CENTER></font></td>
<td width=100 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>รายงาน</B></CENTER></font></td>




		</TR> ";

            while ($rs = mysql_fetch_array($result)) {

                if ($bg == "#FFFF99") { //color
                    $bg = "#CCFFFF";
                } else {
                    $bg = "#FFFF99";
                } //color
                //color
                //   
//p.name as person_name

                $id = $rs[id];
                $date = $rs[date];
                $pro_risk_name = $rs[pro_risk_name];
                $count_pro_risk = $rs[count_pro_risk];
                $pro_risk_id = $rs[pro_risk_id];


                echo "

			<tr bgcolor=$bg>
                <td width=300 align=left><font size=2 face=Tahoma, MS Sans Serif><A HREF=\"risk_report_proriskdetail.php?pro_risk_id=$pro_risk_id&startdate=$startdate&enddate=$enddate\">$pro_risk_name</A></td>
 <td width=100 align=center><font size=2 face=Tahoma, MS Sans Serif>$count_pro_risk</td>
<td width=100 align=center><font size=2 face=Tahoma, MS Sans Serif><A HREF=\"risk_report_pro_main.php?pro_risk_id=$pro_risk_id&startdate=$startdate&enddate=$enddate\">รายงาน</A></td>

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