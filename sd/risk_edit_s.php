<?
session_start();
$edit_date=$_POST[edit_date];//�ѹ������
$review_id=$_POST[review_id];//���ǹ
$reborn_date=$_POST[reborn_date];//�ѹ��跺�ǹ
$detail_review=$_POST[detail_review]; //�š�÷��ǹ
$reborn_id=$_POST[reborn_id];//�ѡɳС���Դ
$follow_id=$_POST[follow_id]; //�ѡɳС�õԴ���
$method=$_POST[method]; //�Ը���ѭ��
$person_edit=$_POST[person_edit];
$id=$_POST[id];


include "../function/connect.php";
mysql_query("set NAMES tis620");



$sql="update register_risk set  

method='$method',   
follow_id='$follow_id',    
review_id='$review_id',   
reborn_id='$reborn_id',   
edit_date='$edit_date',    
reborn_date='$reborn_date',    
person_edit='$person_edit',  
detail_review='$detail_review'    

where id ='$id'";
mysql_query("set NAMES tis620");
$result=mysql_db_query($dbname,$sql);

if ($result) {
	echo "<H3>��� ��������§���º������������</H3>";
	
} else {
	echo "<H3>ERROR : �������ö��䢤�������§��</H3>";
}

mysql_close();
?>