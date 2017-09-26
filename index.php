<?php
@session_destroy();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
    <HEAD>
        <TITLE>ระบบบริหารความเสี่ยง</TITLE>
        <meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″ />
        <link rel="stylesheet" href="./example_files/style.css">
        <SCRIPT language="JavaScript" SRC="fileinclude/javascript.js"></SCRIPT>
        <SCRIPT language="JavaScript">

            function chklogin()
            {
                if (document.frmlogin.username.value == "")
                {
                    alert(" กรุณากรอกชื่อและ Username");
                    document.frmlogin.username.focus();
                } else
                if (document.frmlogin.passwords.value == "")
                {
                    alert("กรุณากรอก Password");
                    document.frmlogin.passwords.focus();
                } else
                {
                    document.frmlogin.submit();
                }
            }


            function en_username() {
                e_k = event.keyCode
                if (e_k == 13) {
                    event.returnValue = false;
                    document.frmlogin.passwords.focus();
                }
            }
            function en_pass() {
                e_k = event.keyCode
                if (e_k == 13) {
                    event.returnValue = false;
                    document.frmlogin.Submits.focus();
                }
            }
        </SCRIPT>
    </HEAD>

    <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" >
        <div class="top_page">Risk  Management </div>

        <!-- main menu -->

        <div class="main_menu">
            <table width="100%" cellspacing="0" cellpadding="0">
                <tbody><tr valign="top">
                        <td>
                            <a href="main.php" >
                                <div><img src="./images/home3.png"></div>

                            </a>
                            <a href="main.php" >
                                <div><img src="./images/home4.png"></div>

                            </a>


                        </td>
                        <td align="right">
                            <!-- user box -->


                        </td>
                    </tr>
                </tbody></table>
        </td>
    </tr>
</tbody>
</div>              
<TR> 
    <TD>&nbsp;</TD>
</TR>
<TR> 
    <TD>&nbsp;</TD>
</TR>
<TR> 
    <TD>&nbsp;</TD>
</TR>
<center> 
    <TABLE WIDTH="449" BORDER="0" CELLSPACING="0" CLASS="DetailBody">
        <TR>
            <TD WIDTH="447" HEIGHT="139">
                <FORM NAME="frmlogin" METHOD="post" ACTION="chklogin.php">
                    <TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" STYLE="border-top: #a4a4a4 1px solid; border-bottom: #a4a4a4 1px solid; border-left: #a4a4a4 1px solid; border-right: #a4a4a4 1px solid;" CLASS="Gradient">
                        <TR> 
                            <TD HEIGHT="57"><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" BGCOLOR="#FFFFFF" >
                                    <TR> 
                                        <TD WIDTH="4%" HEIGHT="55">&nbsp;</TD>
                                        <TD WIDTH="9%"><IMG SRC="images/logokeylogin.gif" WIDTH="51" HEIGHT="51"></TD>
                                        <TD WIDTH="87%"><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
                                                <TR height=10>
                                                    <TD></TD>
                                                </TR>
                                                <TR>

                                                    <TD CLASS="HeadLogin"><div align="left">&nbsp;&nbsp;ระบบบริหารความเสี่ยง </div></TD>
                                                </TR>
                                                <TR height=10>
                                                    <TD></TD>
                                                </TR>
                                            </TABLE></TD>
                                    </TR>
                                </TABLE></TD>
                        </TR>
                        <TR> 
                            <TD HEIGHT="10"  CLASS="DetailBody"><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" background="images/bglogin.jpg" CLASS="DetailBody">
                                    <TR> 
                                        <TD HEIGHT="24" CLASS="DetailBody"><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
                                                <TR> 
                                                    <TD WIDTH="4%"></TD>
                                                    <TD WIDTH="96%" CLASS="DetailLogin">กรุณาระบุ username และ password </TD>
                                                </TR>
                                                <TR> 
                                                    <TD></TD>
                                                    <TD CLASS="DetailLogin"> 
                                                    </TD>
                                                </TR>
                                            </TABLE></TD>
                                    </TR>
                                    <TR> 
                                        <TD HEIGHT="10"></TD>
                                    </TR>
                                    <TR> 
                                        <TD HEIGHT="22"><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CLASS="DetailLogin2">
                                                <TR> 
                                                    <TD WIDTH="40%"><DIV ALIGN="RIGHT">ซื่อผู้ใช้งาน
                                                            :</DIV></TD>
                                                    <TD WIDTH="2%">&nbsp;</TD>
                                                    <TD WIDTH="58%"><INPUT NAME="username" TYPE="text" CLASS="DetailBody" TABINDEX="1" onKeyPress="en_username()" MAXLENGTH="15"></TD>
                                                </TR>
                                                <TR> 
                                                    <TD><DIV ALIGN="RIGHT">รหัสผ่าน
                                                            :</DIV></TD>
                                                    <TD>&nbsp;</TD>
                                                    <TD><INPUT NAME="passwords" TYPE="password" CLASS="DetailBody" id="passwords" TABINDEX="1" onKeyPress="en_pass()" MAXLENGTH="15"></TD>
                                                </TR>
                                            </TABLE></TD>
                                    </TR>
                                    <? if($falselogin==1){?>
                                    <TR> 
                                        <TD HEIGHT="10"></TD>
                                    </TR>
                                    <TR> 
                                        <TD CLASS="FalseLogin"><DIV ALIGN="CENTER">ชื่อ username หรือ รหัสผ่านของท่านไม่ถูกต้อง กรุณาตรวจสอบ</DIV></TD>
                                    </TR>
                                    <? }?>
                                    <TR> 
                                        <TD HEIGHT="10"></TD>
                                    </TR>
                                    <TR> 
                                        <TD HEIGHT="22"><DIV ALIGN="CENTER"> 
                                                <TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CLASS="DetailBody">
                                                    <TR> 
                                                        <TD WIDTH="4%">&nbsp;</TD>

                                                        <TD WIDTH="75%" CLASS="DetailLogin"></TD>
                                                        <TD WIDTH="15%"><DIV ALIGN="RIGHT"> 
                                                                <INPUT NAME="Submits" TYPE="button" CLASS="DetailBody" id="Submits" onClick="chklogin();" VALUE="เข้าสู่ระบบ">
                                                            </DIV></TD>
                                                        <TD WIDTH="6%">&nbsp;</TD>
                                                    </TR>
                                                    <TR height=10> 
                                                        <TD HEIGHT="2" COLSPAN="4"></TD>
                                                    </TR>
                                                </TABLE>
                                            </DIV></TD>
                                    </TR>
                                </TABLE></TD>
                        </TR>
                    </TABLE>
                </FORM>
            </TD>
        </TR>
        <TR>
            <TD valign="top">&nbsp;</TD>
        </TR>
    </TABLE>
</center>

<br>
<center>
</DIV>
<table width="100%" cellspacing="0" cellpadding="0">
    <tbody><tr valign="top">
            <td>
                <a href="main.php" >
                    <div><img src="./images/home6.png"></div>

                </a>


            </td>
            <td align="right">
                <!-- user box -->


            </td>
        </tr>
    </tbody></table>
</center>
</HTML>
