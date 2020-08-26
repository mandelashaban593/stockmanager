<?php
session_start();
//Connect to mysql server and selecting db
require 'conn2.php';


$a = $_POST['name'];
$b = $_POST['date'];
$amount= $_POST['amount'];
$d = $_POST['remarks'];
$liab_cat = $_POST['liab_cat'];
// query
$sql = "INSERT INTO liabilities (date,name,amount,liab_cat,remarks,supplier) VALUES ('$b','$a','$amount','$liab_cat','$d','')";
$q = mysql_query($sql) or die(mysql_error());

header("location: index.php?iv=$a");


?>