<?

session_start();
ob_start();
include('../level/manager.php');

include "../function/connect.php";
$id = $_GET[id];
//$id=$_POST[id];

$bg = "#99CCFF";
$bgm = "#dddddd";

$sql = "SELECT r.id,r.`date`,pr.pro_risk_name,pr.pro_risk_id,pd.prorisk_detail_name,ps.prorisk_sub_detail_name,pd.prorisk_detail_id,c.clinic_name,c.clinic_id,r.severity
,r.detail_prob,r.numlevel,cm.ward,cm.ward_id,cr.ward as wardedit_name,cr.ward_id as wardedit_id,r.method,f.follow_name,f.follow_id,p.namedepart as person_name ,p.id as iddepart,r.person_id
,s.system_name as system_name,r.system_id
,sc.source_code_id,sc.source_code_name,w.review_id,w.review_name,ri.reborn_id,ri.reborn_name,r.detail_review
,r.reborn_id,r.edit_date,r.reborn_date,person_edit
FROM
register_risk r
left outer join proriskdetail pd on pd.id=r.prorisk_detail_id
left outer join pro_risk pr on pr.pro_risk_id=pd.pro_risk_id
left outer join prorisk_sub_detail ps on ps.id=r.prorisk_sub_detail_id
left outer join clinic_risk c on c.clinic_id = r.clinic_id
left outer join code_complaint cm on cm.ward_id= r.ward_id
left outer join code_complaint cr on cr.ward_id=r.wardedit_id
left outer join tracking_code_fix f on f.follow_id=r.follow_id
left outer join pd_depart  p on p.id=r.person_id
left outer join system s on s.system_id=r.system_id
left outer join source_code sc on sc.source_code_id=r.source_code_id
left outer join review w on w.review_id=r.review_id
left outer join reborn ri on  ri.reborn_id = r.reborn_id
where r.id = $id
";
$result = mysql_db_query($dbname, $sql);
$rs = mysql_fetch_array($result);
$pro_risk_name = $rs[pro_risk_name];
$pro_risk_id = $rs[pro_risk_id];

$date = $rs[date];
//list($year ,$month, $day) = split('[/.-]', $date);
//	echo "Month: $month; Day: $day; Year: $year<br />\n";

$pro_risk_name = $rs[pro_risk_name];
$prorisk_detail_name = $rs[prorisk_detail_name];
$prorisk_detail_id = $rs[prorisk_detail_id];
$prorisk_sub_detail_name = $rs[prorisk_sub_detail_name];
$clinic_name = $rs[clinic_name];
$clinic_id = $rs[clinic_id];
$severity = $rs[severity];
$detail_prob = $rs[detail_prob];
$numlevel = $rs[numlevel];
$ward = $rs[ward];
$ward_id = $rs[ward_id];
$wardedit_name = $rs[wardedit_name];
$wardedit_id = $rs[wardedit_id];
$method = $rs[method];
$follow_name = $rs[follow_name];
$follow_id = $rs[follow_id];
$person_name = $rs[person_name];
$person_id = $rs[person_id];
$system_name = $rs[system_name];
$system_id = $rs[system_id];
$source_code_id = $rs[source_code_id];
$source_code_name = $rs[source_code_name];
$review_id = $rs[review_id];
$review_name = $rs[review_name];
$reborn_id = $rs[reborn_id];
$reborn_name = $rs[reborn_name];
$detail_review = $rs[detail_review];
$reborn_id = $rs[reborn_id];
$edit_date = $rs[edit_date];
$reborn_date = $rs[reborn_date];
$iddepart = $rs[iddepart];
$person_edit = $rs[person_edit];
//echo $date;
//echo $source_code_name;
////
?>
<HTML>
    <HEAD><TITLE>#### สำหรับผู้ดูแลระบบ</TITLE>
	<script type="text/javascript" src="calendarDateInput.js">
</script>
	
	</HEAD>

    <BODY>

        <FORM ACTION="risk_edit2.php" METHOD="post" ENCTYPE="multipart/form-data">

            <TABLE WIDTH="800" BORDER="0" CELLSPACING="1" CELLPADDING="0">
                <TR bgcolor="<?= $bgm ?>"><td>เพิ่มสินค้าใหม่</td><td></td></tr>
                <TR bgcolor="<?= $bg ?>">
                    <TD>โปรแกรมความเสี่ยง</TD>
                    <TD><? echo "$pro_risk_name"; ?></TD>
                </TR> 
                <TR bgcolor="<?= $bg ?>">
                    <TD>หัวข้อความเสี่ยงหลัก</TD>
                    <TD><? echo "$prorisk_detail_name"; ?></TD>
                </TR>
                <TR bgcolor="<?= $bg ?>">
                    <TD>หัวข้อความเสี่ยงย่อย</TD>
                    <TD><? echo "$prorisk_sub_detail_name"; ?></TD>
                </TR> 
                <TR bgcolor="<?= $bg ?>">
                    <TD>ประเภทความเสี่ยง</TD>
                    <TD><? echo "$clinic_name"; ?></TD>
                </TR>
                <TR bgcolor="<?= $bg ?>">
                    <TD>ระดับความรุนแรง</TD>
                    <TD><? echo "$severity"; ?></TD>
                </TR>
                <TR bgcolor="<?= $bg ?>">
                    <TD WIDTH="101">วันที่ได้รับแจ้งความเสี่ยง</TD>
                    <TD>
					
					<INPUT TYPE="text" NAME="date1" SIZE="10" VALUE="<?= $date ?>"> 2010-04-27  เติม ปี ค.ศ - เดือน - วัน  </TD>
                </TR>


                <TR bgcolor="<?= $bg ?>">
                    <TD>ระบบ</TD>
                    <TD>
                        <SELECT NAME="system_id">
                            <OPTION VALUE="0">เลือกระบบ</OPTION>
<?
include "../function/connect.php";
mysql_query("set NAMES tis620");
$sql = "select * from system";
$result = mysql_db_query($dbname, $sql);
while ($rs = mysql_fetch_array($result)) {
    $system_id2 = $rs[system_id];
    $system_name2 = $rs[system_name];

    if ($system_id == $system_id2) {
        echo "<OPTION VALUE='$system_id2' SELECTED>$system_name2</OPTION>";
    } else {
        echo "<OPTION VALUE='$system_id2'>$system_name2</OPTION>";
    }
}
?>
                        </SELECT>
                        *</TD>
                </TR>  

                <TR bgcolor="<?= $bg ?>">
                    <TD>แหล่งที่มา</TD>
                    <TD>
                        <SELECT NAME="source_code_id">
                            <OPTION VALUE="0">เลือกแหล่งที่มา</OPTION>
<?
include "../function/connect.php";
mysql_query("set NAMES tis620");
$sql = "select * from source_code";
$result = mysql_db_query($dbname, $sql);
while ($rs = mysql_fetch_array($result)) {
    $source_code_id2 = $rs[source_code_id];
    $source_code_name2 = $rs[source_code_name];
    if ($source_code_id == $source_code_id2) {
        echo "<OPTION VALUE='$source_code_id2' SELECTED>$source_code_name2</OPTION>";
    } else {
        echo "<OPTION VALUE='$source_code_id2'>$source_code_name2</OPTION>";
    }
}
?>
                        </SELECT>
                        *</TD>
                </TR>

                <TR bgcolor="<?= $bg ?>">
                    <TD>รายละเอียดของปัญหา</TD>
                    <TD><TEXTAREA NAME="detail_prob" COLS="40" ROWS="4"><?= $detail_prob ?></TEXTAREA> * </TD>
                </TR>


                <TR bgcolor="<?= $bg ?>">
                    <TD WIDTH="300">จำนวนครั้ง</TD>
                    <TD><INPUT TYPE="text" NAME="numlevel" SIZE="40" VALUE="<?= $numlevel ?>">* </TD>
                </TR>



                <TR bgcolor="<?= $bg ?>">
                    <TD>หน่วยงานงานรายงาน</TD>
                    <TD>
                        <SELECT NAME="ward_id">
                            <OPTION VALUE="0">หน่วยงานรายงาน</OPTION>
<?
include "../function/connect.php";
mysql_query("set NAMES tis620");
$sql = "select * from code_complaint";
$result = mysql_db_query($dbname, $sql);
while ($rs = mysql_fetch_array($result)) {
    $ward2 = $rs[ward];
    $ward_id2 = $rs[ward_id];

    //echo "<OPTION VALUE='$ward_id'>$ward</OPTION>";
    if ($ward_id == $ward_id2) {
        echo "<OPTION VALUE='$ward_id2' SELECTED>$ward2</OPTION>";
    } else {
        echo "<OPTION VALUE='$ward_id2'>$ward2</OPTION>";
    }
}
?>
                        </SELECT>
                        *</TD>
                </TR>   

                <TR bgcolor="<?= $bg ?>">
                    <TD>จุดที่แก้ไขปัญหา</TD>
                    <TD>
                        <SELECT NAME="wardedit_id">
                            <OPTION VALUE="0">เลือกจุดที่แก้ไขปัญหา</OPTION>
<?
include "../function/connect.php";
mysql_query("set NAMES tis620");
$sql = "select * from code_complaint";
$result = mysql_db_query($dbname, $sql);
while ($rs = mysql_fetch_array($result)) {
    $wardedit_name2 = $rs[ward];
    $wardedit_id2 = $rs[ward_id];

    if ($wardedit_id == $wardedit_id2) {
        echo "<OPTION VALUE='$wardedit_id2' SELECTED>$wardedit_name2</OPTION>";
    } else {
        echo "<OPTION VALUE='$wardedit_id2'>$wardedit_name2</OPTION>";
    }
}
?>
                        </SELECT>
                        *</TD>
                </TR> 
                
                
    
                <TR bgcolor="<?= $bg ?>">
                    <TD>ผู้ที่แก้ไขปัญหา</TD>
                    <TD>
                        <SELECT NAME="person_edit">
                            <OPTION VALUE="0">ผู้ที่แก้ไขปัญหา</OPTION>
<?
include "../function/connect.php";
mysql_query("set NAMES tis620");
$sql = "select * from pd_depart";
$result = mysql_db_query($dbname, $sql);
while ($rs = mysql_fetch_array($result)) {
    $namedepart2 = $rs[namedepart];
    $iddepart2 = $rs[id];

    if ($person_edit == $iddepart2) {
        echo "<OPTION VALUE='$iddepart2' SELECTED>$namedepart2</OPTION>";
    } else {
        echo "<OPTION VALUE='$iddepart2'>$namedepart2</OPTION>";
    }
}
?>
                        </SELECT>
                        *</TD>
                </TR>             
                
                
                
                <TR bgcolor="<?= $bg ?>">
                    <TD WIDTH="101">วันที่แก้ไขบัญหา</TD>
                    <TD><INPUT TYPE="text" NAME="date1" SIZE="10" VALUE="<?= $edit_date ?>"> 2010-04-27  เติม ปี ค.ศ - เดือน - วัน  </TD>
                </TR>


                <TR bgcolor="<?= $bg ?>">               
                    <TD>วิธีแก้ปัญหา</TD>
                    <TD><TEXTAREA NAME="method" COLS="40" ROWS="4"><?= $method ?></TEXTAREA> * </TD>
                </TR>
                <TR bgcolor="<?= $bg ?>">
                    <TD>ทบทวน</TD>
                    <TD>
                        <SELECT NAME="review_id">
                            <OPTION VALUE="0">เลือกการทบทวน</OPTION>
<?
include "../function/connect.php";
mysql_query("set NAMES tis620");
$sql = "select * from review";
$result = mysql_db_query($dbname, $sql);
while ($rs = mysql_fetch_array($result)) {
    $review_id2 = $rs[review_id];
    $review_name2 = $rs[review_name];

    if ($review_name == $review_name2) {
        echo "<OPTION VALUE='$review_id2' SELECTED>$review_name2</OPTION>";
    } else {
        echo "<OPTION VALUE='$review_id2'>$review_name2</OPTION>";
    }
}
?>
                        </SELECT>
                        *</TD>
                </TR>
                <TR bgcolor="<?= $bg ?>">
                    <TD WIDTH="101">วันที่ได้ทบทวน</TD>
                    <TD><INPUT TYPE="text" NAME="date1" SIZE="10" VALUE="<?= $reborn_date ?>"> 2010-04-27  เติม ปี ค.ศ - เดือน - วัน  </TD>
                </TR>

                <TR bgcolor="<?= $bg ?>">
                    <TD>ผลการทบทวน</TD>
                    <TD><TEXTAREA NAME="detail_review" COLS="40" ROWS="4"><?= $detail_review ?></TEXTAREA> * </TD>
                </TR>

                <TR bgcolor="<?= $bg ?>">
                    <TD>ลักษณะการเกิด</TD>
                    <TD>
                        <SELECT NAME="reborn_id">
                            <OPTION VALUE="0">เลือกลักษณะการเกิด</OPTION>
<?
include "../function/connect.php";
mysql_query("set NAMES tis620");
$sql = "select * from reborn";
$result = mysql_db_query($dbname, $sql);
while ($rs = mysql_fetch_array($result)) {
    $reborn_id2 = $rs[reborn_id];
    $reborn_name2 = $rs[reborn_name];

    if ($reborn_id == $reborn_id2) {
        echo "<OPTION VALUE='$reborn_id2' SELECTED>$reborn_name2</OPTION>";
    } else {
        echo "<OPTION VALUE='$reborn_id2'>$reborn_name2</OPTION>";
    }
}
?>
                        </SELECT>
                        *</TD>
                </TR>
                <TR bgcolor="<?= $bg ?>">
                    <TD>ลักษณะการติดตาม</TD>
                    <TD>
                        <SELECT NAME="follow_id">
                            <OPTION VALUE="0">เลือกการติดตาม</OPTION>
<?
include "../function/connect.php";
mysql_query("set NAMES tis620");
$sql = "select * from tracking_code_fix";
$result = mysql_db_query($dbname, $sql);
while ($rs = mysql_fetch_array($result)) {
    $follow_id2 = $rs[follow_id];
    $follow_name2 = $rs[follow_name];

    if ($follow_id == $follow_id2) {
        echo "<OPTION VALUE='$follow_id2' SELECTED>$follow_name2</OPTION>";
    } else {
        echo "<OPTION VALUE='$follow_id2'>$follow_name2</OPTION>";
    }
}
?>
                        </SELECT>
                        *</TD>
                </TR>

                <INPUT NAME="id" TYPE="hidden"  VALUE="<?= $id ?>">
                <TR bgcolor="<?= $bg ?>">
                    <TD>&nbsp;</TD>
                    <TD><INPUT TYPE="submit" NAME="Submit" VALUE="Submit">
                        <INPUT TYPE="reset" NAME="Submit2" VALUE="Reset"></TD>
                <input type="hidden" value="<?= $person_id ?>" name="person_id" />
                <!--  <input type="hidden" value="<?= $ward_id?>" name="ward_id" />  -->

                </TR>
            </TABLE>
        </FORM>

    </BODY>
</HTML>