<?
session_start();
?>
<HTML>
<HEAD><TITLE>:: �������������§ ::</TITLE>
    <script type="text/javascript" src="calendarDateInput.js">
</script>
</HEAD>
<BODY>
        <form METHOD="POST" ACTION="risk_report_source_code.php">
            <table bgcolor="#FFCCCC" border="0" width="800" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td bgcolor="#dddddd" align="center" colspan="4"><font size=4 face=Tahoma, MS Sans Serif>���͡�ѹ㹡�ô٢����� </font> </td>

                </tr>
                
<tr>
             <td>������ѹ���</td><td><script>DateInput('startdate', true, 'YYYY-MM-DD')</script></td>
     
            <td>�֧�ѹ���</td><td><script>DateInput('enddate', true, 'YYYY-MM-DD'
            )</script></td>
      
</tr>     
                

         
                <tr class="cssContent">
 

                    <td align="right" colspan="4">
                        <input type="submit" name="btnInsert" value="          ��ŧ          "/>
                    </td>
                </tr>
            </table>
            
        </form>
 
</BODY>
</HTML>