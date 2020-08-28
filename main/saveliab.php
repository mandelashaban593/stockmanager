<?php
session_start();
//Connect to mysql server and selecting db


$a = $_POST['name'];
$b = $_POST['date'];
$amount= $_POST['amount'];
$d = $_POST['remarks'];
$liab_cat = $_POST['liab_cat'];
// query

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


// query
$sql = "INSERT INTO liabilities (date,name,amount,liab_cat,remarks,supplier) VALUES ('$b','$a','$amount','$liab_cat','$d','')";

if (mysqli_query($conn, $sql)) {
   echo "New record created successfully";
   echo "Error: " . $sql . "" . mysqli_error($conn);
}




header("location: index.php?iv=$a");


?>