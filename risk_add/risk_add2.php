<?php
session_start();
?>
<?php
@$pro_risk_id = $_POST['pro_risk_id'];
@$prorisk_detail_id = $_POST['prorisk_detail_id'];
@$prorisk_sub_detail_id = $_POST['prorisk_sub_detail_id'];
@$clinic_id = $_POST['clinic_id'];
@$severity = $_POST['severity'];
$bg = "#E6E6FA";
$bgm = "#BEBEBE";
?>
<HTML>
    <HEAD><TITLE>โปรแกรมความเสี่ยง</TITLE>
        <meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″ />
        <link href="../css/bootstrap.css" rel="stylesheet">
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <link href="../css/smoothness/jquery-ui-1.7.2.custom.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery-1.3.2.min.js" type="text/javascript"></script>
        <script src="../js/jquery-ui-1.7.2.custom.min.js" type="text/javascript"></script>

    </HEAD>

    <BODY>
        <!--risk add2-->


        <div class="page-header">
            <h3>รายงานความเสี่ยง</h3>
            <a href='./risk_add.php?pro_risk_id=<?php echo $pro_risk_id; ?>'>โปรแกรมหลัก</a>
            <<
            <a href='./risk_add_main.php?pro_risk_id=<?php echo $pro_risk_id; ?>&prorisk_detail_id=<?php echo $prorisk_detail_id; ?>'>โปรแกรมย่อย</a>
            <<
            <a href='./risk_add_sub.php?pro_risk_id=<?php echo $pro_risk_id; ?>&prorisk_detail_id=<?php echo $prorisk_detail_id; ?>&prorisk_sub_detail_id=<?php echo $prorisk_sub_detail_id; ?>'>รายละเอียดโปรแกรม</a>
            <<
            <a href='./risk_add_type.php?pro_risk_id=<?php echo $pro_risk_id; ?>&prorisk_detail_id=<?php echo $prorisk_detail_id; ?>&prorisk_sub_detail_id=<?php echo $prorisk_sub_detail_id; ?>&clinic_id=<?php echo $clinic_id; ?>'>ประเภทของความเสี่ยง</a>
            <<
            <a href='./risk_add_level.php?pro_risk_id=<?php echo $pro_risk_id; ?>&prorisk_detail_id=<?php echo $prorisk_detail_id; ?>&prorisk_sub_detail_id=<?php echo $prorisk_sub_detail_id; ?>&clinic_id=<?php echo $clinic_id; ?>&severity=<?php echo $severity; ?>'>ระดับความรุนแรง</a>
        </div>

        <div class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">  
            <FORM name="risk_add" ACTION="risk_add3.php" METHOD="post" ENCTYPE="multipart/form-data">

                <TABLE class="table" WIDTH="800" BORDER="0" CELLSPACING="1" CELLPADDING="0">
                    <TR bgcolor="<?php echo $bgm; ?>"><td>เพิ่มความเสี่ยง</td><td></td></tr>

                    <TR bgcolor="<?php echo $bg; ?>">
                        <TD>โปรแกรมความเสี่ยง</TD>
                        <TD>
                            <?php
                            include "../function/connect.php";
                            $sql = "select * from pro_risk  where pro_risk_id = $pro_risk_id";
                            $result = mysql_db_query($dbname, $sql);
                            while ($rs = mysql_fetch_array($result)) {
                                $pro_risk_name = $rs['pro_risk_name'];
                                echo "$pro_risk_name";
                            }
                            ?>
                        </TD>
                    </TR>
                    <TR bgcolor="#FF33CC">
                        <TD>ผู้รายงานความเสี่ยง</TD>
                        <TD>
                            <?php
                            echo $_SESSION['nameweb'];
                            ?>
                        </TD>
                    </TR>
                    <TR bgcolor="<?php echo $bg; ?>">
                        <TD>หมวด</TD>
                        <TD>
                            <?php
                            include "../function/connect.php";
                            $sql = "select * from proriskdetail 
         where id = '$prorisk_detail_id'";
                            $result = mysql_db_query($dbname, $sql);
                            while ($rs = mysql_fetch_array($result)) {
                                $prorisk_detail_name = $rs['prorisk_detail_name'];
                                echo "$prorisk_detail_name";
                            }
                            ?>

                        </TD>
                    </TR>
                    <TR bgcolor="<?php echo $bg; ?>">
                        <TD>รายละเอียดหมวด</TD>
                        <TD>

                            <?php
                            include "../function/connect.php";
                            $sql = "select * from prorisk_sub_detail where  id='$prorisk_sub_detail_id'";
                            $result = mysql_db_query($dbname, $sql);
                            while ($rs = mysql_fetch_array($result)) {
                                $prorisk_sub_detail_name = $rs['prorisk_sub_detail_name'];
                                echo "$prorisk_sub_detail_name";
                            }
                            ?>

                        </TD>
                    </TR>
                    <TR bgcolor="<?php echo $bg; ?>">
                        <TD>ประเภทของความเสี่ยง</TD>
                        <TD>

                            <?php
                            include "../function/connect.php";
                            $sql = "select * from clinic_risk
         where clinic_id='$clinic_id' 

         ";
                            $result = mysql_db_query($dbname, $sql);
                            while ($rs = mysql_fetch_array($result)) {
                                $clinic_name = $rs['clinic_name'];
                                $clinic_id = $rs['clinic_id'];
                                echo $clinic_name;
                            }
                            ?>

                        </TD>
                    </TR>
                    <TR bgcolor="<?php echo $bg; ?>">
                        <TD>ระดับความรุนแรง</TD>
                        <TD><?php echo $severity; ?></TD>
                    </TR>
                    <TR bgcolor="<?php echo $bg; ?>">
                        <td>ตั้งแต่วันที่</td>
                        <td>
                            <script type="text/javascript">
                                $(function () {
                                    $("#riskdate").datepicker({dateFormat: 'yy-mm-dd'});
                                });
                            </script>
                            <input type="text" name="riskdate" id="riskdate" required/>
                        </td>
                    <TR bgcolor="<?php echo $bg; ?>">
                        <TD>ลักษณะการเกิด</TD>
                        <TD>
                            <SELECT NAME="reborn_id" required>
                                <OPTION VALUE="">เลือกลักษณะการเกิด</OPTION>
                                <?php
                                include "../function/connect.php";
                                $sql = "select * from reborn";
                                $result = mysql_db_query($dbname, $sql);
                                while ($rs = mysql_fetch_array($result)) {
                                    $reborn_id = $rs['reborn_id'];
                                    $reborn_name = $rs['reborn_name'];
                                    echo "<OPTION VALUE='$reborn_id'>$reborn_name</OPTION>";
                                }
                                ?>
                            </SELECT>
                        </TD>
                    </TR>

                    <TR bgcolor="<?php echo $bg; ?>">
                        <TD>ระบบ</TD>
                        <TD>
                            <SELECT NAME="system_id" required>
                                <OPTION VALUE="">เลือกระบบ</OPTION>
                                <?php
                                include "../function/connect.php";
                                $sql = "select * from system";
                                $result = mysql_db_query($dbname, $sql);
                                while ($rs = mysql_fetch_array($result)) {
                                    $system_id = $rs['system_id'];
                                    $system_name = $rs['system_name'];
                                    echo "<OPTION VALUE='$system_id'>$system_name</OPTION>";
                                }
                                ?>
                            </SELECT>


                        </TD>
                    </TR>   

                    <TR bgcolor="<?php echo $bg; ?>">
                        <TD>แหล่งที่มา</TD>
                        <TD>
                            <SELECT NAME="source_code_id" required>
                                <OPTION VALUE="">เลือกแหล่งที่มา</OPTION>
                                <?php
                                include "../function/connect.php";
                                $sql = "select * from source_code";
                                $result = mysql_db_query($dbname, $sql);
                                while ($rs = mysql_fetch_array($result)) {
                                    $source_code_id = $rs['source_code_id'];
                                    $source_code_name = $rs['source_code_name'];
                                    echo "<OPTION VALUE='$source_code_id'>$source_code_name</OPTION>";
                                }
                                ?>
                            </SELECT>
                            *</TD>
                    </TR>

                    <TR bgcolor="<?php echo $bg; ?>">
                        <TD>รายละเอียดของปัญหาและการแก้ไขเบื้องต้น</TD>
                        <TD><TEXTAREA NAME="detail_prob" COLS="40" ROWS="4" required></TEXTAREA> * </TD>
                </TR>


                <TR bgcolor="<?php echo $bg; ?>">
                    <TD WIDTH="300">จำนวนครั้ง</TD>
                    <TD><INPUT TYPE="text" NAME="numlevel" SIZE="10" required>* </TD>
                </TR>


                <TR bgcolor="<?php echo $bg; ?>">
                    <TD>จุดที่เกิดความเสี่ยง</TD>
                    <TD>
                        <SELECT NAME="wardedit_id" required>
                            <OPTION VALUE="">เลือกจุดที่พบ</OPTION>
                                <?php
                                include "../function/connect.php";
                                $sql = "select * from code_complaint c";
                                $result = mysql_db_query($dbname, $sql);
                                while ($rs = mysql_fetch_array($result)) {
                                    $wardedit_name = $rs['ward'];
                                    $wardedit_id = $rs['ward_id'];
                                    echo "<OPTION VALUE='$wardedit_id'>$wardedit_name</OPTION>";
                                }
                                ?>
                      
						</SELECT>
                        </TD>
                </TR>
                 <!--
                                <TR bgcolor="<?php // echo $bg ; ?>">
                    <TD>ผู้ที่ต้องการให้แก้ไขปัญหา</TD>
                    <TD>
                        <SELECT NAME="person_edit">
                            <OPTION VALUE="0">ผู้ที่ต้องการให้แก้ไขปัญหา</OPTION>
                                <?php
                                include "../function/connect.php";
                                $sql = "select * from pd_depart c order by namedepart
                    
                    ";
                                $result = mysql_db_query($dbname, $sql);
                                while ($rs = mysql_fetch_array($result)) {
                                    $person_name = $rs['namedepart'];
                                    $person_edit = $rs['id'];

                                    echo "<OPTION VALUE='$person_edit'>$person_name</OPTION>";
                                }
                                ?>
                        </SELECT>
                        </TD>
                </TR>
                
                
                <td>วันที่แก้ไข</td><td><script>DateInput('edit_date', true, 'YYYY-MM-DD')</script></td>
                <TR bgcolor="<?php // echo $bg ; ?>">              
                    <TD>วิธีแก้ปัญหา</TD>
                    <TD><TEXTAREA NAME="method" COLS="40" ROWS="4"></TEXTAREA>  </TD>
                </TR>
                <TR bgcolor="<?php //echo $bg ;?>">
                    <TD>ทบทวน</TD>
                    <TD>
                        <SELECT NAME="review_id">
                            <OPTION VALUE="0">เลือกการทบทวน</OPTION>
                                <?php
                                include "../function/connect.php";
                                $sql = "select * from review";
                                $result = mysql_db_query($dbname, $sql);
                                while ($rs = mysql_fetch_array($result)) {
                                    $review_id = $rs['review_id'];
                                    $review_name = $rs['review_name'];
                                    echo "<OPTION VALUE='$review_id'>$review_name</OPTION>";
                                }
                                ?>
                        </SELECT>
                        </TD>
                </TR>
                <td>วันที่ทบทวน</td><td><script>DateInput('reborn_date', true, 'YYYY-MM-DD')</script></td>
                <TR bgcolor="<?php // echo $bg ; ?>">              
                    <TD>ผลการทบทวน</TD>
                    <TD><TEXTAREA NAME="detail_review" COLS="40" ROWS="4"></TEXTAREA>  </TD>
                </TR>

                <TR bgcolor="<?php // echo $bg ; ?>">
                    <TD>ลักษณะการเกิด</TD>
                    <TD>
                        <SELECT NAME="reborn_id">
                            <OPTION VALUE="0">เลือกลักษณะการเกิด</OPTION>
                                <?php
                                include "../function/connect.php";
                                $sql = "select * from reborn";
                                $result = mysql_db_query($dbname, $sql);
                                while ($rs = mysql_fetch_array($result)) {
                                    $reborn_id = $rs['reborn_id'];
                                    $reborn_name = $rs['reborn_name'];
                                    echo "<OPTION VALUE='$reborn_id'>$reborn_name</OPTION>";
                                }
                                ?>
                        </SELECT>
                        </TD>
                </TR>

                <TR bgcolor="<?php //echo $bg ; ?>">
                    <TD>ลักษณะการติดตาม</TD>
                    <TD>
                        <SELECT NAME="follow_id">
                            <OPTION VALUE="0">เลือกการติดตาม</OPTION>
                                <?php
                                include "../function/connect.php";
                                $sql = "select * from tracking_code_fix";
                                $result = mysql_db_query($dbname, $sql);
                                while ($rs = mysql_fetch_array($result)) {
                                    $follow_id = $rs['follow_id'];
                                    $follow_name = $rs['follow_name'];
                                    echo "<OPTION VALUE='$follow_id'>$follow_name</OPTION>";
                                }
                                ?> 
                        </SELECT>
                        </TD>
                </TR>

-->
                <TR bgcolor="<?php echo $bg; ?>">
                    <TD>&nbsp;</TD>
                    <TD><INPUT TYPE="submit" NAME="submit" VALUE="Submit">
                        <INPUT TYPE="reset" NAME="Submit2" VALUE="Reset"></TD>
                <input type="hidden" value="<?php echo $_SESSION['iddepartweb']; ?>" name="person_id" />
                <input type="hidden" value="<?php echo $_SESSION["codedepart"]; ?>" name="ward_reg" /> <!--  อันนี้ น่าจะมาจากการ login รหัสแผนก-->
                <input type="hidden" value="<?php echo $severity_date; ?>" name="severity_date" />
                <input type="hidden" value="<?php echo $pro_risk_id; ?>" name="pro_risk_id" />
                <input type="hidden" value="<?php echo $prorisk_detail_id; ?>" name="prorisk_detail_id" />
                <input type="hidden" value="<?php echo $prorisk_sub_detail_id; ?>" name="prorisk_sub_detail_id" />
                <input type="hidden" value="<?php echo $clinic_id; ?>" name="clinic_id" />
                <input type="hidden" value="<?php echo $severity; ?>" name="severity" />
                </TR>
            </TABLE>
        </FORM>
    </div>
    </BODY>
</HTML>