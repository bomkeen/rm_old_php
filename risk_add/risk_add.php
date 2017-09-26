<?php
session_start();

$bg = "#E6E6FA";
$bgm = "#BEBEBE";
IF(isset($_GET['pro_risk_id'])){
$pro_risk_id2=$_GET['pro_risk_id'];
//echo $pro_risk_id2;
}
?>
<?php
if(!$_SESSION["level"])
{	
?>
	<SCRIPT language="JavaScript">
	alert("ท่านไม่ได้รับสิทธิ์เข้าใช้งาน ");
	//location.href='login.php';
	</SCRIPT>
	<META HTTP-EQUIV="REFRESH" CONTENT="0;url=body.php">
<?php	
}
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
    </div>
    <div class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
<FORM ACTION="risk_add_main.php" METHOD="post" ENCTYPE="multipart/form-data">
 
      <TABLE class="table table-hover" WIDTH="800" BORDER="0" CELLSPACING="1" CELLPADDING="0">
      
      <TR bgcolor="<?php echo $bgm?>"><td>เพิ่มโปรแกรมความเสี่ยง</td><td></td><td></td></tr>
          <TR bgcolor="<?php echo $bg?>">
      <TD>โปรแกรมความเสี่ยง</TD>
      <TD>
	  <SELECT NAME="pro_risk_id">
	  <OPTION VALUE="0">เลือกโปรแกรมความเสี่ยง</OPTION>
	  <?php
		 include "../function/connect.php";
        
		$sql="select * from pro_risk";
		$result=mysql_db_query($dbname,$sql);
	  	while($rs=mysql_fetch_array($result)) {
			$pro_risk_id=$rs[pro_risk_id];
			$pro_risk_name=$rs[pro_risk_name];
			//echo "<OPTION VALUE='$pro_risk_id'>$pro_risk_name</OPTION>";
                        
                        
                        //
                        if ($pro_risk_id == $pro_risk_id2) {
        echo "<OPTION VALUE='$pro_risk_id' SELECTED>$pro_risk_name</OPTION>";
    } else {
        echo "<OPTION VALUE='$pro_risk_id'>$pro_risk_name</OPTION>";
    }
		}
	  ?>
      </SELECT>
	  </TD>
      <TD><INPUT TYPE="submit" NAME="Submit" VALUE="เลือกข้อมูล"></TD>
     
    </TR>
  </TABLE>
  
</FORM>
    </DIV>

<script src="./js/jquery.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
</BODY>
</HTML>