<?php
session_start();
@$pro_risk_id = $_POST['pro_risk_id'];
@$prorisk_detail_id = $_POST['prorisk_detail_id'];
@$prorisk_sub_detail_id = $_POST['prorisk_sub_detail_id'];
@$clinic_id = $_POST['clinic_id'];
@$severity = $_POST['severity'];

if(isset($_GET['pro_risk_id'])){
$pro_risk_id2=$_GET['pro_risk_id'];

//echo $pro_risk_id2;

if ($pro_risk_id2 > 1) {
        $pro_risk_id = $pro_risk_id2;
    } else {
        $pro_risk_id = $pro_risk_id;
    }
}
if(isset($_GET['prorisk_detail_id'])){
    $prorisk_detail_id2=$_GET['prorisk_detail_id'];
//echo $prorisk_detail_id2;
if ($prorisk_detail_id2 > 1) {
        $prorisk_detail_id = $prorisk_detail_id2;
    } else {
        $prorisk_detail_id = $prorisk_detail_id;
    }
}
if(isset($_GET['prorisk_sub_detail_id'])){
 $prorisk_sub_detail_id2=$_GET['prorisk_sub_detail_id'];   
//echo $prorisk_sub_detail_id2;
if ($prorisk_detail_id2 > 1) {
        $prorisk_sub_detail_id = $prorisk_sub_detail_id2;
    } else {
        $prorisk_sub_detail_id = $prorisk_sub_detail_id;
    }
}
if(isset($_GET['clinic_id'])){
 $clinic_id2=$_GET['clinic_id'];  
// echo $clinic_id2;
if ($clinic_id2 > 1) {
        $clinic_id = $clinic_id2;
       
    } else {
        $clinic_id = $clinic_id;
    }
}
if(isset($_GET['severity'])){
     $severity2=$_GET['severity'];  
}
//echo $prorisk_sub_detail_id;
$bg = "#E6E6FA";
$bgm = "#BEBEBE";
$bg2 ="#FFE4C4";

?>
<HTML>
    <HEAD><TITLE>โปรแกรมความเสี่ยง</TITLE>
    <meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″ />
<link href="../css/bootstrap.css" rel="stylesheet">
<script src="../js/bootstrap.min.js" type="text/javascript"></script>
    </HEAD>
    <BODY>
        <!--risk_add_level-->
	<div class="page-header">
        <h3>รายงานความเสี่ยง</h3>
       <a href='./risk_add.php?pro_risk_id=<?php echo $pro_risk_id ; ?>'>โปรแกรมหลัก</a>
<<
<a href='./risk_add_main.php?pro_risk_id=<?php echo $pro_risk_id ; ?>&prorisk_detail_id=<?php echo $prorisk_detail_id ; ?>'>โปรแกรมย่อย</a>
<<
<a href='./risk_add_sub.php?pro_risk_id=<?php echo $pro_risk_id ; ?>&prorisk_detail_id=<?php echo $prorisk_detail_id ; ?>&prorisk_sub_detail_id=<?php echo $prorisk_sub_detail_id ; ?>'>รายละเอียดโปรแกรม</a>
<<
<a href='./risk_add_type.php?pro_risk_id=<?php echo $pro_risk_id ; ?>&prorisk_detail_id=<?php echo $prorisk_detail_id ; ?>&prorisk_sub_detail_id=<?php echo $prorisk_sub_detail_id ; ?>&clinic_id=<?php echo $clinic_id ; ?>'>ประเภทของความเสี่ยง</a>
    </div>
        <DIV class="row">
            <div class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
        <FORM ACTION="risk_add2.php" METHOD="post" ENCTYPE="multipart/form-data">
            <TABLE class="table" WIDTH="800" BORDER="0" CELLSPACING="1" CELLPADDING="0">
                <TR bgcolor="<?php echo $bgm ; ?>"><td>เพิ่มโปรแกรมความเสี่ยง</td><td></td><td></td></tr>
                <TR bgcolor="<?php echo $bg ; ?>">
                    <TD>โปรแกรมความเสี่ยง</TD>
                    <TD>

                        <?php
                        include "../function/connect.php";
                        $sql = "select * from pro_risk  where pro_risk_id = $pro_risk_id";
                        $result = mysql_db_query($dbname, $sql);
                        while ($rs = mysql_fetch_array($result)) {
                            $pro_risk_name = $rs['pro_risk_name'];

                            echo "$pro_risk_name";
                        }
                        ?>

                    </TD>
                    <TD></td>
                </TR>

                <TR bgcolor="<?php echo  $bg ; ?>">
                    <TD>หมวด</TD>
                    <TD>

<?php
include "../function/connect.php";
$sql = "select * from proriskdetail 
         where id = '$prorisk_detail_id'";
$result = mysql_db_query($dbname, $sql);
while ($rs = mysql_fetch_array($result)) {
    $prorisk_detail_name = $rs['prorisk_detail_name'];

    echo "$prorisk_detail_name";
}
?>

                    </TD><TD></td>
                </TR>
                <TR bgcolor="<?php echo  $bg ; ?>">
                    <TD>รายละเอียดหมวด</TD>
                    <TD>

<?php
include "../function/connect.php";
$sql = "select * from prorisk_sub_detail
         where id='$prorisk_sub_detail_id'";
$result = mysql_db_query($dbname, $sql);
while ($rs = mysql_fetch_array($result)) {
    $prorisk_sub_detail_name = $rs['prorisk_sub_detail_name'];
    echo "$prorisk_sub_detail_name";
}
?>

                    </TD><TD></td>
                </TR>
                <TR bgcolor="<?php echo $bg ; ?>">
                    <TD>ประเภทความเสี่ยง</TD>
                    <TD>

<?php
include "../function/connect.php";
$sql = "select * from clinic_risk
         where clinic_id='$clinic_id' 

         ";
$result = mysql_db_query($dbname, $sql);
while ($rs = mysql_fetch_array($result)) {
    $clinic_name = $rs['clinic_name'];
    $clinic_id = $rs['clinic_id'];
    echo $clinic_name;
}
?>

                    </TD><TD></td>
                </TR>
                <TR bgcolor="<?php echo $bg2 ; ?>">
                    <TD>ระดับความรุนแรง</TD>
                    <TD>
                        <SELECT NAME="severity">
                            <OPTION VALUE="0">เลือกระดับความรุนแรง</OPTION>
<?php
include "../function/connect.php";
$sql = "select * from severity where clinic_id = '$clinic_id' order by severity_text";
$result = mysql_db_query($dbname, $sql);
while ($rs = mysql_fetch_array($result)) {
    $severity_text = $rs['severity_text'];

   // echo "<OPTION VALUE='$severity_text'>$severity_text</OPTION>";
     if ($severity_text == $severity2) {
        echo "<OPTION VALUE='$severity_text' SELECTED>$severity_text</OPTION>";
    } else {
        echo "<OPTION VALUE='$severity_text'>$severity_text</OPTION>";
    }
}
?>
                        </SELECT>
                    </TD>
                    <TD><INPUT TYPE="submit" NAME="Submit" VALUE="เลือกข้อมูล"></TD>
                <input type="hidden" value="<?php echo $pro_risk_id ; ?>" name="pro_risk_id" />
                <input type="hidden" value="<?php echo $prorisk_detail_id ; ?>" name="prorisk_detail_id" />
                <input type="hidden" value="<?php echo $prorisk_sub_detail_id ; ?>" name="prorisk_sub_detail_id" />
                <input type="hidden" value="<?php echo $clinic_id ; ?>" name="clinic_id" />
                </TR>
            </TABLE>
        </FORM>
            </DIV>
        </div>
        
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
        <?php



if($clinic_id <= 2) echo "

            	<P><strong>แสดงระดับความเสี่ยงทางด้านคลินิก</strong></P>
	 <table  border='1' width='800' cellpadding='0' cellspacing='0'>
		<TR BGCOLOR=#DCDCDC> 
                <td width=100 align=left><font size=2 face=Tahoma, MS Sans Serif><left<B>ระดับความเสี่ยง</B></CENTER></font></td>
                <td width=300 align=left><font size=2 face=Tahoma, MS Sans Serif><left><B>ความหมาย </B></CENTER></font></td>
		</TR>
                
                		<TR BGCOLOR=#F8F8FF> 
                <td width=100 align=left><font size=2 face=Tahoma, MS Sans Serif><left><B>ระดับ A</B></left></font></td>
                <td width=300 align=left><font size=2 face=Tahoma, MS Sans Serif><left><B>เหตุการณ์ซึ่งมีโอกาสก่อให้เกิดความคลาดเคลื่อน </B></left></font></td>
		</TR>
                
                		<TR BGCOLOR=#FFF0F5> 
                <td width=100 align=left><font size=2 face=Tahoma, MS Sans Serif><left><B>ระดับ B</B></left></font></td>
                <td width=300 align=left><font size=2 face=Tahoma, MS Sans Serif><left><B>เกิดความคลาดเคลื่อนขึ้นแต่ยังไม่กึงกับผู้ป่วย </B></left></font></td>
		</TR>
                
                                		<TR BGCOLOR=#F8F8FF> 
                <td width=100 align=left><font size=2 face=Tahoma, MS Sans Serif><left><B>ระดับ C</B></left></font></td>
                <td width=300 align=left><font size=2 face=Tahoma, MS Sans Serif><left><B>เกิดความคลาดเคลื่อนกับผู้ป่วยแต่ไม่ทำให้ผู้ป่วยได้รับอันตราย </B></left></font></td>
		</TR>
                                		<TR BGCOLOR=#FFF0F5> 
                <td width=100 align=left><font size=2 face=Tahoma, MS Sans Serif><left><B>ระดับ D</B></left></font></td>
                <td width=300 align=left><font size=2 face=Tahoma, MS Sans Serif><left><B>เกิดความคลาดเคลื่อนกับผู้ป่วย ส่งผลให้ต้องเฝ้าระวังต่อ </B></left></font></td>
		</TR>
                
                		<TR BGCOLOR=#F8F8FF> 
                <td width=100 align=left><font size=2 face=Tahoma, MS Sans Serif><left><B>ระดับ E</B></left></font></td>
                <td width=300 align=left><font size=2 face=Tahoma, MS Sans Serif><left><B>เกิดความคลาดเคลื่อนกับผู้ป่วย ส่งผลให้เกิดอันตรายชั่วคราวและต้องมีการบำบัดรักษา </B></left></font></td>
		</TR>
                
                                		<TR BGCOLOR=#FFF0F5> 
                <td width=100 align=left><font size=2 face=Tahoma, MS Sans Serif><left><B>ระดับ F</B></left></font></td>
                <td width=300 align=left><font size=2 face=Tahoma, MS Sans Serif><left><B>เกิดความคลาดเคลื่อนกับผู้ป่วย ส่งผลให้เกิดอันตรายชั่วคราวและต้องนอนโรงพยาบาลหรือนอนนานขึ้น </B></left></font></td>
		</TR>
                                		<TR BGCOLOR=#F8F8FF> 
                <td width=100 align=left><font size=2 face=Tahoma, MS Sans Serif><left><B>ระดับ G</B></left></font></td>
                <td width=300 align=left><font size=2 face=Tahoma, MS Sans Serif><left><B>เกิดความคลาดเคลื่อนกับผู้ป่วย ส่งผลให้เกิดอันตรายถาวรแก่ผู้ป่วย ให้จำว่าต้องพิการ </B></left></font></td>
		</TR>
                
                		<TR BGCOLOR=#FFF0F5> 
                <td width=100 align=left><font size=2 face=Tahoma, MS Sans Serif><left><B>ระดับ H</B></left></font></td>
                <td width=300 align=left><font size=2 face=Tahoma, MS Sans Serif><left><B>เกิดความคลาดเคลื่อนกับผู้ป่วย ส่งผลให้ต้องทำการช่วยชีวิต </B></left></font></td>
		</TR>
                
                                		<TR BGCOLOR=#F8F8FF> 
                <td width=100 align=left><font size=2 face=Tahoma, MS Sans Serif><left><B>ระดับ I</B></left></font></td>
                <td width=300 align=left><font size=2 face=Tahoma, MS Sans Serif><left><B>เกิดความคลาดเคลื่อนกับผู้ป่วยซึ่งอาจเป็นสาเหตุของการเสียชีวิต </B></left></font></td>
		</TR>
                
                
                </table>";
                        
                        else  echo "

            	<P><strong>แสดงระดับความเสี่ยงทั่วไป</strong></P>
	 <table  border='1' width='800' cellpadding='0' cellspacing='0'>
		<TR BGCOLOR=#DCDCDC> 
                <td width=100 align=left><font size=2 face=Tahoma, MS Sans Serif><left<B>ระดับความเสี่ยง</B></CENTER></font></td>
                <td width=300 align=left><font size=2 face=Tahoma, MS Sans Serif><left><B>ความหมาย </B></CENTER></font></td>
		</TR>
                
                		<TR BGCOLOR=#F8F8FF> 
                <td width=100 align=left><font size=2 face=Tahoma, MS Sans Serif><left><B>ระดับ 1</B></left></font></td>
                <td width=300 align=left><font size=2 face=Tahoma, MS Sans Serif><left><B>เป็นเหตุการที่ยังไม่เกิดแต่มีโอกาศเกิดและยังไม่ส่งผลกระทบต่อผู้รับบริการหรือองค์กร </B></left></font></td>
		</TR>
                
                		<TR BGCOLOR=#FFF0F5> 
                <td width=100 align=left><font size=2 face=Tahoma, MS Sans Serif><left><B>ระดับ 2</B></left></font></td>
                <td width=300 align=left><font size=2 face=Tahoma, MS Sans Serif><left><B>เป็นเหตุการณ์ที่เกิดขึ้นแล้วแต่ผู้รับบริการหรือองค์การไม่ได้รับอันตรายหรือได้รับความเสียหาย </B></left></font></td>
		</TR>
                
                                		<TR BGCOLOR=#F8F8FF>
                <td width=100 align=left><font size=2 face=Tahoma, MS Sans Serif><left><B>ระดับ 3</B></left></font></td>
                <td width=300 align=left><font size=2 face=Tahoma, MS Sans Serif><left><B>เป็นเหตุการณื ที่เกิดขึ้นกับผู้รับบริการหรือองกรณ์แล้วทำให้ เกิดอันตรายชั่วคราวหรือเกิดความเสียหายตั้งแต่ 1,000 บาท ถึง 10,000 บาท </B></left></font></td>
		</TR>
                                		<TR BGCOLOR=#FFF0F5> 
                <td width=100 align=left><font size=2 face=Tahoma, MS Sans Serif><left><B>ระดับ 4</B></left></font></td>
                <td width=300 align=left><font size=2 face=Tahoma, MS Sans Serif><left><B>เป็นเหตุการที่เกิดขึ้นกับบุคคลและองค์กรแล้วส่งผลให้เกิดอันตราย หรือพิการถาวรแก่บุคคล หรือเกิดอันตรายต่องค์กร มูลค่าความเสียหายตั่งแต่ 10,0001 ถึง 50,000 บาท</B></left></font></td>
		</TR>
										
										<TR BGCOLOR=#FFF0F5> 
                <td width=100 align=left><font size=2 face=Tahoma, MS Sans Serif><left><B>ระดับ 5</B></left></font></td>
                <td width=300 align=left><font size=2 face=Tahoma, MS Sans Serif><left><B>เป็นเหตุการณ์ที่เกิดขึ้นแล้วส่งผลกระทบให้เกิดอันตราย / ความเสียหายกับผู้รับบริการหรือองค์กร ส่งผลกระทบต่อความน่าเชื่อถือ /ภาพลักณ์/ชื่อเสียง/ทรัพย์สินและเกิดการฟ้องร้องต่อองค์กรณ์หรือมูลค่าความเสียหายตั่งแต่ 50,001 ขึ้นไป</B></left></font></td>
		</TR>
        
                </table>"
                ?>
                
            </DIV>
        </DIV>
 <script src="./js/jquery.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
    </BODY>
   
</HTML>