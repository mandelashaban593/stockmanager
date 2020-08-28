<?php
session_start();
//Connect to mysql server and selecting db


$date = $_POST['date'];
$name = $_POST['name'];
$amount= $_POST['amount'];
$remarks = $_POST['remarks'];

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
$sql = "INSERT INTO equity (date,name,amount,remarks) VALUES ('$date','$name','$amount','$remarks')";

if (mysqli_query($conn, $sql)) {
   echo "New record created successfully";
   echo "Error: " . $sql . "" . mysqli_error($conn);
}



header("location: index.php?iv=$name");


?>