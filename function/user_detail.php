<?php 
$yourname='';
$yourdep='';
$yourdep_sec='';
$iddepartweb=$_SESSION['iddepartweb'];
$sqluser = "SELECT pd.namedepart , c1.ward AS dep,c2.ward AS dep2 FROM pd_depart AS pd
JOIN code_complaint AS c1 on c1.ward_id=pd.codedepart
left JOIN code_complaint AS c2 on c2.ward_id=pd.dep_sec
WHERE pd.id='$iddepartweb' ";

$resultuser = mysql_query($sqluser) or die(mysql_error());
$rsuser = mysql_fetch_array($resultuser);
$yourname=$rsuser[0];
$yourdep=$rsuser[1];
$yourdep_sec=$rsuser[2];

?>
