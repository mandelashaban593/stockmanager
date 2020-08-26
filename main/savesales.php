<?php
session_start();
//Connect to mysql server and selecting db
require '../conn2.php';
	
$a = $_POST['invoice'];
$b = $_POST['cashier'];
$c = $_POST['date'];
$d = $_POST['ptype'];
$e = $_POST['amount'];
$z = $_POST['profit'];
$cname = $_POST['cname'];
if($d=='credit') {
$f = $_POST['due'];

$sql = "INSERT INTO sales (invoice_number,cashier,date,type,amount,profit,due_date,name) VALUES ('$a','$b','$c','$d','$e','$z','$f','$cname')";
$q  = mysql_query($sql) or die(mysql_error());
header("location: preview.php?invoice=$a");
exit();
}
if($d=='cash') {
$f = $_POST['cash'];
$sql = "INSERT INTO sales (invoice_number,cashier,date,type,amount,profit,due_date,name) VALUES ('$a','$b','$c','$d','$e','$z','$f','$cname')";
$q  = mysql_query($sql) or die(mysql_error());

header("location: preview.php?invoice=$a");
exit();
}
// query



?>