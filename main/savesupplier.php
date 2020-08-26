<?php
error_reporting(0);
session_start();
include('../conn2.php');
$a = $_POST['name'];
$b = $_POST['address'];
$c = $_POST['contact'];
$d = $_POST['cperson'];
$e = $_POST['note'];
// query
$sql = "INSERT INTO supliers (suplier_name,suplier_address,suplier_contact,contact_person,note) VALUES ('$a','$b','$c','$d','$e')";
if (mysqli_query( $con, $sql)) {
               echo "New Supplier created successfully";
               header("location: supplier.php");
            } else {
               echo "Error: " . $sql . "" . mysqli_error($con);
               header("location: supplier.php");
            }
            $con->close();


?>