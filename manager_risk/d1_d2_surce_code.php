<?
session_start();
?>
<HTML>
<HEAD><TITLE>:: โปรแกรมความเสี่ยง ::</TITLE>
    <script type="text/javascript" src="calendarDateInput.js">
</script>
</HEAD>
<BODY>
        <form METHOD="POST" ACTION="risk_report_source_code.php">
            <table bgcolor="#FFCCCC" border="0" width="800" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td bgcolor="#dddddd" align="center" colspan="4"><font size=4 face=Tahoma, MS Sans Serif>เลือกวันในการดูข้อมูล </font> </td>

                </tr>
                
<tr>
             <td>ตั้งแต่วันที่</td><td><script>DateInput('startdate', true, 'YYYY-MM-DD')</script></td>
     
            <td>ถึงวันที่</td><td><script>DateInput('enddate', true, 'YYYY-MM-DD'
            )</script></td>
      
</tr>     
                

         
                <tr class="cssContent">
 

                    <td align="right" colspan="4">
                        <input type="submit" name="btnInsert" value="          ตกลง          "/>
                    </td>
                </tr>
            </table>
            
        </form>
 
</BODY>
</HTML>