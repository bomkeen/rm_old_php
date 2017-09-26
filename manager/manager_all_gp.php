<?session_start();?>
	<SCRIPT LANGUAGE="Javascript" SRC="../Charts/FusionCharts.js"></SCRIPT>
<?
include("../function/FusionCharts.php");

?>

<BR>


<CENTER>
<FONT SIZE="3" COLOR="#9900CC">จำนวนความเสี่ยงสรุปยอดตามรายเดือน ภายในปีปัจจุบัน</FONT>
<!-- php chart  -->
<?php
$strXML = "<chart caption='' xAxisName='' yAxisName='' numberPrefix='' showValues='1'>";
$row=0;
include('../function/connect.php');
	$sql = "SELECT COUNT(r.id),MONTHNAME(r.date) FROM register_risk AS r
WHERE year(r.date)=YEAR(NOW()) GROUP BY MONTH(r.date)";
$suma = array();
//echo $sql;
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
