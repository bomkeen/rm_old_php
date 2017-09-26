<?
//-------------------------------------------------------------------------------------------------------------------------
$conn_string = "a"; 
$user = "sa"; 
$pass = ""; 

$conn = odbc_connect( $conn_string, $user, $pass ) or die("Error  in  connection"); 
$sql = "select center_id from ma_center order by center_id desc";
$query = odbc_exec($conn,$sql) or die("SELECTION FAILED");

//-------------------------------------------------------------------------------------------------------------------------
?>
