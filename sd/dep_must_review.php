<?php
ob_start();
session_start();
?>
<?php include "../level/dep.php"; ?>
<?php
@$startdate = $_POST['startdate'];
@$enddate = $_POST['enddate'];
$codedepart = $_SESSION['codedepart'];

include "../function/connect.php";
$sql = "SELECT r.id,r.date as risk_date,pr.pro_risk_name,pd.prorisk_detail_name,prorisk_sub_detail_name,c.clinic_name,r.severity
,r.detail_prob,r.numlevel,cm.ward as ward,cr.ward as wardedit_name,r.method,f.follow_name,p.namedepart as person_name,rw.review_name,sc.source_code_name
,sy.system_name ,rb.reborn_name
FROM
register_risk r
left outer join proriskdetail pd on pd.id=r.prorisk_detail_id
left outer join pro_risk pr on pr.pro_risk_id=pd.pro_risk_id
left outer join prorisk_sub_detail ps on ps.id=r.prorisk_sub_detail_id
left outer join clinic_risk c on c.clinic_id = r.clinic_id
left outer join code_complaint cm on cm.ward_id= r.ward_id
left outer join code_complaint cr on cr.ward_id= r.wardedit_id
left outer join tracking_code_fix f on f.follow_id=r.follow_id
left outer join pd_depart p on p.id=r.person_id
left outer join review rw on rw.review_id = r.review_id
left outer join system sy on sy.system_id = r.system_id
left outer join reborn rb on rb.reborn_id = r.reborn_id
left outer join source_code sc on sc.source_code_id = r.source_code_id
where  r.wardedit_id = '$codedepart' and r.wardedit_id is not null and r.follow_id !='1' ";
$result = mysql_db_query($dbname, $sql);
$number = mysql_num_rows($result);
$no = 1;
?>
<?php include "../level/check_data.php"; ?>


<HTML>
    <HEAD><TITLE>:: โปรแกรมความเสี่ยง ::</TITLE>
        <link href="../css/bootstrap.css" rel="stylesheet">
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    </HEAD>
    <BODY>
        <div class="page-header">
<?php include('../function/user_detail.php'); ?>
        <FONT SIZE="3" COLOR="#009900">เข้าระบบโดย <?php echo $yourname ?> แผนก <?php echo $yourdep ?> สังกัดทีม <?php echo $yourdep_sec ?></FONT>

    <center><a href="./dep_must_review_print.php?dep=<?php echo $codedepart ?>&enddate=<?php echo $enddate ?>&startdate=<?php echo $startdate ?>" target='blank'><img src="../img/excel.jpg" width="30" height="30" border="0" alt="Print"><font size="6" color="#99cc00">Excel Export</font></a></center>

</div>



    <P><strong>แสดงรายการความเสี่ยง ที่หน่วยงานถูกรายงานเพื่อให้แก้ไข </strong></P>
    <div class="row">
        <div class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
            <table class="table table-hover" align='center' border='1' width='1080' cellpadding='0' cellspacing='0'>
                <TR BGCOLOR=#99FFCC> 
                    <td width=50 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>ลำดับ</B></CENTER></font></td>
                <td width=100 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>วันที่แจ้ง</B></CENTER></font></td>
                <td width=100 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>โปรแกรมความเสี่ยง </B></CENTER></font></td>
                <td width=100 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>รายละเอียดโปรแกรม</B></CENTER></font></td>
                <td width=50 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>ความเสี่ยงด้าน</B></CENTER></font></td>
                <td width=50 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>ระดับความรุนแรง</B></CENTER></font></td>
                <td width=200 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>รายละเอียดของปัญหา</B></CENTER></font></td>
                <td width=50 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>จำนวนครั้ง</B></CENTER></font></td>
                <td width=50 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>ระบบ</B></CENTER></font></td>
                <td width=50 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>ทบทวน</B></CENTER></font></td>
                <td width=50 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>การเกิด</B></CENTER></font></td>
                <td width=50 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>ที่มา</B></CENTER></font></td>
                <td width=50 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>หน่วยงานรายงาน</B></CENTER></font></td>
                <td BGCOLOR=#FF3399 width=50 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>แผนกที่เกิดความเสี่ยง</B></CENTER></font></td>
                <td width=200 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>วิธีแก้ปัญหา</B></CENTER></font></td>
                <td width=50 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>ลักษณะการติดตาม</B></CENTER></font></td>
                <td width=100 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>ชื่อผู้รายงาน</B></CENTER></font></td>
                <td width=50 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>[แก้ไขความเสี่ยง]</B></CENTER></font></td>





                </TR> 
<?php
$bg='';
while ($rs = mysql_fetch_array($result)) {

    if ($bg == "#CCFFFF") { //color
        $bg = "#FFFFCC";
    } else {
        $bg = "#CCFFFF";
    } //color
    $id = $rs['id'];
    $date = $rs['risk_date'];
    $pro_risk_name = $rs['pro_risk_name'];
    $prorisk_detail_name = $rs['prorisk_detail_name'];
    $clinic_name = $rs['clinic_name'];
    $severity = $rs['severity'];
    $detail_prob = $rs['detail_prob'];
    $numlevel = $rs['numlevel'];
    $ward = $rs['ward'];
    $wardedit_name = $rs['wardedit_name'];
    $method = $rs['method'];
    $follow_name = $rs['follow_name'];
    $person_name = $rs['person_name'];
    $review_name = $rs['review_name'];
    $system_name = $rs['system_name'];
    $reborn_name = $rs['reborn_name'];
    $source_code_name = $rs['source_code_name'];


    echo "
			<tr bgcolor=$bg>
<td width=50 align=center><font size=2 face=Tahoma, MS Sans Serif>$id</td>
<td width=100 align=center><font size=2 face=Tahoma, MS Sans Serif>$date</td>
<td width=100 align=center><font size=2 face=Tahoma, MS Sans Serif>$pro_risk_name</td>
<td width=100 align=center><font size=2 face=Tahoma, MS Sans Serif>$prorisk_detail_name</td>
<td width=50 align=left><font size=2 face=Tahoma, MS Sans Serif>$clinic_name</td>
<td width=50 align=left><font size=2 face=Tahoma, MS Sans Serif>$severity</td>             
<td width=200 align=left><font size=2 face=Tahoma, MS Sans Serif>$detail_prob</td>
<td width=50 align=left><font size=2 face=Tahoma, MS Sans Serif>$numlevel</td>
<td width=50 align=left><font size=2 face=Tahoma, MS Sans Serif>$system_name</td>
<td width=50 align=left><font size=2 face=Tahoma, MS Sans Serif>$review_name</td>
<td width=50 align=left><font size=2 face=Tahoma, MS Sans Serif>$reborn_name</td>
<td width=50 align=left><font size=2 face=Tahoma, MS Sans Serif>$source_code_name</td>
<td width=50 align=left><font size=2 face=Tahoma, MS Sans Serif>$ward</td>
<td width=50 align=left><font size=2 face=Tahoma, MS Sans Serif>$wardedit_name</td>
<td width=200 align=left><font size=2 face=Tahoma, MS Sans Serif>$method</td>
<td width=100 align=left><font size=2 face=Tahoma, MS Sans Serif>$follow_name</td>
<td width=100 align=left><font size=2 face=Tahoma, MS Sans Serif>$person_name</td>
<td width=50 align=center><font size=2 face=Tahoma, MS Sans Serif><A HREF=\"risk_edit.php?id=$id\">[แก้ไขความเสี่ยง]</A></td>

			</TR>
		</TR>";
    $no++;
}
echo "</TABLE>";

mysql_close();
?>
        </div></div>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</BODY>
</HTML>