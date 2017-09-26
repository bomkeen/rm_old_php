<?session_start();?>
	<SCRIPT LANGUAGE="Javascript" SRC="../Charts/FusionCharts.js"></SCRIPT>
<?
include("../function/FusionCharts.php");
?>

<BR>


<CENTER>
<!-- php chart  -->
<?php
$strXML = "<chart caption='จำนวนความเสี่ยงที่เกิดขึ้นกับแผนก' xAxisName='' yAxisName='' numberPrefix='' showValues='1'>";
$row=0;
include('../function/connect.php');
	$sql = "SELECT COUNT(r.id) AS m,MONTHNAME(r.date) FROM register_risk AS r 
WHERE r.wardedit_id = '$codedepart' AND year(r.date)=year(now()) GROUP BY MONTH(r.date)";
$suma = array();
	$result = mysql_query($sql) or die(mysql_error());
		if ($result) {
			while($rs = mysql_fetch_array($result))
						{

							$strXML .= "<set label='" . $rs[1] . "' value='" . $rs[0] . "' />";     /////ต่อสตริง ทำค่า value แบบใน xml
						}
					}
?>
<!-- หมด วนloop ลง XML เพื่อทำกราฟ -->

<?
$strXML .= "</chart>"; //// นำ XML มาต่อสตริง ปิด chart  ต้องเว้นวรรค หนึ่งเคาะ แล้วถึงจะ .=
echo renderChart("../Charts/Line.swf", "", $strXML, "รายงานจำนวนประชากร", 800, 400, false, false);
	?>

</CENTER>
