<?php
session_start();
//Connect to mysql server and selecting db
require 'conn2.php';


$a = $_POST['name'];
$b = $_POST['date'];
$amount= $_POST['amount'];
$c = $_POST['supplier'];
$d = $_POST['remarks'];
$asset_cat = $_POST['asset_cat'];
// query
$sql = "INSERT INTO assets (date,name,amount,supplier,asset_cat,remarks) VALUES ('$b','$a','$amount','$c','$asset_cat','$d')";
$q = mysql_query($sql) or die(mysql_error());

header("location: index.php?iv=$a");


?>