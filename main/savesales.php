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

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "sales";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
} 

if($d=='credit') {
$f = $_POST['due'];


$sql = "INSERT INTO sales (invoice_number,cashier,date,type,amount,profit,due_date,name,balance)VALUES ('".$a."','".$b."','".$c."','".$d."','".$e."','".$z."','".$f."','".$cname."','".' '."')";

if (mysqli_query($conn, $sql)) {
   echo "New record created successfully";
} else {
   echo "Error: " . $sql . "" . mysqli_error($conn);
}


header("location: preview.php?invoice=$a");
exit();
}



if($d=='cash') {
$f = $_POST['cash'];


$sql = "INSERT INTO sales (invoice_number,cashier,date,type,amount,profit,due_date,name,balance)VALUES ('".$a."','".$b."','".$c."','".$d."','".$e."','".$z."','".$f."','".$cname."','".' '."')";

if (mysqli_query($conn, $sql)) {
   echo "New record created successfully";
} else {
   echo "Error: " . $sql . "" . mysqli_error($conn);
}

header("location: preview.php?invoice=$a");
exit();
}
// query

$conn->close();


?>