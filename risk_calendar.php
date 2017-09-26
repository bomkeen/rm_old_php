<?php  
  header("content-type:text/html;charset=utf-8");             
header("Cache-Control: no-store, no-cache, must-revalidate");               
header("Cache-Control: post-check=0, pre-check=0", false);     
include ("function/connect.php");
mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client='utf8'");
mysql_query("SET character_set_connection='utf8'");
mysql_query("collation_connection = utf8");
mysql_query("collation_database = utf8");
mysql_query("collation_server = utf8");
if($_GET['gData']){  
    $event_array=array();  
    $i_event=0;  
    $q="SELECT r.id,r.date,c2.ward AS ward1,c1.ward AS ward2 FROM register_risk AS r 
join code_complaint AS c2 on r.wardedit_id=c2.ward_id 
join code_complaint AS c1 on r.ward_id=c1.ward_id  WHERE r.date>='".date("Y-m-d",$_GET['start'])."'  ";  
    $q.=" AND r.date<='".date("Y-m-d",$_GET['end'])."' ORDER by r.date";  
    $qr=mysql_query($q);  
    while($rs=mysql_fetch_array($qr)){  
        $event_array[$i_event]['id']=$rs[0];                     //$rs['name'].",".$rs['locate']
        $event_array[$i_event]['title']=$rs[2]."-->".$rs[3];  
        $event_array[$i_event]['start']=$rs[1];  
        $event_array[$i_event]['end']=$rs[1];  
		$event_array[$i_event]['url']='./manager/calendar_day_view.php?startdate='.$rs[1].'&enddate='.$rs[1];
        //$event_array[$i_event]['url']=$rs['event_url'];  
       // $event_array[$i_event]['allDay']=($rs['event_allDay']=="true")?true:false;  
        $i_event++;  
    }  
    echo json_encode($event_array);  
    exit;     
}  
?>  