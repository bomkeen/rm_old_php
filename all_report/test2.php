<?session_start();?>
 <SCRIPT LANGUAGE="Javascript" SRC="../Charts2/FusionCharts.js"></SCRIPT> 
<?
include("../function2/FusionCharts.php");

?>

<BR>


<CENTER>
<FONT SIZE="3" COLOR="#9900CC">�ӹǹ�����¹��§ҹ��������§�¡���Ἱ�㹻ջѨ�غѹ</FONT>
<!-- php chart  -->
<?php
$strXML2 = "<chart caption='' xAxisName='' yAxisName='' numberPrefix='' showValues='1'>";
$row2=0;
include('../function2/connect.php');
	$sql2 = "SELECT COUNT(r.id),c.ward FROM register_risk AS r
LEFT JOIN code_complaint AS c ON c.ward_id=r.ward_id WHERE year(r.date)=YEAR(NOW()) GROUP BY r.ward_id";
$suma2 = array();
//echo $sql;
	$result2 = mysql_query($sql2) or die(mysql_error());
	
	if ($result2) {
			while($rs2 = mysql_fetch_array($result2))
						{

							$strXML2 .= "<set label='" . $rs2[1] . "' value='" . $rs2[0] . "' />";     /////���ʵ�ԧ �Ӥ�� value Ẻ� xml
						}
					}
?>
<!-- ��� ǹloop ŧ XML ���ͷӡ�ҿ -->

<?
$strXML2 .= "</chart>"; //// �� XML �ҵ��ʵ�ԧ �Դ chart  ��ͧ�����ä ˹����� ���Ƕ֧�� .=
	echo renderChart("../Charts2/Line.swf", "", $strXML2, "��§ҹ�ӹǹ��Ъҡ�", 300, 150, false, false);
	?>

</CENTER>
