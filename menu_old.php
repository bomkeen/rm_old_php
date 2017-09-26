<?
session_start();
?>
<?
/*

*/
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<head>
<title>XP Menu Bar</title>
<base target="mainFrame">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-874">
<LINK HREF="stylesheet.css" REL="stylesheet" TYPE="text/css">
<style type="text/css">


.style2 {
	color: #2F63D0;
	font-weight: bold;
}
body {
	background-image: url(images/bgmenu.jpg);
}
</style>
<script language="JavaScript" type="text/JavaScript">
<!--

<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
-->
//-->
</script>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" >
<TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CLASS="Gradient2">
   <? if($level =='9' or $level =='8'){ ?>
  <TR>
    <TD HEIGHT="49"><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
        <TR background="images/bgmenu1.jpg" >
          <TD WIDTH="7%" background="images/bgmenu1.jpg" ><IMG SRC="images/notes-add.gif" WIDTH="13" HEIGHT="13"></TD>
          <TD WIDTH="93%" class="unnamed1" background="#FF99FF"  ><span class="style2">ข้อมูลมาตราฐาน</span></TD>
        </TR>
        <TR>
          <TD>&nbsp;</TD>
          <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD class="unnamed11" ><a href="body.php" target="rightframe">หน้าหลัก</a></TD>
              </TR>


          </TABLE></TD>
        </TR>
    </TABLE></TD>
  </TR>

  <!-- Start menu -->
     <? } ?>  <? if($level =='1'or $level=='2'or $level=='3'or $level=='4'or $level=='5'){ ?>
  <TR>
    <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
        <TR background="images/bgmenu1.jpg" >
          <TD WIDTH="7%" background="images/bgmenu1.jpg" ><IMG SRC="images/notes-add.gif" WIDTH="13" HEIGHT="13"></TD>
          <TD WIDTH="93%" class="unnamed1 style2" background="images/bgmenu1.jpg"  ><font size="2" color="#330033">เพิ่มความเสี่ยง</font></TD>
        </TR>
        <TR>
          <TD>&nbsp;</TD>
          <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
                                <TR>
                <TD width="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD width="99%" class="unnamed11" ><a href="./person/risk_add.php" target="rightframe"><font size="3" color="#FF0099"><U>เพิ่มความเสี่ยง</U></font></a></TD>
              </TR>
          </TABLE></TD>
        </TR>

		<TR>
          <TD>&nbsp;</TD>
          <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
                                <TR>
                <TD width="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD width="99%" class="unnamed11" ><a href="./refresh.php" target="rightframe"><font size="2" color="#FF0099">กลับหน้าแรก/ยกเลิกรายการ</font></a></TD>
              </TR>
          </TABLE></TD>
        </TR>
    </TABLE></TD>
  </TR>
   
   <? } ?>  
<!-- End main menu -->

    <? if($level =='1'or $level=='2'or $level=='3'or $level=='4'or $level=='5'){ ?>
  <TR>
    <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
        <TR background="images/bgmenu1.jpg" >
          <TD WIDTH="7%" background="images/bgmenu1.jpg" ><IMG SRC="images/notes-add.gif" WIDTH="13" HEIGHT="13"></TD>
          <TD WIDTH="93%" class="unnamed1 style2" background="images/bgmenu1.jpg"  ><font size="2" color="#330033">รายงานของ รพ. สมเด็จ</font></TD>
        </TR>
        
		<? if( $level=='2'or $level=='3'or $level=='4' or $level=='5' ){ ?>
		<TR>
           <TD>&nbsp;</TD>
          <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
               <TR>
                <TD width="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
               <TD width="99%" class="unnamed11" ><a href="./sd/d1_d2_wardedit.php" target="rightframe"><font color="#FF0099">ความเสี่ยงที่แผนก ถูกรายงาน </font></a></TD>
               </TR>
		</TABLE></TD>
        </TR>
		<? if( $level=='2'or $level=='3'or $level=='4' or $level=='5'){ ?>
		<TR>
           <TD>&nbsp;</TD>
          <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
               <TR>
                <TD width="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
               <TD width="99%" class="unnamed11" ><a href="./sd/d1_d2_by_user.php" target="rightframe"><font color="#FF0099">สรุปการรายงานจากบุคลากรในแผนก</font></a></TD>
               </TR>
		</TABLE></TD>
        </TR>
		<? } ?> 
		<? } ?>  
<!-- start sub menu -->

		<? if( $level=='5' ){ ?>
		<TR>
           <TD>&nbsp;</TD>
          <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
               <TR>
                <TD width="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
               <TD width="99%" class="unnamed11" ><a href="./sd/d1_d2_matrix.php" target="rightframe"><font color="#FF0099">รายงาน Matrix For Somdej</font></a></TD>
               </TR>
		</TABLE></TD>
        </TR>
		<? } ?> 
<!-- End menu -->


</TABLE></TD>
  </TR>
   <? } ?>  
	  <!-- <font size="2" color="#FF0000">รายงานของ รพ. สมเด็จ</font> -->
	
	  <? if($level =='1'or $level=='2'or $level=='3'or $level=='4'or $level=='5'){ ?>
  <TR>
    <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
        <TR background="images/bgmenu1.jpg" >
          <TD WIDTH="7%" background="images/bgmenu1.jpg" ><IMG SRC="images/notes-add.gif" WIDTH="13" HEIGHT="13"></TD>
          <TD WIDTH="93%" class="unnamed1 style2" background="images/bgmenu1.jpg"  ><font size="2" color="#330033">ค้นหา/แก้ไข/ลบ ความเสี่ยง(บุคคล)</font></TD>
        </TR>
        <TR>
          <TD>&nbsp;</TD>
          <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
                                                  <TR>
                <TD width="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD width="99%" class="unnamed11" ><a href="./person/d1_d2_risk.php" target="rightframe"><font size="2" color="#FF0099">ค้นหา/แก้ไข/ลบ ความเสี่ยง</font></a></TD>
              </TR>
                                <TR>
                <TD width="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD width="99%" class="unnamed11" ><a href="./person/d1_d2_risk_edit.php" target="rightframe"><font size="2" color="#FF0099">ความเสี่ยงต้องแก้ไข</font></a></TD>
              </TR>
          </TABLE></TD>
        </TR>
    </TABLE></TD>
  </TR>
    
  
        <? } ?>  <? if($level=='2'or $level=='3'or $level=='4'or $level=='5'){ ?>
  <TR>
    <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
        <TR background="images/bgmenu1.jpg" >
          <TD WIDTH="7%" background="images/bgmenu1.jpg" ><IMG SRC="images/notes-add.gif" WIDTH="13" HEIGHT="13"></TD>
          <TD WIDTH="93%" class="unnamed1 style2" background="images/bgmenu1.jpg"  ><font size="2" color="#330033">ค้นหา/แก้ไข/ลบ ความเสี่ยง(แผนก/ฝ่าย)</font></TD>
        </TR>
        <TR>
          <TD>&nbsp;</TD>
          <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
                                                  <TR>
                <TD width="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD width="99%" class="unnamed11" ><a href="./head/d1_d2_risk.php" target="rightframe"><font size="2" color="#FF0099">ค้นหา/แก้ไข/ลบ ความเสี่ยง</font></a></TD>
              </TR>
                                <TR>
                <TD width="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD width="99%" class="unnamed11" ><a href="./head/d1_d2_risk_edit.php" target="rightframe"><font size="2" color="#FF0099">ความเสี่ยงต้องแก้ไข</font></a></TD>
              </TR>
          </TABLE></TD>
        </TR>
    </TABLE></TD>
  </TR>
      <? } ?>  <? if($level=='3'or $level=='4'or $level=='5'){ ?>

  
  <TR>
    <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
        <TR background="images/bgmenu1.jpg" >
          <TD WIDTH="7%" background="images/bgmenu1.jpg" ><IMG SRC="images/notes-add.gif" WIDTH="13" HEIGHT="13"></TD>
          <TD WIDTH="93%" class="unnamed1 style2" background="images/bgmenu1.jpg"  > <font size="2" color="#330033">ค้นหา/แก้ไข/ลบ ความเสี่ยง(รวม)</font></TD>
        </TR>
        <TR>
          <TD>&nbsp;</TD>
          <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
                                                  <TR>
                <TD width="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD width="99%" class="unnamed11" ><a href="./manager_risk/d1_d2_risk_edit.php" target="rightframe"><font size="2" color="#FF0099">ค้นหา/แก้ไข/ลบ ความเสี่ยง</a></font></TD>
              </TR>

          </TABLE></TD>
        </TR>
    </TABLE></TD>
  </TR>
     
 
  
    <? } ?>  <? if($level =='5'){ ?>
  <TR>
    <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
        <TR background="images/bgmenu1.jpg" >
          <TD WIDTH="7%" background="images/bgmenu1.jpg" ><IMG SRC="images/notes-add.gif" WIDTH="13" HEIGHT="13"></TD>
          <TD WIDTH="93%" class="unnamed1 style2" background="images/bgmenu1.jpg"  >ข้อมูลมาตราฐาน</TD>
        </TR>
        <TR>
          <TD>&nbsp;</TD>
          <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
                                <TR>
                <TD width="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD width="99%" class="unnamed11" ><a href="user.php" target="rightframe">เพิ่ม/แก้ไข/ลบ ผู้ใช้ระบบ</a></TD>
              </TR>
              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="AdminRiskPro.php" target="rightframe" class="unnamed11" >โปรแกรมความเสี่ยง</a></TD>
              </TR>
              <TR>
                <TD WIDTH="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD WIDTH="99%" ><a href="AdminProDetail.php" target="rightframe" class="unnamed11" >หมวดความเสี่ยง</a></TD>
              </TR>
              <TR>
                <TD WIDTH="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD WIDTH="99%" ><a href="AdminProDetailSub.php" target="rightframe" class="unnamed11" >รายละเอียดหมวด</a></TD>
              </TR>
              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="AdminRiskType.php" target="rightframe" class="unnamed11" >ความเสี่ยงด้าน</a></TD>
              </TR>
              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="AdminRiskLevel.php" target="rightframe" class="unnamed11" > ระดับความรุนแรง</a></TD>
              </TR>
                            <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="AdminRiskSystem.php" target="rightframe" class="unnamed11" > ระบบ</a></TD>
              </TR>
              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="AdminDepartment.php" target="rightframe" class="unnamed11" > หน่วยงาน</a></TD>
              </TR>

                            <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="AdminDepartmentEdit.php" target="rightframe" class="unnamed11" >ทบทวน </a></TD>
              </TR>
                            <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="AdminNatureProblem.php" target="rightframe" class="unnamed11" >ลักษณะการเกิด </a></TD>
              </TR>
                            <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="AdminTheTrack.php" target="rightframe" class="unnamed11" >ลักษณะการติดตาม </a></TD>
              </TR>

          </TABLE></TD>
        </TR>
    </TABLE></TD>
  </TR>
 

  
   <? } ?>  <? if($level =='99'){ ?>
  <TR>
    <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
        <TR background="images/bgmenu1.jpg" >
          <TD WIDTH="7%" background="images/bgmenu1.jpg" ><IMG SRC="images/notes-add.gif" WIDTH="13" HEIGHT="13"></TD>
          <TD WIDTH="93%" class="unnamed1 style2" background="images/bgmenu1.jpg"  >รายงานรายบุคคล</TD>
        </TR>
        <TR>
          <TD>&nbsp;</TD>
          <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
                                <TR>
                <TD width="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD width="99%" class="unnamed11" ><a href="./person/d1_d2_clinic.php" target="rightframe">รายงานคลีนิก</a></TD>
              </TR>
              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="./person/d1_d2_system.php" target="rightframe" class="unnamed11" >รายงานระบบ</a></TD>
              </TR>
              <TR>
                <TD WIDTH="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD WIDTH="99%" ><a href="./person/d1_d2_source_code.php" target="rightframe" class="unnamed11" >รายงานแหล่งที่มา</a></TD>
              </TR>
              <TR>
                <TD WIDTH="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD WIDTH="99%" ><a href="./person/d1_d2_ward.php" target="rightframe" class="unnamed11" >หน่วยงานรายงาน</a></TD>
              </TR>
              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="./person/d1_d2_wardedit.php" target="rightframe" class="unnamed11" >หน่วยงานแก้ไข</a></TD>
              </TR>
              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="./person/d1_d2_review.php" target="rightframe" class="unnamed11" >รายงานการทบทวน</a></TD>
              </TR>
                            <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="./person/d1_d2_reborn.php" target="rightframe" class="unnamed11" >รายงานลักษณะการเกิด</a></TD>
              </TR>

              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="./person/d1_d2_follow.php" target="rightframe" class="unnamed11" >รายงานลักษณะการติดตาม</a></TD>
              </TR>


          </TABLE></TD>
        </TR>
    </TABLE></TD>
  </TR>

  
    <? } ?>  <? if($level=='99'){ ?>
  <TR>
    <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
        <TR background="images/bgmenu1.jpg" >
          <TD WIDTH="7%" background="images/bgmenu1.jpg" ><IMG SRC="images/notes-add.gif" WIDTH="13" HEIGHT="13"></TD>
          <TD WIDTH="93%" class="unnamed1 style2" background="images/bgmenu1.jpg"  >รายงานหัวหน้าแผนก/ฝ่ายงาน</TD>
        </TR>
        <TR>
          <TD>&nbsp;</TD>
          <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
                                <TR>
                <TD width="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD width="99%" class="unnamed11" ><a href="./head/d1_d2_clinic.php" target="rightframe">รายงานคลีนิก</a></TD>
              </TR>
               <TR>
                <TD width="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD width="99%" class="unnamed11" ><a href="./head/d1_d2_risk_pro.php" target="rightframe">รายงานโปรแกรมความเสี่ยง</a></TD>
              </TR>
              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="./head/d1_d2_system.php" target="rightframe" class="unnamed11" >รายงานระบบ</a></TD>
              </TR>
              <TR>
                <TD WIDTH="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD WIDTH="99%" ><a href="./head/d1_d2_source_code.php" target="rightframe" class="unnamed11" >รายงานแหล่งที่มา</a></TD>
              </TR>
              <TR>
                <TD WIDTH="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD WIDTH="99%" ><a href="./head/d1_d2_ward.php" target="rightframe" class="unnamed11" >หน่วยงานรายงาน</a></TD>
              </TR>
              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="./head/d1_d2_wardedit.php" target="rightframe" class="unnamed11" >หน่วยงานแก้ไข</a></TD>
              </TR>
              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="./head/d1_d2_review.php" target="rightframe" class="unnamed11" >รายงานการทบทวน</a></TD>
              </TR>
                            <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="./head/d1_d2_reborn.php" target="rightframe" class="unnamed11" >รายงานลักษณะการเกิด</a></TD>
              </TR>
              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="./head/d1_d2_follow.php" target="rightframe" class="unnamed11" >รายงานลักษณะการติดตาม</a></TD>
              </TR>


          </TABLE></TD>
        </TR>
    </TABLE></TD>
  </TR>
-->




    <? } ?>  <? if($level=='3'or $level=='4'or $level=='5'){ ?>
  <TR>
    <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
        <TR background="images/bgmenu1.jpg" >
          <TD WIDTH="7%" background="images/bgmenu1.jpg" ><IMG SRC="images/notes-add.gif" WIDTH="13" HEIGHT="13"></TD>
          <TD WIDTH="93%" class="unnamed1 style2" background="images/bgmenu1.jpg"  ><font size="2" color="#330033">รายงานผู้บริหารความเสี่ยง</font></TD>
        </TR>
        <TR>
          <TD>&nbsp;</TD>
          <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
                                <TR>
                <TD width="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD width="99%" class="unnamed11" ><a href="./manager_risk/d1_d2_clinic.php" target="rightframe"><font size="2" color="#FF0099">รายงานคลีนิก</a></font></TD>
              </TR>
                                              <TR>
                <TD width="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD width="99%" class="unnamed11" ><a href="./manager_risk/d1_d2_risk_pro.php" target="rightframe"><font size="2" color="#FF0099">รายงานโปรแกรมความเสี่ยง</a></font></TD>
              </TR>
              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="./manager_risk/d1_d2_system.php" target="rightframe" class="unnamed11" ><font size="2" color="#FF0099">รายงานระบบ</a></font></TD>
              </TR>
              <TR>
                <TD WIDTH="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD WIDTH="99%" ><a href="./manager_risk/d1_d2_source_code.php" target="rightframe" class="unnamed11" ><font size="2" color="#FF0099">รายงานแหล่งที่มา</a></font></TD>
              </TR>
              <TR>
                <TD WIDTH="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD WIDTH="99%" ><a href="./manager_risk/d1_d2_ward.php" target="rightframe" class="unnamed11" ><font size="2" color="#FF0099">หน่วยงานรายงาน</a></font></TD>
              </TR>
              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="./manager_risk/d1_d2_wardedit.php" target="rightframe" class="unnamed11" ><font size="2" color="#FF0099">หน่วยงานแก้ไข</a></font></TD>
              </TR>
              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="./manager_risk/d1_d2_review.php" target="rightframe" class="unnamed11" ><font size="2" color="#FF0099">รายงานการทบทวน</a></font></TD>
              </TR>
                            <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="./manager_risk/d1_d2_reborn.php" target="rightframe" class="unnamed11" ><font size="2" color="#FF0099">รายงานลักษณะการเกิด</a></font></TD>
              </TR>
                           <!--  <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="./manager_risk/d1_d2_matrix.php" target="rightframe" class="unnamed11" >รายงาน Matrix</a></font></TD>
              </TR> -->
              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="./manager_risk/d1_d2_follow.php" target="rightframe" class="unnamed11" ><font size="2" color="#FF0099">รายงานลักษณะการติดตาม</a></font></TD>
              </TR>


          </TABLE></TD>
        </TR>
    </TABLE></TD>
  </TR>

    <? } ?>  <? if($level=='4'or $level=='5'){ ?>
  <TR>
    <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
        <TR background="images/bgmenu1.jpg" >
          <TD WIDTH="7%" background="images/bgmenu1.jpg" ><IMG SRC="images/notes-add.gif" WIDTH="13" HEIGHT="13"></TD>
          <TD WIDTH="93%" class="unnamed1 style2" background="images/bgmenu1.jpg"  ><font size="2" color="#330033">รายผู้อำนวยการ</font></TD>
        </TR>
        <TR>
          <TD>&nbsp;</TD>
          <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
                                <TR>
                <TD width="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD width="99%" class="unnamed11" ><a href="./manager/d1_d2_clinic.php" target="rightframe"><font size="2" color="#FF0099">รายงานคลีนิกต้องเฝ้าระวัง</a></font></TD>
              </TR>
              


          </TABLE></TD>
        </TR>
    </TABLE></TD>
  </TR>


<? } ?>
  <TR>
    <TD HEIGHT="49"><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
        <TR background="images/bgmenu1.jpg"  >
          <TD WIDTH="7%" background="images/bgmenu1.jpg" ><IMG SRC="images/notes-add.gif" WIDTH="13" HEIGHT="13"></TD>
          <TD WIDTH="93%" class="unnamed1 style2" background="images/bgmenu1.jpg"  ><font size="2" color="#330033">เกี่ยวกับโปรแกรม</font></TD>
        </TR>
        <TR>
          <TD>&nbsp;</TD>
          <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD class="unnamed11" ><a href="editpass.php" target="rightframe" class="unnamed1"><font size="2" color="#FF0099">แก้ไขรหัสผ่าน</a></font></TD>
              </TR>
              <TR>
                <TD width="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD width="99%" class="unnamed11" ><a href="about.php" target="rightframe" class="unnamed1"><font size="2" color="#FF0099">เกี่ยวกับโปรแกรม</a></font></TD>
              </TR>
          </TABLE></TD>
        </TR>
    </TABLE></TD>
  </TR>
  <TR>
    <TD HEIGHT="49">&nbsp;</TD>
  </TR>
  <TR>
    <TD HEIGHT="88">&nbsp;</TD>
  </TR>
</TABLE>

<!--End XP Style Menu-->

</html>
