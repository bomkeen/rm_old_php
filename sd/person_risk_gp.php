<?session_start();?>
	<SCRIPT LANGUAGE="Javascript" SRC="../Charts/FusionCharts.js"></SCRIPT>
<?
include("../function/FusionCharts.php");

?>

<BR>


<CENTER>
<!-- php chart  -->
<?php
$strXML = "<chart caption='�ӹǹ��������§����� Login �繼����§ҹ' xAxisName='' yAxisName='' numberPrefix='' showValues='1'>";
$row=0;
include('../function/connect.php');
	$sql = "SELECT COUNT(r.id) AS m,MONTHNAME(r.date) FROM register_risk AS r 
WHERE r.person_id='$iddepartweb' AND year(r.date)=year(now()) GROUP BY MONTH(r.date)";
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
	echo renderChart("../Charts/Line.swf", "", $strXML, "��§ҹ�ӹǹ��Ъҡ�", 800, 400, false, false);
	?>

</CENTER>
