<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
<HEAD>
<TITLE></TITLE>
<meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″ />
<LINK HREF="fileinclude/stylesheet.css" REL="stylesheet" TYPE="text/css">
</HEAD>

<BODY BGCOLOR="ffffff" LEFTMARGIN="0" TOPMARGIN="0">
<?php 
include('function/connect.php');
include('function/user_detail.php');
?>


<TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
     <TR> 
          <TD>&nbsp;</TD>
     </TR>
     <TR> 
          <TD>&nbsp;</TD>
     </TR>
     <TR>
       <TD>&nbsp;</TD>
     </TR>
     <TR>
       <TD>&nbsp;</TD>
     </TR>
     <TR> 
          <TD><DIV ALIGN="CENTER">
		  <?php echo $_SESSION['level'];?>
		  <FONT SIZE="4" COLOR="#009900">เข้าระบบโดย <?php echo $yourname ;?> แผนก <?php echo $yourdep ; ?> สังกัดทีม <?php echo $yourdep_sec ;?></FONT></DIV></TD>
     </TR>
     <TR>
          <TD><div align="center"><img src="images/bgbody.jpg" width="400" height="300"></div></TD>
     </TR>
     <TR>
          <TD>&nbsp;</TD>
     </TR>
     <TR>
          <TD><div align="center" class="HeadBody"></div></TD>
     </TR>
     <TR>
          <TD><DIV ALIGN="CENTER"></DIV></TD>
     </TR>
     <TR> 
          <TD><DIV ALIGN="CENTER"> 
                    <TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
                         <TR height=10> 
                              <TD></TD>
                         </TR>
                         <TR> 
                              <TD CLASS="HeadLogin"><DIV ALIGN="CENTER"></DIV></TD>
                         </TR>
                         <TR height=10> 
                              <TD></TD>
                         </TR>
                    </TABLE>
               </DIV></TD>
     </TR>
</TABLE>

</HTML>
