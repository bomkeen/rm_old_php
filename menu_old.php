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
          <TD WIDTH="93%" class="unnamed1" background="#FF99FF"  ><span class="style2">�������ҵ�Ұҹ</span></TD>
        </TR>
        <TR>
          <TD>&nbsp;</TD>
          <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD class="unnamed11" ><a href="body.php" target="rightframe">˹����ѡ</a></TD>
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
          <TD WIDTH="93%" class="unnamed1 style2" background="images/bgmenu1.jpg"  ><font size="2" color="#330033">������������§</font></TD>
        </TR>
        <TR>
          <TD>&nbsp;</TD>
          <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
                                <TR>
                <TD width="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD width="99%" class="unnamed11" ><a href="./person/risk_add.php" target="rightframe"><font size="3" color="#FF0099"><U>������������§</U></font></a></TD>
              </TR>
          </TABLE></TD>
        </TR>

		<TR>
          <TD>&nbsp;</TD>
          <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
                                <TR>
                <TD width="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD width="99%" class="unnamed11" ><a href="./refresh.php" target="rightframe"><font size="2" color="#FF0099">��Ѻ˹���á/¡��ԡ��¡��</font></a></TD>
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
          <TD WIDTH="93%" class="unnamed1 style2" background="images/bgmenu1.jpg"  ><font size="2" color="#330033">��§ҹ�ͧ þ. ����</font></TD>
        </TR>
        
		<? if( $level=='2'or $level=='3'or $level=='4' or $level=='5' ){ ?>
		<TR>
           <TD>&nbsp;</TD>
          <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
               <TR>
                <TD width="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
               <TD width="99%" class="unnamed11" ><a href="./sd/d1_d2_wardedit.php" target="rightframe"><font color="#FF0099">��������§���Ἱ� �١��§ҹ </font></a></TD>
               </TR>
		</TABLE></TD>
        </TR>
		<? if( $level=='2'or $level=='3'or $level=='4' or $level=='5'){ ?>
		<TR>
           <TD>&nbsp;</TD>
          <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
               <TR>
                <TD width="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
               <TD width="99%" class="unnamed11" ><a href="./sd/d1_d2_by_user.php" target="rightframe"><font color="#FF0099">��ػ�����§ҹ�ҡ�ؤ�ҡ��Ἱ�</font></a></TD>
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
               <TD width="99%" class="unnamed11" ><a href="./sd/d1_d2_matrix.php" target="rightframe"><font color="#FF0099">��§ҹ Matrix For Somdej</font></a></TD>
               </TR>
		</TABLE></TD>
        </TR>
		<? } ?> 
<!-- End menu -->


</TABLE></TD>
  </TR>
   <? } ?>  
	  <!-- <font size="2" color="#FF0000">��§ҹ�ͧ þ. ����</font> -->
	
	  <? if($level =='1'or $level=='2'or $level=='3'or $level=='4'or $level=='5'){ ?>
  <TR>
    <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
        <TR background="images/bgmenu1.jpg" >
          <TD WIDTH="7%" background="images/bgmenu1.jpg" ><IMG SRC="images/notes-add.gif" WIDTH="13" HEIGHT="13"></TD>
          <TD WIDTH="93%" class="unnamed1 style2" background="images/bgmenu1.jpg"  ><font size="2" color="#330033">����/���/ź ��������§(�ؤ��)</font></TD>
        </TR>
        <TR>
          <TD>&nbsp;</TD>
          <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
                                                  <TR>
                <TD width="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD width="99%" class="unnamed11" ><a href="./person/d1_d2_risk.php" target="rightframe"><font size="2" color="#FF0099">����/���/ź ��������§</font></a></TD>
              </TR>
                                <TR>
                <TD width="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD width="99%" class="unnamed11" ><a href="./person/d1_d2_risk_edit.php" target="rightframe"><font size="2" color="#FF0099">��������§��ͧ���</font></a></TD>
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
          <TD WIDTH="93%" class="unnamed1 style2" background="images/bgmenu1.jpg"  ><font size="2" color="#330033">����/���/ź ��������§(Ἱ�/����)</font></TD>
        </TR>
        <TR>
          <TD>&nbsp;</TD>
          <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
                                                  <TR>
                <TD width="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD width="99%" class="unnamed11" ><a href="./head/d1_d2_risk.php" target="rightframe"><font size="2" color="#FF0099">����/���/ź ��������§</font></a></TD>
              </TR>
                                <TR>
                <TD width="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD width="99%" class="unnamed11" ><a href="./head/d1_d2_risk_edit.php" target="rightframe"><font size="2" color="#FF0099">��������§��ͧ���</font></a></TD>
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
          <TD WIDTH="93%" class="unnamed1 style2" background="images/bgmenu1.jpg"  > <font size="2" color="#330033">����/���/ź ��������§(���)</font></TD>
        </TR>
        <TR>
          <TD>&nbsp;</TD>
          <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
                                                  <TR>
                <TD width="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD width="99%" class="unnamed11" ><a href="./manager_risk/d1_d2_risk_edit.php" target="rightframe"><font size="2" color="#FF0099">����/���/ź ��������§</a></font></TD>
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
          <TD WIDTH="93%" class="unnamed1 style2" background="images/bgmenu1.jpg"  >�������ҵ�Ұҹ</TD>
        </TR>
        <TR>
          <TD>&nbsp;</TD>
          <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
                                <TR>
                <TD width="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD width="99%" class="unnamed11" ><a href="user.php" target="rightframe">����/���/ź ������к�</a></TD>
              </TR>
              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="AdminRiskPro.php" target="rightframe" class="unnamed11" >�������������§</a></TD>
              </TR>
              <TR>
                <TD WIDTH="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD WIDTH="99%" ><a href="AdminProDetail.php" target="rightframe" class="unnamed11" >��Ǵ��������§</a></TD>
              </TR>
              <TR>
                <TD WIDTH="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD WIDTH="99%" ><a href="AdminProDetailSub.php" target="rightframe" class="unnamed11" >��������´��Ǵ</a></TD>
              </TR>
              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="AdminRiskType.php" target="rightframe" class="unnamed11" >��������§��ҹ</a></TD>
              </TR>
              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="AdminRiskLevel.php" target="rightframe" class="unnamed11" > �дѺ�����ع�ç</a></TD>
              </TR>
                            <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="AdminRiskSystem.php" target="rightframe" class="unnamed11" > �к�</a></TD>
              </TR>
              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="AdminDepartment.php" target="rightframe" class="unnamed11" > ˹��§ҹ</a></TD>
              </TR>

                            <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="AdminDepartmentEdit.php" target="rightframe" class="unnamed11" >���ǹ </a></TD>
              </TR>
                            <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="AdminNatureProblem.php" target="rightframe" class="unnamed11" >�ѡɳС���Դ </a></TD>
              </TR>
                            <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="AdminTheTrack.php" target="rightframe" class="unnamed11" >�ѡɳС�õԴ��� </a></TD>
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
          <TD WIDTH="93%" class="unnamed1 style2" background="images/bgmenu1.jpg"  >��§ҹ��ºؤ��</TD>
        </TR>
        <TR>
          <TD>&nbsp;</TD>
          <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
                                <TR>
                <TD width="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD width="99%" class="unnamed11" ><a href="./person/d1_d2_clinic.php" target="rightframe">��§ҹ��չԡ</a></TD>
              </TR>
              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="./person/d1_d2_system.php" target="rightframe" class="unnamed11" >��§ҹ�к�</a></TD>
              </TR>
              <TR>
                <TD WIDTH="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD WIDTH="99%" ><a href="./person/d1_d2_source_code.php" target="rightframe" class="unnamed11" >��§ҹ���觷����</a></TD>
              </TR>
              <TR>
                <TD WIDTH="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD WIDTH="99%" ><a href="./person/d1_d2_ward.php" target="rightframe" class="unnamed11" >˹��§ҹ��§ҹ</a></TD>
              </TR>
              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="./person/d1_d2_wardedit.php" target="rightframe" class="unnamed11" >˹��§ҹ���</a></TD>
              </TR>
              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="./person/d1_d2_review.php" target="rightframe" class="unnamed11" >��§ҹ��÷��ǹ</a></TD>
              </TR>
                            <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="./person/d1_d2_reborn.php" target="rightframe" class="unnamed11" >��§ҹ�ѡɳС���Դ</a></TD>
              </TR>

              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="./person/d1_d2_follow.php" target="rightframe" class="unnamed11" >��§ҹ�ѡɳС�õԴ���</a></TD>
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
          <TD WIDTH="93%" class="unnamed1 style2" background="images/bgmenu1.jpg"  >��§ҹ���˹��Ἱ�/���§ҹ</TD>
        </TR>
        <TR>
          <TD>&nbsp;</TD>
          <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
                                <TR>
                <TD width="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD width="99%" class="unnamed11" ><a href="./head/d1_d2_clinic.php" target="rightframe">��§ҹ��չԡ</a></TD>
              </TR>
               <TR>
                <TD width="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD width="99%" class="unnamed11" ><a href="./head/d1_d2_risk_pro.php" target="rightframe">��§ҹ�������������§</a></TD>
              </TR>
              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="./head/d1_d2_system.php" target="rightframe" class="unnamed11" >��§ҹ�к�</a></TD>
              </TR>
              <TR>
                <TD WIDTH="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD WIDTH="99%" ><a href="./head/d1_d2_source_code.php" target="rightframe" class="unnamed11" >��§ҹ���觷����</a></TD>
              </TR>
              <TR>
                <TD WIDTH="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD WIDTH="99%" ><a href="./head/d1_d2_ward.php" target="rightframe" class="unnamed11" >˹��§ҹ��§ҹ</a></TD>
              </TR>
              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="./head/d1_d2_wardedit.php" target="rightframe" class="unnamed11" >˹��§ҹ���</a></TD>
              </TR>
              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="./head/d1_d2_review.php" target="rightframe" class="unnamed11" >��§ҹ��÷��ǹ</a></TD>
              </TR>
                            <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="./head/d1_d2_reborn.php" target="rightframe" class="unnamed11" >��§ҹ�ѡɳС���Դ</a></TD>
              </TR>
              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="./head/d1_d2_follow.php" target="rightframe" class="unnamed11" >��§ҹ�ѡɳС�õԴ���</a></TD>
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
          <TD WIDTH="93%" class="unnamed1 style2" background="images/bgmenu1.jpg"  ><font size="2" color="#330033">��§ҹ�������ä�������§</font></TD>
        </TR>
        <TR>
          <TD>&nbsp;</TD>
          <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
                                <TR>
                <TD width="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD width="99%" class="unnamed11" ><a href="./manager_risk/d1_d2_clinic.php" target="rightframe"><font size="2" color="#FF0099">��§ҹ��չԡ</a></font></TD>
              </TR>
                                              <TR>
                <TD width="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD width="99%" class="unnamed11" ><a href="./manager_risk/d1_d2_risk_pro.php" target="rightframe"><font size="2" color="#FF0099">��§ҹ�������������§</a></font></TD>
              </TR>
              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="./manager_risk/d1_d2_system.php" target="rightframe" class="unnamed11" ><font size="2" color="#FF0099">��§ҹ�к�</a></font></TD>
              </TR>
              <TR>
                <TD WIDTH="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD WIDTH="99%" ><a href="./manager_risk/d1_d2_source_code.php" target="rightframe" class="unnamed11" ><font size="2" color="#FF0099">��§ҹ���觷����</a></font></TD>
              </TR>
              <TR>
                <TD WIDTH="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD WIDTH="99%" ><a href="./manager_risk/d1_d2_ward.php" target="rightframe" class="unnamed11" ><font size="2" color="#FF0099">˹��§ҹ��§ҹ</a></font></TD>
              </TR>
              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="./manager_risk/d1_d2_wardedit.php" target="rightframe" class="unnamed11" ><font size="2" color="#FF0099">˹��§ҹ���</a></font></TD>
              </TR>
              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="./manager_risk/d1_d2_review.php" target="rightframe" class="unnamed11" ><font size="2" color="#FF0099">��§ҹ��÷��ǹ</a></font></TD>
              </TR>
                            <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="./manager_risk/d1_d2_reborn.php" target="rightframe" class="unnamed11" ><font size="2" color="#FF0099">��§ҹ�ѡɳС���Դ</a></font></TD>
              </TR>
                           <!--  <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="./manager_risk/d1_d2_matrix.php" target="rightframe" class="unnamed11" >��§ҹ Matrix</a></font></TD>
              </TR> -->
              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD ><a href="./manager_risk/d1_d2_follow.php" target="rightframe" class="unnamed11" ><font size="2" color="#FF0099">��§ҹ�ѡɳС�õԴ���</a></font></TD>
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
          <TD WIDTH="93%" class="unnamed1 style2" background="images/bgmenu1.jpg"  ><font size="2" color="#330033">��¼���ӹ�¡��</font></TD>
        </TR>
        <TR>
          <TD>&nbsp;</TD>
          <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
                                <TR>
                <TD width="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD width="99%" class="unnamed11" ><a href="./manager/d1_d2_clinic.php" target="rightframe"><font size="2" color="#FF0099">��§ҹ��չԡ��ͧ������ѧ</a></font></TD>
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
          <TD WIDTH="93%" class="unnamed1 style2" background="images/bgmenu1.jpg"  ><font size="2" color="#330033">����ǡѺ�����</font></TD>
        </TR>
        <TR>
          <TD>&nbsp;</TD>
          <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
              <TR>
                <TD><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD class="unnamed11" ><a href="editpass.php" target="rightframe" class="unnamed1"><font size="2" color="#FF0099">������ʼ�ҹ</a></font></TD>
              </TR>
              <TR>
                <TD width="1%"><IMG SRC="images/small_submit.gif" WIDTH="11" HEIGHT="11"></TD>
                <TD width="99%" class="unnamed11" ><a href="about.php" target="rightframe" class="unnamed1"><font size="2" color="#FF0099">����ǡѺ�����</a></font></TD>
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
