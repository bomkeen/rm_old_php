<?
session_start();
ob_start();
$equipment_type=$_POST[$id_equipment];
$id_person=$_POST[id_name];
$date=$_POST[date1];
$edit_date=$_POST[edit_date];
$reborn_date=$_POST[reborn_date];

/*
                 <input type="hidden" value="<?= $sess_person_id ?>" name="person_id" />
                <input type="hidden" value="<?= $sess_ward_reg ?>" name="ward_reg" />
                <input type="hidden" value="<?= $severity_date ?>" name="severity_date" />
                <input type="hidden" value="<?= $pro_risk_id ?>" name="pro_risk_id" />
                <input type="hidden" value="<?= $prorisk_detail_id ?>" name="prorisk_detail_id" />
                <input type="hidden" value="<?= $prorisk_sub_detail_id ?>" name="prorisk_sub_detail_id" />
                <input type="hidden" value="<?= $clinic_id ?>" name="clinic_id" />
                <input type="hidden" value="<?= $severity ?>" name="severity" />
 */
$id=$_POST[id];
$date=$_POST[date1];
$detail_prob=$_POST[detail_prob];
$numlevel=$_POST[numlevel];
$ward_id=$_POST[ward_id];
$wardedit_id=$_POST[wardedit_id];
$method=$_POST[method];
$follow_id=$_POST[follow_id];
$person_id=$_POST[person_id];
$system_id=$_POST[system_id];
$source_code_id=$_POST[source_code_id];
$review_id=$_POST[review_id];
$reborn_id=$_POST[reborn_id];
$person_edit=$_POST[person_edit];

//$source_id=$_POST[];
//$part_id=$_POST[];
//$type_id=$_POST[];
//$severity=$_POST[];

echo "$date";
//echo "$pro_risk_id";
//echo "$clinic_id";
//echo "$level";
//echo "$detail_prob";
//echo "$numlevel";
//echo "$ward_id";
//echo "$wardedit_id";
//echo "$method";
//echo "$follow_id";
//echo "$person_id";
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



$sql="update register_risk set  

date='$date',
detail_prob='$detail_prob',
numlevel='$numlevel',
ward_id='$ward_id',
wardedit_id='$wardedit_id',
method='$method',
follow_id='$follow_id',
person_id='$person_id',
system_id='$system_id',
source_code_id='$source_code_id',
review_id='$review_id',
reborn_id='$reborn_id',
person_edit='$person_edit'
where id ='$id'";
mysql_query("set NAMES tis620");
$result=mysql_db_query($dbname,$sql);

if ($result) {
	echo "<H3>แก้ไข ความเสี่ยงเรียบร้อยแล้วครับผม </H3>";
	
} else {
	echo "<H3>ERROR : ไม่สามารถแก้ไขสินค้าได้</H3>";
}

mysql_close();
?>