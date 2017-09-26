<?
session_start();
?>
<?include "../level/dep.php";?>
<?
include('../function/connect.php');
include('../function/user_detail.php');
?>



<HTML>
<HEAD><TITLE>:: โปรแกรมความเสี่ยง ::</TITLE>
    <script type="text/javascript" src="../js/calendarDateInput.js">
</script>
</HEAD>
<BODY><BR>
<FONT SIZE="3" COLOR="#009900">เข้าระบบโดย <?echo $yourname?> แผนก <?echo $yourdep?> สังกัดทีม <?echo $yourdep_sec?></FONT>
        <BR><form METHOD="POST" ACTION="dep_risk_view.php">
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

  <?include('dep_risk_gp.php');?>
</BODY>
</HTML>