<?
session_start();
include('../function/connect.php');
include('../function/user_detail.php');
?>
<?include "../level/dep.php";?>

<HTML>
<HEAD><TITLE>:: �������������§ ::</TITLE>
    <script type="text/javascript" src="../js/calendarDateInput.js"></script>

</HEAD>
<BODY><BR><BR>
<FONT SIZE="3" COLOR="#009900">����к��� <?echo $yourname?> Ἱ� <?echo $yourdep?> �ѧ�Ѵ��� <?echo $yourdep_sec?></FONT>
        <form METHOD="POST" ACTION="custom_report_view.php">
            
			<table bgcolor="#a8d8f1" border="0" width="800" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td bgcolor="#2ba5e6" align="center" colspan="4"><font size=4 face=Tahoma, MS Sans Serif>���͡�ѹ㹡�ô٢����� </font> </td>

                </tr>
                
<tr>
             <td>������ѹ���</td><td><script>DateInput('startdate', true, 'YYYY-MM-DD')</script></td>
     
            <td>�֧�ѹ���</td><td><script>DateInput('enddate', true, 'YYYY-MM-DD'
            )</script></td>
      
</tr>     
     					
						
					  <tr>
                    <td align="center" colspan="2">
                      	 <SELECT NAME="ward_id" class="validate[required]">
                            <OPTION VALUE="%">���͡Ἱ������§ҹ</OPTION>
			<?
												include "../function/connect.php";
													mysql_query("set NAMES tis620");
												$sql = "select * from code_complaint";
												$result = mysql_db_query($dbname, $sql);
												while ($rs = mysql_fetch_array($result)) {
												$system_id = $rs[0];
												 $system_name = $rs[1];
												echo "<OPTION VALUE='$system_id'>$system_name</OPTION>";
}
?>
                        </SELECT>
                    </td>
					 <td align="center" colspan="2">
                      	 <SELECT NAME="wardedit_id" class="validate[required]">
                            <OPTION VALUE="%">���͡Ἱ�����Դ��������§</OPTION>
			<?
												include "../function/connect.php";
													mysql_query("set NAMES tis620");
												$sql = "select * from code_complaint";
												$result = mysql_db_query($dbname, $sql);
												while ($rs = mysql_fetch_array($result)) {
												$system_id = $rs[0];
												 $system_name = $rs[1];
												echo "<OPTION VALUE='$system_id'>$system_name</OPTION>";
}
?>
                        </SELECT>
                    </td>
                </tr>
		    
<tr>
<td align="center" colspan="4">
<SELECT NAME="person_id" class="validate[required]">
                            <OPTION VALUE="%">�����§ҹ��������§</OPTION>
			<?
												include "../function/connect.php";
													mysql_query("set NAMES tis620");
												$sql = "select * from pd_depart";
												$result = mysql_db_query($dbname, $sql);
												while ($rs = mysql_fetch_array($result)) {
												$system_id = $rs[0];
												 $system_name = $rs[2];
												echo "<OPTION VALUE='$system_id'>$system_name</OPTION>";
}
?>
                        </SELECT>
</td>
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