<?
session_start();

$equipment_type=$_POST[$id_equipment];
$id_person=$_POST[id_name];

//$d1=$_POST[d1];
//$m1=$_POST[m1];
//$y1=$_POST[y1];
//$yy1=$y1;
//$startdate=$yy1."-".$m1."-".$d1;
echo $startdate;
$date=$startdate;
$prorisk_detail_id=$_POST[prorisk_detail_id];
$pro_risk_id=$_POST[pro_risk_id];
$prorisk_sub_detail_id=$_POST[prorisk_sub_detail_id];
$clinic_id=$_POST[clinic_id];
$severity=$_POST[severity];
$detail_prob=$_POST[detail_prob];
$numlevel=$_POST[numlevel];
$ward_id=$_POST[ward_reg];
$wardedit_id=$_POST[wardedit_id];
$method=$_POST[method];
$follow_id=$_POST[follow_id];
$person_id=$_POST[person_id];
$system_id=$_POST[system_id];
$source_code_id=$_POST[source_code_id];
$review_id=$_POST[review_id];
$detail_review=$_POST[detail_review];
$reborn_id=$_POST[reborn_id];
$edit_date=$_POST[edit_date];
$reborn_date=$_POST[reborn_date];
$severity_date=$_POST[severity_date];
$person_edit=$_POST[person_edit];
//echo "$date";
//echo "$name";
//echo "$pr3o_risk_id";
//echo "$clinic_id";
//echo "$level";
//echo "$detail_prob";
//echo "$numlevel";
//echo "$ward_id";
//echo "$wardedit_id";
//echo "$method";
//echo "$follow_id";
echo "$person_id";
//echo "$source_id";
//echo "$part_id";
//echo "$type_id";
//echo "$severity";

/*

$document=$_POST[document];
$document_distribution=$_POST[document_distribution];
$id_pasadu_state=$_POST[id_pasadu_state];

echo $fileupload=$_FILES['fileupload']['tmp_name'];
echo $fileupload_name=$_FILES['fileupload']['name'];
echo $fileupload_size=$_FILES['fileupload']['size'];
echo $fileupload_type=$_FILES['fileupload']['type'];

if ($name=="") {
	echo "<H3>ERROR : กรุณากรอก ชื่อสินค้า</H3>";
	exit();
} else if ($ref_id_type=="0") {
	echo "<H3>ERROR : กรุณาเลือก ประเภทสินค้า </H3>";
	exit();
} else if ($detail=="") {
	echo "<H3>ERROR : กรุณากรอก รายละเอียด </H3>";
	exit();
} else if ($id_person=="") {
	echo "<H3>ERROR : กรุณากรอก ชื่อผู้แจ้ง </H3>";
	exit();
}
*/
include "../function/connect.php";
mysql_query("set NAMES tis620");
$sql="INSERT INTO register_risk values('','$date','$pro_risk_id','$prorisk_detail_id','$prorisk_sub_detail_id',
'$clinic_id','$severity','$detail_prob','$numlevel','$codedepart','$wardedit_id','$method','$follow_id','$iddepartweb'
,'$system_id','$source_code_id','$review_id','$reborn_id','$detail_review','$edit_date','$reborn_date','$person_edit','$severity_date') ";
$result=mysql_db_query($dbname,$sql);


//echo "";
//echo "<H3>เพิ่ม ความเสี่ยงรียบร้อยแล้ว</H3>";
mysql_close();
?>
<SCRIPT language="JavaScript">
	alert("เรียบร้อยครับผม");
	location.href='#';
</SCRIPT>