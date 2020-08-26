<?php
session_start();
//Connect to mysql server and selecting db
require 'conn2.php';


$date = $_POST['date'];
$name = $_POST['name'];
$amount= $_POST['amount'];
$remarks = $_POST['remarks'];

// query
$sql = "INSERT INTO equity (date,name,amount,remarks) VALUES ('$date','$name','$amount','$remarks')";
$q = mysql_query($sql) or die(mysql_error());

header("location: index.php?iv=$name");


?>