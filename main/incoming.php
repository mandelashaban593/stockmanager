<?php
session_start();
//Connect to mysql server and selecting db
require '../conn2.php';
	
include('../connect.php');

$a = $_POST['invoice'];
$b = $_POST['product'];
$c = $_POST['qty'];
$w = $_POST['pt'];
$date = $_POST['date'];
$discount = $_POST['discount'];
$customer_name = $_POST['customer_name'];


$fetch = $db->prepare("select * from products where product_id= :userid");
$fetch->bindParam(':userid',$b);
$fetch->execute();
for($i=1; $row = $fetch->fetch(); $i++){

echo "first product : ";
echo $qty= $row['qty'];

}



echo "\n";
echo $a;

echo "\n product id:  ";
echo $b;

echo "\n";
echo $c;

echo "\n";
echo $w;

echo "\n";
echo $date;

echo "\n";
echo $discount;






$result = $db->prepare("SELECT * FROM products WHERE product_id= :userid");
$result->bindParam(':userid', $b);
$result->execute();
for($i=1; $row = $result->fetch(); $i++){
$asasa=$row['price'];
$code=$row['product_code'];
$gen=$row['gen_name'];
$name=$row['product_name'];
$p=$row['profit'];
echo "Product tot for loop";

echo $qty_ord = $row['qty'];

}

echo "Tot Quantuty";
echo $qty_ord;

$qty_ord = $qty_ord-$c;
echo "Quantuty ordered";
echo $qty_ord;

//edit qty


$sql = "UPDATE products 
        SET qty=?
		WHERE product_id=?";
$q = $db->prepare($sql);
$q->execute(array($qty_ord,$b));



$fffffff=$asasa-$discount;
$d=$fffffff*$c;
$profit=$p*$c;

echo "\ncoool";
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




echo "\nProfits";
echo $profit;



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
$sql = "INSERT INTO sales_order(invoice,product,qty,amount,name,price,profit,product_code,gen_name,discount,customer_name,date)VALUES ('".$a."','".$code."','".$c."','".$d."','".$name."','".$p."','".$profit."','".$gen."','".$gen."','".$discount."','".$customer_name."','".' '."')";

if (mysqli_query($conn, $sql)) {
   echo "New record created successfully";
} else {
   echo "Error: " . $sql . "" . mysqli_error($conn);
}
$conn->close();



header("location: sales.php?id=$w&invoice=$a&profit=$p&qty=$c");


?>