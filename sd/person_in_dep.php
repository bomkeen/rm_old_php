<?
session_start();
include('../function/connect.php');
include('../function/user_detail.php');
?>

<HTML>
<HEAD><TITLE>:: �������������§ ::</TITLE>
    <script type="text/javascript" src="../js/calendarDateInput.js">

</script>
</HEAD>
<BODY>
<FONT SIZE="3" COLOR="#009900">����к��� <?echo $yourname?> Ἱ� <?echo $yourdep?> �ѧ�Ѵ��� <?echo $yourdep_sec?></FONT>
        <form METHOD="POST" ACTION="person_in_dep_view.php">
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

 <?//include('person_in_dep_gp.php');?>
</BODY>
</HTML>