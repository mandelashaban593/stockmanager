<?php
session_start();
//Connect to mysql server and selecting db
require '../conn2.php';

$username = $_POST['username'];
$password = $_POST['password'];
$position = $_POST['position'];
$branch_name = $_POST['branch_name'];
echo $username;

echo "\n";
echo $password;

echo "\n";
echo $position;

// query
$sql = "INSERT INTO user (username,password,name,position) VALUES ('$username','$password','$branch_name','$position')";
$q = mysql_query($sql) or die(mysql_error());

header("location:users.php")

?>