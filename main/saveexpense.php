<?php
session_start();
//Connect to mysql server and selecting db
require 'conn2.php';


$date = $_POST['date'];
$item = $_POST['item'];
$amount= $_POST['amount'];
$remarks = $_POST['remarks'];

// query
$sql = "INSERT INTO expenses (date,item,amount,remarks) VALUES ('$date','$item','$amount','$remarks')";
$q = mysql_query($sql) or die(mysql_error());



header("location: expenseslist.php?iv=$item");

?>