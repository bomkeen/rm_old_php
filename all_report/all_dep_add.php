<?session_start();?>
	<SCRIPT LANGUAGE="Javascript" SRC="../Charts/FusionCharts.js"></SCRIPT>
<?
include("../function/FusionCharts.php");

?>

<BR>


<CENTER>
<FONT SIZE="3" COLOR="#9900CC">�ӹǹ�����¹��§ҹ��������§�¡���Ἱ�㹻ջѨ�غѹ</FONT>
<!-- php chart  -->
<?php
$strXML = "<chart caption='' xAxisName='' yAxisName='' numberPrefix='' showValues='1'>";
$row=0;
include('../function/connect.php');
	$sql = "SELECT COUNT(r.id),c.ward FROM register_risk AS r
LEFT JOIN code_complaint AS c ON c.ward_id=r.ward_id WHERE year(r.date)=YEAR(NOW()) GROUP BY r.ward_id";
$suma = array();
//echo $sql;
	$result = mysql_query($sql) or die(mysql_error());
	
	if ($result) {
			while($rs = mysql_fetch_array($result))
						{

							$strXML .= "<set label='" . $rs[1] . "' value='" . $rs[0] . "' />";     /////���ʵ�ԧ �Ӥ�� value Ẻ� xml
						}
					}
?>
<!-- ��� ǹloop ŧ XML ���ͷӡ�ҿ -->

<?
$strXML .= "</chart>"; //// �� XML �ҵ��ʵ�ԧ �Դ chart  ��ͧ�����ä ˹����� ���Ƕ֧�� .=
	echo renderChart("../Charts/Pie3D.swf", "", $strXML, "��§ҹ�ӹǹ��Ъҡ�", 900, 500, false, false);
	?>

</CENTER>
