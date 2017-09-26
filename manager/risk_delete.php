<?
session_start();
include('../level/manager.php');

$id_del=$_GET[id_del];


include "../function/connect.php";
mysql_query("set NAMES tis620");
$sql="delete from register_risk where id='$id_del' ";
$result=mysql_db_query($dbname,$sql);



if ($result) {
	echo "<H3>ลบ ความเสี่ยงเรียบร้อยแล้ว</H3>";
	
} else {
	echo "<H3>ERROR : ไม่สามารถลบสินค้าได้</H3>";
}
mysql_close();
?>