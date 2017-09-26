<?php
session_start();
@$pro_risk_id= $_POST['pro_risk_id'];
@$prorisk_detail_id=$_POST['prorisk_detail_id'];
@$prorisk_sub_detail_id=$_POST['prorisk_sub_detail_id'];
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
}
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

    <div class="page-header">
        <h3>รายงานความเสี่ยง</h3>
      <a href='./risk_add.php?pro_risk_id=<?php echo $pro_risk_id ; ?>'>โปรแกรมหลัก</a>
 <<
 <a href='./risk_add_main.php?pro_risk_id=<?php echo $pro_risk_id ; ?>&prorisk_detail_id=<?php echo $prorisk_detail_id ; ?>'>โปรแกรมย่อย</a>
<<
<a href='./risk_add_sub.php?pro_risk_id=<?php echo $pro_risk_id ; ?>&prorisk_detail_id=<?php echo $prorisk_detail_id ; ?>&prorisk_sub_detail_id=<?php echo $prorisk_sub_detail_id ; ?>'>รายละเอียดโปรแกรม</a>
        
    </div>
    <div class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">  
<FORM ACTION="risk_add_level.php" METHOD="post" ENCTYPE="multipart/form-data">
    <TABLE class="table" WIDTH="800" BORDER="0" CELLSPACING="1" CELLPADDING="0">
      <TR bgcolor="<?php echo $bgm ; ?>"><td>เพิ่มโปรแกรมความเสี่ยง</td><td></td><td></td></tr>
                 <TR bgcolor="<?php echo $bg ; ?>">
      <TD>โปรแกรมความเสียง</TD>
      <TD>
	
	  <?php
		 include "../function/connect.php";
		$sql="select * from pro_risk  where pro_risk_id = $pro_risk_id";
		$result=mysql_db_query($dbname,$sql);
	  	while($rs=mysql_fetch_array($result)) {
			$pro_risk_name=$rs['pro_risk_name'];
			
			echo "$pro_risk_name";
                        
		}
	  ?>
 
	  </TD>
          <TD></td>
    </TR>
          
                 <TR bgcolor="<?php echo $bg ; ?>">
      <TD>หมวด</TD>
      <TD>
	
	  <?php
		 include "../function/connect.php";
		$sql="select * from proriskdetail 
         where id = '$prorisk_detail_id'";
		$result=mysql_db_query($dbname,$sql);
	  	while($rs=mysql_fetch_array($result)) {
			$prorisk_detail_name=$rs['prorisk_detail_name'];
			
			echo "$prorisk_detail_name";
                        
		}
	  ?>
 
	  </TD>
          <TD></td>
    </TR>
                     <TR bgcolor="<?php echo $bg ; ?>">
      <TD>รายละเอียดหมวด</TD>
      <TD>
	
	  <?php
		 include "../function/connect.php";
         $sql="select * from prorisk_sub_detail
         where  id='$prorisk_sub_detail_id'
         ";
		$result=mysql_db_query($dbname,$sql);
	  	while($rs=mysql_fetch_array($result)) {
			$prorisk_sub_detail_name=$rs['prorisk_sub_detail_name'];
			
			echo "$prorisk_sub_detail_name";
                        
		}
	  ?>
 
	  </TD>
          <TD></td>
    </TR>
          <TR bgcolor="<?php echo $bg2 ; ?>">
      <TD>ประเภทความเสียง</TD>
      <TD>
	  <SELECT NAME="clinic_id">
	  <OPTION VALUE="0">เลือกประเภทความเสี่ยง</OPTION>
	  <?php
		 include "../function/connect.php";
		$sql="select * from clinic_risk";
		$result=mysql_db_query($dbname,$sql);
	  	while($rs=mysql_fetch_array($result)) {
			$clinic_id=$rs['clinic_id'];
			$clinic_name=$rs['clinic_name'];
			//echo "<OPTION VALUE='$clinic_id'>$clinic_name</OPTION>";
                                                if ($clinic_id == $clinic_id2) {
        echo "<OPTION VALUE='$clinic_id' SELECTED>$clinic_name</OPTION>";
    } else {
        echo "<OPTION VALUE='$clinic_id'>$clinic_name</OPTION>";
    }
		}
	  ?>
      </SELECT>
	  </TD>
      <TD><INPUT TYPE="submit" NAME="Submit" VALUE="เลือกข้อมูล"></TD>
       <input type="hidden" value="<?php echo $pro_risk_id ; ?>" name="pro_risk_id" />
        <input type="hidden" value="<?php echo $prorisk_detail_id ; ?>" name="prorisk_detail_id" />
        <input type="hidden" value="<?php echo $prorisk_sub_detail_id ; ?>" name="prorisk_sub_detail_id" />
     
    </TR>
  </TABLE>
</FORM>
</div>


<script src="./js/jquery.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
</BODY>
</HTML>