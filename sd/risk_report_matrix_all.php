<?
session_start(); 
?>
<?include "../level/manager.php";?>
<?
ob_start();
$startdate=$_POST[startdate];
$enddate=$_POST[enddate];
$fix_all=$_POST[fix_all];
$fix_all2=$_GET[fix_all2];
if ($fix_all2 == 1) {
        $fix_all = $fix_all2;
    } else {
        $fix_all = $fix_all;
    }
$startdate2=$_GET[startdate2];
if ($startdate2 > 1) {
        $startdate = $startdate2;
    } else {
        $startdate = $startdate;
    }
$enddate2=$_GET[enddate2];
if ($enddate2 > 1) {
        $enddate = $enddate2;
    } else {
        $enddate = $enddate;
    }
    $fix2 = " 0 , 1 , 2 , 3 , 4 ";
$fix=$_GET[fix];

if ($fix_all == 1) {
        $fix = $fix2;
    } else {
        $fix = $fix;
    }
echo "<a href='risk_report_matrix_all?startdate2=$startdate&enddate2=$enddate&fix_all2=1'>ข้อมูลทั้งหมด</a>";
echo "::";
    echo "<a href='risk_report_matrix_all?startdate2=$startdate&enddate2=$enddate&fix=0'>ยังไม่ได้กำหนดการแก้ไข</a>";
echo "::";
echo "<a href='risk_report_matrix_all?startdate2=$startdate&enddate2=$enddate&fix=1'>เกือบพลาด</a>";
echo "::";
echo "<a href='risk_report_matrix_all?startdate2=$startdate&enddate2=$enddate&fix=2'>รุนแรงต่ำ</a>";
echo "::";
echo "<a href='risk_report_matrix_all?startdate2=$startdate&enddate2=$enddate&fix=3'>รุนแรงสูง</a>";
echo "::";
echo "<a href='risk_report_matrix_all?startdate2=$startdate&enddate2=$enddate&fix=4'>รุนแรงสูง</a>";
echo "::";

include "../function/connect.php";
mysql_query("set NAMES tis620");
$sql="SELECT r.id,r.`date`,pr.pro_risk_name,pd.prorisk_detail_name,prorisk_sub_detail_name,c.clinic_name,r.severity
,r.detail_prob,r.numlevel,cm.ward,cr.ward as wardedit_name,r.method,f.follow_name,p.namedepart as person_name,rw.review_name,sc.source_code_name
,sy.system_name ,rb.reborn_name ,m.code_color
FROM
register_risk r
left outer join proriskdetail pd on pd.id=r.prorisk_detail_id
left outer join pro_risk pr on pr.pro_risk_id=pd.pro_risk_id
left outer join prorisk_sub_detail ps on ps.id=r.prorisk_sub_detail_id
left outer join clinic_risk c on c.clinic_id = r.clinic_id
left outer join code_complaint cm on cm.ward_id= r.ward_id
left outer join code_complaint cr on cr.ward_id= r.wardedit_id
left outer join tracking_code_fix f on f.follow_id=r.follow_id
left outer join pd_depart  p on p.id=r.person_id
left outer join review rw on rw.review_id = r.review_id
left outer join system sy on sy.system_id = r.system_id
left outer join reborn rb on rb.reborn_id = r.reborn_id
left outer join source_code sc on sc.source_code_id = r.source_code_id
left outer join matrix_all m on m.level1 = r.reborn_id and m.level2 = r.severity
where r.`date` between '$startdate'and'$enddate' and m.score in ($fix)
";
$result=mysql_db_query($dbname,$sql);
$number=mysql_num_rows($result);
$no=1;
?>
<HTML>
<HEAD><TITLE>โปรแกรมความเสี่ยง</TITLE>
</HEAD>
<BODY>

 
<? 

	if ($number<>0) {
	echo "
	<P><strong>แสดงรายการความเสี่ยง</strong></P>
	 <table align='center' border='1' width='1080' cellpadding='0' cellspacing='0'>
		<TR BGCOLOR=#E8E8E8> 
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
<td width=50 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>จุดที่แก้ไขปัญหา</B></CENTER></font></td>

<td width=200 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>วิธีแก้ปัญหา</B></CENTER></font></td>
<td width=50 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>ลักษณะการติดตาม</B></CENTER></font></td>
<td width=100 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>ชื่อผู้รายงาน</B></CENTER></font></td>
<td width=50 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>[แก้ไข]</B></CENTER></font></td>



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
                    
		$id=$rs[id];
$date=$rs[date];
$pro_risk_name=$rs[pro_risk_name];
$prorisk_detail_name=$rs[prorisk_detail_name];
$clinic_name=$rs[clinic_name]; 
$severity=$rs[severity];      

$detail_prob=$rs[detail_prob];
$numlevel=$rs[numlevel];       
$ward=$rs[ward];
$wardedit_name=$rs[wardedit_name];
$method=$rs[method];
$follow_name=$rs[follow_name];
$person_name=$rs[person_name];
$review_name=$rs[review_name];
$system_name=$rs[system_name];
$reborn_name=$rs[reborn_name];
$source_code_name=$rs[source_code_name];
$code_color=$rs[code_color];

		echo "
			<tr bgcolor=#$code_color>
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
<td width=50 align=center><font size=2 face=Tahoma, MS Sans Serif><A HREF=\"risk_edit.php?id=$id\">[แก้ไข]</A></td>
<td width=50 align=center><font size=2 face=Tahoma, MS Sans Serif><A HREF=\"risk_delete.php?id_del=\"
				onclick=\"return confirm('ยืนยันลบประเภทสินค้า $name_prd ออกจากระบบ')\">[ลบ]</A></td>

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