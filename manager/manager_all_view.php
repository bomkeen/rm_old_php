<?
session_start();
//ob_start();
?>
<?include "../level/manager.php";?>
<?
$startdate=$_POST[startdate];
$enddate=$_GET[enddate];
echo $enddate;
include "../function/connect.php";
mysql_query("set NAMES tis620");
$sql="SELECT r.id,r.date as risk_date,pr.pro_risk_name,pd.prorisk_detail_name,prorisk_sub_detail_name,c.clinic_name,r.severity
,r.detail_prob,r.numlevel,cm.ward as ward,cr.ward as wardedit_name,r.method,f.follow_name,p.namedepart as person_name,rw.review_name,sc.source_code_name
,sy.system_name ,rb.reborn_name
FROM
register_risk r
left outer join proriskdetail pd on pd.id=r.prorisk_detail_id
left outer join pro_risk pr on pr.pro_risk_id=pd.pro_risk_id
left outer join prorisk_sub_detail ps on ps.id=r.prorisk_sub_detail_id
left outer join clinic_risk c on c.clinic_id = r.clinic_id
left outer join code_complaint cm on cm.ward_id= r.ward_id
left outer join code_complaint cr on cr.ward_id= r.wardedit_id
left outer join tracking_code_fix f on f.follow_id=r.follow_id
left outer join pd_depart p on p.id=r.person_id
left outer join review rw on rw.review_id = r.review_id
left outer join system sy on sy.system_id = r.system_id
left outer join reborn rb on rb.reborn_id = r.reborn_id
left outer join source_code sc on sc.source_code_id = r.source_code_id
where  r.`date` between '$startdate' and '$enddate' 
";
$result=mysql_db_query($dbname,$sql);
$number=mysql_num_rows($result);
$no=1;
?>
<?include "../level/check_data.php";?>


<HTML>
<HEAD><TITLE>:: �������������§ ::</TITLE>
</HEAD><BR><BR>
<BODY> <FONT SIZE="3" COLOR="#009900">�����Ţͧ <?echo $nameweb ;?></FONT> 
<?echo $dep_sec ?>
<center><a href="./person_risk_print.php?person_edit=<?echo $iddepartweb?>&enddate=<?echo $enddate?>&startdate=<?echo $startdate?>" target='blank'><img src="../img/excel.jpg" width="30" height="30" border="0" alt="Print"><font size="6" color="#99cc00">Excel Export</font></a></center>





	<P><strong>�ʴ���¡�ä�������§�������ͧ�ç��Һ��</strong></P>
 <table align='center' border='1' width='1080' cellpadding='0' cellspacing='0'>
		<TR BGCOLOR=#99FFCC> 
                  <td width=50 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>�ӴѺ</B></CENTER></font></td>
                <td width=100 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>�ѹ�����</B></CENTER></font></td>
                <td width=100 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>�������������§ </B></CENTER></font></td>
<td width=100 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>��������´�����</B></CENTER></font></td>
<td width=50 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>��������§��ҹ</B></CENTER></font></td>
<td width=50 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>�дѺ�����ع�ç</B></CENTER></font></td>
<td width=200 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>��������´�ͧ�ѭ��</B></CENTER></font></td>
<td width=50 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>�ӹǹ����</B></CENTER></font></td>
<td width=50 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>�к�</B></CENTER></font></td>
<td width=50 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>���ǹ</B></CENTER></font></td>
<td width=50 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>����Դ</B></CENTER></font></td>
<td width=50 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>�����</B></CENTER></font></td>
<td width=50 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>˹��§ҹ��§ҹ</B></CENTER></font></td>
<td BGCOLOR=#FF3399 width=50 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>Ἱ�����Դ��������§</B></CENTER></font></td>
<td width=200 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>�Ը���ѭ��</B></CENTER></font></td>
<td width=50 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>�ѡɳС�õԴ���</B></CENTER></font></td>
<td width=100 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>���ͼ����§ҹ</B></CENTER></font></td>
<td width=50 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>[���]</B></CENTER></font></td>
<td width=50 align=center><font size=2 face=Tahoma, MS Sans Serif><CENTER><B>[ź]</B></CENTER></font></td>




		</TR> 
<?
	while($rs=mysql_fetch_array($result)) {
                                    
              if ($bg=="#CCFFFF")
                { //color
                    $bg="#FFFFCC";
                }else{
                    $bg="#CCFFFF";
                } //color
    //color
 //   
//p.name as person_name
                    
		$id=$rs[id];
$date=$rs[risk_date];
$pro_risk_name=$rs[pro_risk_name];
$prorisk_detail_name=$rs[prorisk_detail_name];
$clinic_name=$rs[clinic_name]; 
$severity=$rs[severity];      
$detail_prob=$rs[detail_prob];
$numlevel=$rs[numlevel];       
$ward=$rs[ward];
$wardedit_name=$rs[wardedit_name];
$method=$rs[method];
$follow_name=$rs[follow_name];
$person_name=$rs[person_name];
$review_name=$rs[review_name];
$system_name=$rs[system_name];
$reborn_name=$rs[reborn_name];
$source_code_name=$rs[source_code_name];


		echo "
			<tr bgcolor=$bg>
<td width=50 align=center><font size=2 face=Tahoma, MS Sans Serif>$id</td>
<td width=100 align=center><font size=2 face=Tahoma, MS Sans Serif>$date</td>
<td width=100 align=center><font size=2 face=Tahoma, MS Sans Serif>$pro_risk_name</td>
<td width=100 align=center><font size=2 face=Tahoma, MS Sans Serif>$prorisk_detail_name</td>
<td width=50 align=left><font size=2 face=Tahoma, MS Sans Serif>$clinic_name</td>
<td width=50 align=left><font size=2 face=Tahoma, MS Sans Serif>$severity</td>             
<td width=200 align=left><font size=2 face=Tahoma, MS Sans Serif>$detail_prob</td>
<td width=50 align=left><font size=2 face=Tahoma, MS Sans Serif>$numlevel</td>
<td width=50 align=left><font size=2 face=Tahoma, MS Sans Serif>$system_name</td>
<td width=50 align=left><font size=2 face=Tahoma, MS Sans Serif>$review_name</td>
<td width=50 align=left><font size=2 face=Tahoma, MS Sans Serif>$reborn_name</td>
<td width=50 align=left><font size=2 face=Tahoma, MS Sans Serif>$source_code_name</td>
<td width=50 align=left><font size=2 face=Tahoma, MS Sans Serif>$ward</td>
<td width=50 align=left><font size=2 face=Tahoma, MS Sans Serif>$wardedit_name</td>
<td width=200 align=left><font size=2 face=Tahoma, MS Sans Serif>$method</td>
<td width=100 align=left><font size=2 face=Tahoma, MS Sans Serif>$follow_name</td>
<td width=100 align=left><font size=2 face=Tahoma, MS Sans Serif>$person_name</td>
<td width=50 align=center><font size=2 face=Tahoma, MS Sans Serif><A HREF=\"risk_edit.php?id=$id\">[���]</A></td>
<td width=50 align=center><font size=2 face=Tahoma, MS Sans Serif><A HREF=\"risk_delete.php?id_del=$id\">[ź]</A></td>

			</TR>
		</TR>";
		$no++;
	}
	echo "</TABLE>";	
	mysql_close();
 
?>

</BODY>
</HTML>