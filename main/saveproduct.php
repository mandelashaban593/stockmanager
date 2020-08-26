<?php
session_start();
//Connect to mysql server and selecting db
require '../conn2.php';
	

$name = $_POST['product_name'];
$code = $_POST['product_code'];

$ocost = $_POST['o_price'];
$scost = $_POST['price'];

$profit = $_POST['profit'];
$supplier = $_POST['supplier'];

$pieces = $_POST['qty'];
$date = $_POST['date_arrival'];




//moisture content deduction
$deduc_bags = 0.25*$num_bag;
$excess_mois = $f*($actual_mois-$recom_mois);

$actual_mois_diff = 100-$actual_mois;
$mois_cont_deduc = $excess_mois/$actual_mois_diff;

//chaff 
$chaff = 0.03*$f;

//Net weight
$net_weight = $f-$chaff-$mois_cont_deduc-0.25;

echo $a;

echo "\n";
echo $a;

echo "\n";
echo $b;

echo "\n";
echo $c;

echo "\n";

echo $actual_mois;

echo "\n";

// query
$sql = "INSERT INTO products (product_name,product_code,o_price,price,profit,supplier,qty,date_arrival, gen_name,cost,onhand_qty,qty_sold,expiry_date) 
			VALUES ('$name','$code','$scost','$ocost','$profit','$supplier','$pieces','$date','$name','$name','0','0','0')";



if (mysqli_query( $con, $sql)) {
               echo "New record created successfully";

               header("location: products.php");
               
            } else {
               echo "Error: " . $sql . "" . mysqli_error($con);
            }
            $con->close();
     






?>