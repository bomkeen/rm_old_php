<?php
session_start();

@$pro_risk_id = $_POST['pro_risk_id'];

if (isset($_GET['pro_risk_id'])) {
    $pro_risk_id2 = $_GET['pro_risk_id'];
//cho $pro_risk_id2;
    if ($pro_risk_id2 > 1) {
        $pro_risk_id = $pro_risk_id2;
    } else {
        $pro_risk_id = $pro_risk_id;
    }
}
if (isset($_GET['prorisk_detail_id'])) {
    $prorisk_detail_id2 = $_GET['prorisk_detail_id'];
//echo $prorisk_detail_id2;
}
$bg = "#E6E6FA";
$bgm = "#BEBEBE";
$bg2 = "#FFE4C4";

//echo "$pro_risk_id";
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
            <a href='./risk_add.php?pro_risk_id=<?php echo $pro_risk_id ; ?> '>โปรแกรมหลัก</a>
        </div>
        <div class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
            <FORM ACTION="risk_add_sub.php" METHOD="post" ENCTYPE="multipart/form-data">

                <TABLE class="table " WIDTH="800" BORDER="0" CELLSPACING="1" CELLPADDING="0">
                    <TR bgcolor="<?php echo $bgm ?>"><td>เพิ่มหมวด</td><td></td><td></td></tr>

                    <TR bgcolor="<?php echo $bg ?>">
                        <TD>โปรแกรมความเสี่ยง</TD>
                        <TD>

                            <?php
                            include "../function/connect.php";

                            $sql = "select * from pro_risk where pro_risk_id = $pro_risk_id";
                            $result = mysql_db_query($dbname, $sql);
                            while ($rs = mysql_fetch_array($result)) {
                                $pro_risk_name = $rs['pro_risk_name'];
                                $pro_risk_id = $rs['pro_risk_id'];
                                echo "$pro_risk_name";
                            }
                            ?>

                        </TD>
                        <TD></td>
                    </TR> 
                    <TR bgcolor="<?php echo $bg2; ?>">
                        <TD>หมวด</TD>
                        <TD>
                            <SELECT NAME="prorisk_detail_id">
                                <OPTION VALUE="0">หมวด</OPTION>
                                <?php
//		 include "connect.php";

                                $sql = "select * from proriskdetail where pro_risk_id = $pro_risk_id";
                                $result = mysql_db_query($dbname, $sql);
                                while ($rs = mysql_fetch_array($result)) {
                                    $prorisk_detail_id = $rs['id'];
                                    $prorisk_detail_name = $rs['prorisk_detail_name'];
                                    //echo "<OPTION VALUE='$prorisk_detail_id'>$prorisk_detail_name</OPTION>";

                                    if ($prorisk_detail_id == $prorisk_detail_id2) {
                                        echo "<OPTION VALUE='$prorisk_detail_id' SELECTED>$prorisk_detail_name</OPTION>";
                                    } else {
                                        echo "<OPTION VALUE='$prorisk_detail_id'>$prorisk_detail_name</OPTION>";
                                    }
                                }
                                ?>
                            </SELECT>
                        </TD>
                        <TD><INPUT TYPE="submit" NAME="Submit" VALUE="เลือกข้อมูล"></TD>
                    <input type="hidden" value="<?php echo $pro_risk_id; ?>" name="pro_risk_id" />

                    </TR>
                </TABLE>
            </FORM>
        </DIV>

        <script src="./js/jquery.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
    </BODY>
</HTML>