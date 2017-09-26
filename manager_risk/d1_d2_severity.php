<?
session_start();
?>
<html>
    <body>
        <form METHOD="POST" ACTION="risk_report_severity.php">
            <table border="5" width="100%" align="center" cellpadding="5" cellspacing="5">
                <tr>
                    <td bgcolor="" align="center" colspan="4"><font size=4 face=Tahoma, MS Sans Serif>เลือกวันที่ และด้านความเสี่ยง ในการดูข้อมูลความเสี่ยง </font> </td>

                </tr>
            <TR>
      <TD>ระดับความรุนแรง</TD>
      <TD>
	  <SELECT NAME="severity">
	  <OPTION VALUE="0">เลือกระดับความรุนแรง</OPTION>
	  <?
		 include "connect.php";
         mysql_query("set NAMES tis620");
		$sql="select * from severity";
		$result=mysql_db_query($dbname,$sql);
	  	while($rs=mysql_fetch_array($result)) {
			$severity=$rs[severity_text];
			
			echo "<OPTION VALUE='$severity'>$severity</OPTION>";
		}
	  ?>
      </SELECT>
	  *</TD>
    </TR>  
    
                <tr>
                <td align="right"> เริ่มวันที่ : </td>
                     <td bgcolor="#dddddd"align="center">
                    <select name="d1">
                        <option value="01"> <? echo "01";?></option>
                        <option value="02"> <? echo "02";?></option>
                        <option value="03"> <? echo "03";?></option>
                        <option value="04"> <? echo "04";?></option>
                        <option value="05"> <? echo "05";?></option>
                        <option value="06"> <? echo "06";?></option>
                        <option value="07"> <? echo "07";?></option>
                        <option value="08"> <? echo "08";?></option>
                        <option value="09"> <? echo "09";?></option>
                        <option value="10"> <? echo "10";?></option>
                        <option value="11"> <? echo "11";?></option>
                        <option value="12"> <? echo "12";?></option>
                        <option value="13"> <? echo "13";?></option>
                        <option value="14"> <? echo "14";?></option>
                        <option value="15"> <? echo "15";?></option>
                        <option value="16"> <? echo "16";?></option>
                        <option value="17"> <? echo "17";?></option>
                        <option value="18"> <? echo "18";?></option>
                        <option value="19"> <? echo "19";?></option>
                        <option value="20"> <? echo "20";?></option>
                        <option value="21"> <? echo "21";?></option>
                        <option value="22"> <? echo "22";?></option>
                        <option value="23"> <? echo "23";?></option>
                        <option value="24"> <? echo "24";?></option>
                        <option value="25"> <? echo "25";?></option>
                        <option value="26"> <? echo "26";?></option>
                        <option value="27"> <? echo "27";?></option>
                        <option value="28"> <? echo "28";?></option>
                        <option value="29"> <? echo "29";?></option>
                        <option value="30"> <? echo "30";?></option>
                        <option value="31"> <? echo "31";?></option>
                    </select>
                    <select name="m1">
                        <option value="01" <? if(date('m')== "01"){ echo "selected"; } ?> >มกราคม</option>
                        <option value="02" <? if(date('m')== "02"){ echo "selected"; } ?> >กุมภาพันธ์</option>
                        <option value="03" <? if(date('m')== "03"){ echo "selected"; } ?> >มีนาคม</option>
                        <option value="04" <? if(date('m')== "04"){ echo "selected"; } ?> >เมษายน</option>
                        <option value="05" <? if(date('m')== "05"){ echo "selected"; } ?> >พฤษภาคม</option>
                        <option value="06" <? if(date('m')== "06"){ echo "selected"; } ?> >มิถุนายน</option>
                        <option value="07" <? if(date('m')== "07"){ echo "selected"; } ?> >กรกฎาคม</option>
                        <option value="08" <? if(date('m')== "08"){ echo "selected"; } ?> >สิงหาคม</option>
                        <option value="09" <? if(date('m')== "09"){ echo "selected"; } ?> >กันยายน</option>
                        <option value="10" <? if(date('m')== "10"){ echo "selected"; } ?> >ตุลาคม</option>
                        <option value="11" <? if(date('m')== "11"){ echo "selected"; } ?> >พฤศจิกายน</option>
                        <option value="12" <? if(date('m')== "12"){ echo "selected"; } ?> >ธันวาคม</option>
                    </select>
                    <select name="y1">
                        <option value="2011"> <? echo "2554";?></option>
                        <option value="2010"> <? echo "2553";?></option>
                    </select>



                     ถึง : 
          
                    <select name="d2">
                        <option value="01"> <? echo "01";?></option>
                        <option value="02"> <? echo "02";?></option>
                        <option value="03"> <? echo "03";?></option>
                        <option value="04"> <? echo "04";?></option>
                        <option value="05"> <? echo "05";?></option>
                        <option value="06"> <? echo "06";?></option>
                        <option value="07"> <? echo "07";?></option>
                        <option value="08"> <? echo "08";?></option>
                        <option value="09"> <? echo "09";?></option>
                        <option value="10"> <? echo "10";?></option>
                        <option value="11"> <? echo "11";?></option>
                        <option value="12"> <? echo "12";?></option>
                        <option value="13"> <? echo "13";?></option>
                        <option value="14"> <? echo "14";?></option>
                        <option value="15"> <? echo "15";?></option>
                        <option value="16"> <? echo "16";?></option>
                        <option value="17"> <? echo "17";?></option>
                        <option value="18"> <? echo "18";?></option>
                        <option value="19"> <? echo "19";?></option>
                        <option value="20"> <? echo "20";?></option>
                        <option value="21"> <? echo "21";?></option>
                        <option value="22"> <? echo "22";?></option>
                        <option value="23"> <? echo "23";?></option>
                        <option value="24"> <? echo "24";?></option>
                        <option value="25"> <? echo "25";?></option>
                        <option value="26"> <? echo "26";?></option>
                        <option value="27"> <? echo "27";?></option>
                        <option value="28"> <? echo "28";?></option>
                        <option value="29"> <? echo "29";?></option>
                        <option value="30"> <? echo "30";?></option>
                        <option value="31"> <? echo "31";?></option>
                    </select>
                    <select name="m2">
                        <option value="01" <? if(date('m')== "01"){ echo "selected"; } ?> >มกราคม</option>
                        <option value="02" <? if(date('m')== "02"){ echo "selected"; } ?> >กุมภาพันธ์</option>
                        <option value="03" <? if(date('m')== "03"){ echo "selected"; } ?> >มีนาคม</option>
                        <option value="04" <? if(date('m')== "04"){ echo "selected"; } ?> >เมษายน</option>
                        <option value="05" <? if(date('m')== "05"){ echo "selected"; } ?> >พฤษภาคม</option>
                        <option value="06" <? if(date('m')== "06"){ echo "selected"; } ?> >มิถุนายน</option>
                        <option value="07" <? if(date('m')== "07"){ echo "selected"; } ?> >กรกฎาคม</option>
                        <option value="08" <? if(date('m')== "08"){ echo "selected"; } ?> >สิงหาคม</option>
                        <option value="09" <? if(date('m')== "09"){ echo "selected"; } ?> >กันยายน</option>
                        <option value="10" <? if(date('m')== "10"){ echo "selected"; } ?> >ตุลาคม</option>
                        <option value="11" <? if(date('m')== "11"){ echo "selected"; } ?> >พฤศจิกายน</option>
                        <option value="12" <? if(date('m')== "12"){ echo "selected"; } ?> >ธันวาคม</option>
                    </select>
                    <select name="y2">
                       <option value="2011"> <? echo "2554";?></option>
                        <option value="2010"> <? echo "2553";?></option>
                    </select>
                

         
                <tr class="cssContent">
                    <td align="center">
                        <p><a href="menu_aum.php">ออก</a></p>
                    </td>

                    <td align="right" colspan="3">
                        <input type="submit" name="btnInsert" value="          ตกลง          "/>
                    </td>
                </tr>
            </table>
            <td><center><h4>  <?=$dbname_dw_p?> </h4></center></td>
        </form>

    </body>
</html>