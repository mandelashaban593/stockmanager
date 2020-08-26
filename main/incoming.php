<?php
session_start();
//Connect to mysql server and selecting db
require '../conn2.php';
	

$a = $_POST['invoice'];
$b = $_POST['product'];
$c = $_POST['qty'];
$w = $_POST['pt'];
$date = $_POST['date'];
$discount = $_POST['discount'];
$customer_name = $_POST['customer_name'];

$sql2 = "select * from products where product_id='$b'";
$query = mysqli_query($con, $sql2)  or die(mysqli_error());
$fetch = mysqli_fetch_array($con, $query) or die(mysqli_error());




$qty = $fetch['qty'];


echo "\n";
echo $a;

echo "\n";
echo $b;

echo "\n";
echo $c;

echo "\n";
echo $w;

echo "\n";
echo $date;

echo "\n";
echo $discount;





$query = mysqli_query($con,"SELECT * FROM products WHERE product_id= '$b'") or die(mysqli_error());
while($row=mysqli_fetch_assoc($con, $query)){

$asasa=$row['price'];
$code=$row['product_code'];
$gen=$row['gen_name'];
$name=$row['product_name'];
$p=$row['profit'];
}

//edit qty
$sql = "UPDATE products 
        SET qty='$c'
		WHERE product_id='$b'";
$query2 = mysqli_query($con,$sql) or die(mysqli_error());

$fffffff=$asasa-$discount;
$d=$fffffff*$c;
$profit=$p*$c;

echo "\n";
echo $fffffff;


echo "\n";
echo $d;


echo "\n";
echo $code;

echo "\n";
echo $p;

echo "\n";
echo $name;


echo "\n";
echo $gen;




echo "\n";
echo $profit;


// query
$sql = "INSERT INTO sales_order (invoice,product,qty,amount,name,price,profit,product_code,gen_name,date,discount,customer_name) VALUES ('$a','$b','$c','$d','$name','$asasa','$p', '$code','$gen','$date',0.0, '$customer_name')";
$q = mysqli_query($con, $sql) or die(mysqli_error());



header("location: sales.php?id=$w&invoice=$a&profit=$p&qty=$c");


?>