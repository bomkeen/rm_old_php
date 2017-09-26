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
		<!--<style type="text/css">

	body {
		font-family: Arial, Helvetica, sans-serif;
		font-size: 22px;
	}
	.text{
		font-family: Arial, Helvetica, sans-serif;
		font-size: 22px;
	}

	</style>	-->
<meta http-equiv="Content-Type" content="text/html; charset=tis-620"></HEAD>
<BODY>

<CENTER>
 
<?php

echo "<tr><td>กราฟจำนวนแผนกที่รายงานความเสี่ยง</font></td></tr><br><br>";
echo "<tr><td>ช่วงวันที่  $startdate  ถึง   $enddate</td></tr><br><br>";
	//In this example, we show how to connect FusionCharts to a database.
	//For the sake of ease, we've used an MySQL databases containing two
	//tables.
		
	// Connect to the DB
	$link = connectToDB();

	//$strXML will be used to store the entire XML document generated
	//Generate the chart element
	$strXML = "<chart caption='' subCaption='' pieSliceDepth='30' showBorder='1' formatNumberScale='0' numberSuffix=' ครั้ง'>";

	// Fetch all factory records
		$strQuery = "SELECT cr.ward,count(cr.ward_id) as count_wardedit_id
FROM
register_risk r
left outer join proriskdetail pd on pd.id=r.prorisk_detail_id
left outer join pro_risk pr on pr.pro_risk_id=pd.pro_risk_id
left outer join clinic_risk c on c.clinic_id = r.clinic_id
left outer join code_complaint cm on cm.ward_id= r.ward_id
left outer join code_complaint cr on cr.ward_id= r.wardedit_id
left outer join tracking_code_fix f on f.follow_id=r.follow_id
left outer join tb_member p on p.id=r.person_id
left outer join review rw on rw.review_id = r.review_id
left outer join system sy on sy.system_id = r.system_id
left outer join reborn rb on rb.reborn_id = r.reborn_id
left outer join source_code sc on sc.source_code_id = r.source_code_id
where r.`date` between '$startdate' and '$enddate'  and cr.ward_id <> '0' group by cr.ward_id
        ";
	$result = mysql_query($strQuery) or die(mysql_error());
    
	//Iterate through each factory
	if ($result) {
		while($ors = mysql_fetch_array($result)) {
 /* 
			//Now create a second query to get details for this factory
			$strQuery = "select count(id) as TotOutput from jobcom_service  where type=" . $ors['id'];
			$result2 = mysql_query($strQuery) or die(mysql_error()); 
			$ors2 = mysql_fetch_array($result2);
			//Generate <set label='..' value='..' />   
 
 */     
			$strXML .= "<set label='" . $ors['ward'] . "' value='" . $ors['count_wardedit_id'] . "' />";
			//free the resultset
			//mysql_free_result($result2);
		}
	}
	mysql_close($link);

	//Finally, close <chart> element
	$strXML .= "</chart>";
	
	//Create the chart - Pie 3D Chart with data from $strXML
	//echo renderChart("../../FusionCharts/Pie3D.swf", "", $strXML, "FactorySum", 600, 300, false, false);
	//echo renderChart("FusionCharts1/Line.swf", "", $strXML, "ประเภทปัญหา", 600, 300, false, false);
	echo renderChart("FusionCharts1/Column3D.swf", "", $strXML, "ประเภทปัญหา", 600, 300, false, false);
	//echo renderChart("FusionCharts1/Pie2D.swf", "", $strXML, "FactorySum", 700, 400, false, false);
?>
<BR><BR>
</CENTER>
</BODY>
</HTML>