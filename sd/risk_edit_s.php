<?php
session_start();
$edit_date=$_POST['edit_date'];//วันที่แก้ไข
$review_id=$_POST['review_id'];//ทบทวน
$reborn_date=$_POST['reborn_date'];//วันที่ทบทวน
$detail_review=$_POST['detail_review']; //ผลการทบทวน
$reborn_id=$_POST['reborn_id'];//ลักษณะการเกิด
$follow_id=$_POST['follow_id']; //ลักษณะการติดตาม
$method=$_POST['method']; //วิธีแก้ปัญหา
$person_edit=$_POST['person_edit'];
$id=$_POST['id'];


include "../function/connect.php";



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
$result=mysql_db_query($dbname,$sql);



mysql_close();

?>
<?php if(!$result){ ?>
   <SCRIPT language="JavaScript">
    alert("ERROR");
    location.href = './risk_edit.php?id=<?php echo $id ;?>';
</SCRIPT> 
<?php } else { ?>

<SCRIPT language="JavaScript">
    alert("เรียบร้อยครับผม");
    location.href = './risk_edit.php?id=<?php echo $id ;?>';
</SCRIPT>
<?php } ?>