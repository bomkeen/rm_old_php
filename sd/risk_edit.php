<?php
session_start(); 
include "../function/connect.php";
$id=$_GET['id'];
//$id=$_POST[id];
$bg1="#FFCCFF";
$bg="#99CCFF";
$bgm="#CCCCFF";

$sql="SELECT r.id,r.`date`,pr.pro_risk_name,pr.pro_risk_id,pd.prorisk_detail_name,ps.prorisk_sub_detail_name,pd.prorisk_detail_id,c.clinic_name,c.clinic_id,r.severity
,r.detail_prob,r.numlevel,cm.ward,cm.ward_id,cr.ward as wardedit_name,cr.ward_id as wardedit_id,r.method,f.follow_name,f.follow_id,p.name as person_name ,r.person_id
,s.system_name,s.system_id,sc.source_code_id,sc.source_code_name,w.review_id,w.review_name,ri.reborn_id,ri.reborn_name,r.detail_review
,r.reborn_id,r.edit_date,r.reborn_date,pp.namedepart as name_regist,r.person_edit
FROM
register_risk r
left outer join proriskdetail pd on pd.id=r.prorisk_detail_id
left outer join pro_risk pr on pr.pro_risk_id=pd.pro_risk_id
left outer join prorisk_sub_detail ps on ps.id=r.prorisk_sub_detail_id
left outer join clinic_risk c on c.clinic_id = r.clinic_id
left outer join code_complaint cm on cm.ward_id= r.ward_id
left outer join code_complaint cr on cr.ward_id=r.wardedit_id
left outer join tracking_code_fix f on f.follow_id=r.follow_id
left outer join tb_member p on p.id=r.person_id
left outer join system s on s.system_id=r.system_id
left outer join source_code sc on sc.source_code_id=r.source_code_id
left outer join review w on w.review_id=r.review_id
left outer join reborn ri on  ri.reborn_id = r.reborn_id
left outer join pd_depart pp on pp.id=r.person_id
where r.id = $id ";
$result=mysql_db_query($dbname,$sql);
$rs=mysql_fetch_array($result);
$pro_risk_name=$rs['pro_risk_name'];
$pro_risk_id=$rs['pro_risk_id'];

$date=$rs['date'];
//list($year ,$month, $day) = split('[/.-]', $date);
 
//	echo "Month: $month; Day: $day; Year: $year<br />\n";

$pro_risk_name=$rs['pro_risk_name'];
$prorisk_detail_name=$rs['prorisk_detail_name'];
$prorisk_detail_id=$rs['prorisk_detail_id'];
$clinic_name=$rs['clinic_name']; 
$clinic_id=$rs['clinic_id']; 
$severity=$rs['severity'];      

$detail_prob=$rs['detail_prob'];
$numlevel=$rs['numlevel'];       
$ward=$rs['ward'];
$ward_id=$rs['ward_id'];
$wardedit_name=$rs['wardedit_name'];
$wardedit_id=$rs['wardedit_id'];

$method=$rs['method'];
$follow_name=$rs['follow_name'];
$follow_id=$rs['follow_id'];
$person_name=$rs['person_name'];
$person_id=$rs['person_id'];
$system_name=$rs['system_name'];
$system_id=$rs['system_id'];
$source_code_id=$rs['source_code_id'];
$source_code_name=$rs['source_code_name'];
$review_id=$rs['review_id'];
$review_name=$rs['review_name'];
$reborn_id=$rs['reborn_id'];
$reborn_name=$rs['reborn_name'];
$detail_review=$rs['detail_review'];
$name_regist=$rs['name_regist'];
$person_edit=$rs['person_edit'];

//echo $date;
//echo $source_code_name;

////



?>
<HTML>
<HEAD><TITLE>#### สำหรับผู้ดูแลระบบ</TITLE>
 <meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″ />
        <link href="../css/bootstrap.css" rel="stylesheet">
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
<link href="../css/smoothness/jquery-ui-1.7.2.custom.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery-1.3.2.min.js" type="text/javascript"></script>
        <script src="../js/jquery-ui-1.7.2.custom.min.js" type="text/javascript"></script>
</HEAD>
<BODY>
        <script type="text/javascript" src="../js/calendarDateInput.js">
</script>
<div class="page-header">
    <h3>แก้ไขความเสี่ยง</h3>
</div>
<div class="row">
     <div class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">  
<FORM ACTION="risk_edit_s.php" METHOD="post" ENCTYPE="multipart/form-data">

    <TABLE class="table" WIDTH="800" BORDER="0" CELLSPACING="1" CELLPADDING="0">
    
            
			<TR bgcolor="<?php echo $bg1 ;?>">
      <TD>ผู้รายงานความเสี่ยง</TD>
      <TD>
	<?php echo "$name_regist";?>
	  </TD>
    </TR> 
			<TR bgcolor="<?php echo $bg1 ; ?>">
      <TD>โปรแกรมความเสี่ยง</TD>
      <TD>
	<?php echo "$pro_risk_name";?>
	  </TD>
    </TR>    
                    <TR bgcolor="<?php echo $bg1 ;?>">
      <TD WIDTH="101">วันที่ได้รับแจ้งความเสี่ยง</TD>
      <TD><?php echo $date ; ?></TD>
    </TR>
      
      <TR bgcolor="<?php echo $bg1 ; ?>">
      <TD>รายละเอียดโปรแกรม</TD>
      <TD><?php echo "$prorisk_detail_name"; ?></TD>
    </TR>
        <TR bgcolor="<?php echo $bg1 ; ?>">
      <TD>ความเสี่ยงด้าน</TD>
      <TD><?php echo "$clinic_name"; ?></TD>
    </TR>
    
    
            <TR bgcolor="<?php echo $bg1?>">
      <TD>ระดับความรุนแรง</TD>
      <TD><?php echo "$severity"; ?>
	  </TD>
    </TR>  
             <TR bgcolor="<?php echo $bg1 ; ?>">
      <TD>ระบบ</TD>
      <TD><?php echo "$system_name"; ?></TD>
    </TR>  
    
                     <TR bgcolor="<?php echo $bg1 ;?>">
      <TD>แหล่งที่มา</TD>
      <TD><?php echo "$source_code_name"; ?></TD>
    </TR>
    
       <TR bgcolor="#FF3366">
      <TD>รายละเอียดของปัญหา</TD>
      <TD><?php echo "$detail_prob"; ?></TD>
    </TR>
 
    
        <TR bgcolor="<?php echo $bg1 ;?>">
      <TD>จำนวนครั้ง</TD>
      <TD><?php echo "$numlevel"; ?></TD>
    </TR>
    
     
    
            <TR bgcolor="<?php echo $bg1 ; ?>">
      <TD>หน่วยงานรายงาน</TD>
      <TD><?php echo "$ward"; ?></TD>
    </TR>   
    
              <TR bgcolor="<?php echo $bg1 ;?>">
      <TD>จุดที่พบความเสี่ยง</TD>
      <TD><?php echo "$wardedit_name"; ?></TD>
    </TR>   
     <TR bgcolor="<?php echo $bg ;?>">
                    <TD>ผู้ที่แก้ไขปัญหา</TD>
                    <TD>
                        <SELECT NAME="person_edit">
                            <OPTION VALUE="0">ผู้ที่แก้ไขปัญหา</OPTION>
<?php
include "../function/connect.php";
$sql = "select * from pd_depart c order by namedepart
                    
                    ";
$result = mysql_db_query($dbname, $sql);
while ($rs = mysql_fetch_array($result)) {
    $person_name2 = $rs['namedepart'];
    $person_edit2 = $rs['id'];
if($person_edit==$person_edit2){
    
    echo "<OPTION VALUE='$person_edit2' selected >$person_name2</OPTION>";
} else {
  echo "<OPTION VALUE='$person_edit2'  >$person_name2</OPTION>";  
}
}
?>
                        </SELECT>
                        </TD>
                </TR>
	
	
	<tr>
        <td>วันที่แก้ไข</td><td><script>DateInput('edit_date', true, 'YYYY-MM-DD')</script></td>
    </tr>
      <TR bgcolor="<?php echo $bg?>">               
      <TD>วิธีแก้ปัญหา</TD>
      <TD><TEXTAREA NAME="method" COLS="40" ROWS="4"><?php echo $method?></TEXTAREA> * </TD>
    </TR>
                 <TR bgcolor="<?php echo $bg?>">
      <TD>ทบทวน</TD>
      <TD>
	  <SELECT NAME="review_id">
	  <OPTION VALUE="0">เลือกการทบทวน</OPTION>
	  <?php
		 include "../function/connect.php";
		$sql="select * from review";
		$result=mysql_db_query($dbname,$sql);
	  	while($rs=mysql_fetch_array($result)) {
			$review_id2=$rs[review_id];
			$review_name2=$rs[review_name];

                                                             if ($review_name==$review_name2) {
				echo "<OPTION VALUE='$review_id2' SELECTED>$review_name2</OPTION>";
			} else {
			echo "<OPTION VALUE='$review_id2'>$review_name2</OPTION>";
                        }
		}
	  ?>
      </SELECT>
	  *</TD>
    </TR>
    <tr>
         <td>วันที่ทบทวน</td>
<td><script>DateInput('reborn_date', true, 'YYYY-MM-DD')</script></td></tr>
           <TR bgcolor="<?php echo $bg ; ?>">
      <TD>ผลการทบทวน</TD>
      <TD><TEXTAREA NAME="detail_review" COLS="40" ROWS="4"><?php echo $detail_review ; ?></TEXTAREA> * </TD>
    </TR>

                    <TR bgcolor="<?php echo $bg ; ?>">
      <TD>ลักษณะการเกิด</TD>
      <TD>
	  <SELECT NAME="reborn_id">
	  <OPTION VALUE="0">เลือกลักษณะการเกิด</OPTION>
	  <?php
		 include "../function/connect.php";
		$sql="select * from reborn";
		$result=mysql_db_query($dbname,$sql);
	  	while($rs=mysql_fetch_array($result)) {
			$reborn_id2=$rs['reborn_id'];
			$reborn_name2=$rs['reborn_name'];
			
                         if ($reborn_id==$reborn_id2) {
				echo "<OPTION VALUE='$reborn_id2' SELECTED>$reborn_name2</OPTION>";
			} else {
			echo "<OPTION VALUE='$reborn_id2'>$reborn_name2</OPTION>";
                        }
		}
	  ?>
      </SELECT>
	  *</TD>
    </TR>
     <TR bgcolor="<?php echo $bg ; ?>">
      <TD>ลักษณะการติดตาม</TD>
      <TD>
	  <SELECT NAME="follow_id">
	  <OPTION VALUE="0">เลือกการติดตาม</OPTION>
	  <?php
		 include "../function/connect.php";
		$sql="select * from tracking_code_fix";
		$result=mysql_db_query($dbname,$sql);
	  	while($rs=mysql_fetch_array($result)) {
			$follow_id2=$rs['follow_id'];
			$follow_name2=$rs['follow_name'];
						
			  if ($follow_id==$follow_id2) {
				echo "<OPTION VALUE='$follow_id2' SELECTED>$follow_name2</OPTION>";
			} else {
			echo "<OPTION VALUE='$follow_id2'>$follow_name2</OPTION>";
            }
		}
	  ?>
      </SELECT>
	  *</TD>
    </TR>
    
    <INPUT NAME="id" TYPE="hidden"  VALUE="<?php echo $id ; ?>">
    <TR bgcolor="<?php echo $bg ; ?>">
      <TD>&nbsp;</TD>
      <TD><INPUT TYPE="submit" NAME="Submit" VALUE="Submit">
        <INPUT TYPE="reset" NAME="Submit2" VALUE="Reset"></TD>

            <!-- <input type="hidden"  value="<?php // echo $iddepartweb ; ?>"  name="person_edit" />  -->
  
    </TR>
  </TABLE>
</FORM>
     </div></DIV>

</BODY>
</HTML>