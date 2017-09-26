<?php
//We've included ../Includes/FusionCharts.php and ../Includes/DBConn.php, which contains
//functions to help us easily embed the charts and connect to a database.
include("Includes/FusionCharts.php");
include("Includes/DBConn.php");
?>
<HTML>
<HEAD>
	<TITLE>โปรแกรมความเสี่ยงโรงพยาบาลบางปะหัน</TITLE>
	<?php
	//You need to include the following JS file, if you intend to embed the chart using JavaScript.
	//Embedding using JavaScripts avoids the "Click to Activate..." issue in Internet Explorer
	//When you make your own charts, make sure that the path to this JS file is correct. Else, you would get JavaScript errors.
	?>	
	<SCRIPT LANGUAGE="Javascript" SRC="FusionCharts2/FusionCharts.js"></SCRIPT>
	<!--	<style type="text/css">

	body {
		font-family: Arial, Helvetica, sans-serif;
		font-size: 25px;
	}
	.text{
		font-family: Arial, Helvetica, sans-serif;
		font-size: 25px;
	}

	</style>-->
<meta http-equiv="Content-Type" content="text/html; charset=tis-620"></HEAD>
<BODY>

<CENTER>

   
<?php
echo "<tr><td>กราฟแสดงลักษณะการเกิดความเสี่ยง</font></td></tr><br><br>";
echo "<tr><td>ช่วงวันที่  $startdate  ถึง   $enddate</td></tr><br><br>";
	//In this example, we show how to connect FusionCharts to a database.
	//For the sake of ease, we've used an MySQL databases containing two
	//tables.
		
	// Connect to the DB
	$link = connectToDB();

	//$strXML will be used to store the entire XML document generated
	//Generate the chart element
	//$a1 = date("Y")-1;
	//$a2 = date("Y");
	$graph = "Pie2D";
	$strXML = "<chart caption='' subCaption='' pieSliceDepth='30' showBorder='1' formatNumberScale='0' numberSuffix=' ครั้ง'>";

	// Fetch all factory records
	$strQuery = "SELECT b.reborn_name,count(b.reborn_id) as count_reborn_id,b.reborn_id
FROM
register_risk r
left outer join reborn b on b.reborn_id=r.reborn_id
left outer join tb_member p on p.id=r.person_id
where r.`date` between '$startdate'and'$enddate' and b.reborn_id <> '0' group by b.reborn_id
        ";
	$result = mysql_query($strQuery) or die(mysql_error());
    
	//Iterate through each factory
	if ($result) {
		while($ors = mysql_fetch_array($result)) {
        
			$strXML .= "<set label='" . $ors['reborn_name'] . "' value='" . $ors['count_reborn_id'] . "' />";

		}
	}
	mysql_close($link);

	//Finally, close <chart> element
	$strXML .= "</chart>";

	switch($graph){
case "Pie2D":  		echo renderChart("FusionCharts1/Pie2D.swf", "", $strXML, "FactorySum", 600, 400, false, false);
			                       	break; 
case "Pie3D":       	echo renderChart("FusionCharts1/Pie3D.swf", "", $strXML, "FactorySum", 800, 400, false, false);
                                    break; 
case "Column2D":  		echo renderChart("FusionCharts1/Column2D.swf", "", $strXML, "FactorySum", 800, 400, false, false);
			                       	break; 
case "Column3D":       	echo renderChart("FusionCharts1/Column3D.swf", "", $strXML, "FactorySum", 800, 400, false, false);
                                    break; 
case "Line":  		echo renderChart("FusionCharts1/Line.swf", "", $strXML, "FactorySum", 800, 400, false, false);
			                       	break; 
case "Area2D":       	echo renderChart("FusionCharts1/Area2D.swf", "", $strXML, "FactorySum", 800, 400, false, false);
                                    break; 
case "Bar2D":       	echo renderChart("FusionCharts1/Bar2D.swf", "", $strXML, "FactorySum", 800, 400, false, false);
                                    break; 
default : echo "";
}
?>
<BR><BR>
</CENTER>
</BODY>
</HTML>