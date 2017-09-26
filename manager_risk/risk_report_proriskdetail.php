<?
session_start();
include('../level/manager.php');
$startdate = $_GET[startdate];
$enddate = $_GET[enddate];
$pro_risk_id = $_GET[pro_risk_id];

        include "risk_db_job_line_pro.php";
include "../function/connect.php";
mysql_query("set NAMES tis620");
$sql = "SELECT pd.prorisk_detail_name,count(pd.prorisk_detail_id) as count_prorisk_detail_id,pd.id as prorisk_detail_subid
FROM register_risk r
left outer join proriskdetail pd on pd.prorisk_detail_id=r.prorisk_detail_id
left outer join tb_member p on p.id=r.person_id
where r.`date` between '$startdate'and'$enddate' and pd.pro_risk_id = $pro_risk_id   group by pd.prorisk_detail_id
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
    //    include "risk_db_job_line_pro.php";
//	include "admin_menu.php"; 
//  include "risk_db_job_index.php"; 

        if ($number <> 0) {
            echo "
	
	 <table align='center' border='1' width='200' cellpadding='0' cellspacing='0'>
		<TR BGCOLOR=#E8E8E8> 
               

<td width=500 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>ความรุนแรง</B></CENTER></font></td>
<td width=100 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>จำนวน</B></CENTER></font></td>




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


                $prorisk_detail_name = $rs[prorisk_detail_name];
                $count_prorisk_detail_id = $rs[count_prorisk_detail_id];
                $prorisk_detail_id=$rs[prorisk_detail_subid];



                echo "
			<tr bgcolor=$bg>

<td width=500 align=left><font size=2 face=Tahoma, MS Sans Serif><font size=2 face=Tahoma, MS Sans Serif><A HREF=\"risk_report_prorisk_sub_detail.php?prorisk_detail_id=$prorisk_detail_id&startdate=$startdate&enddate=$enddate\">$prorisk_detail_name</A></td>
<td width=100 align=left><font size=2 face=Tahoma, MS Sans Serif><center>$count_prorisk_detail_id</center></td>
             


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