<html>
<head>
<title>
POS
</title>
<?php
	require_once('auth.php');
?>
 <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<!--sa poip up-->
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>
</head>
<body>
<?php include('navfixed.php');?>
	
	
	<div class="container-fluid">
      <div class="row-fluid">
	
	<div class="span10">
	<div class="contentheader">
			<i class="icon-dashboard"></i> Dashboard
			</div>
			<ul class="breadcrumb">
			<a href="dashboard.php"><li>Dashboard</li></a> /
			<li class="active">Customer's Ledger</li>
			</ul>
<div id="maintable">
<div style="margin-top: -19px; margin-bottom: 21px;">
<a  href="index.php"><button class="btn btn-default btn-large" style="float: none;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
<a href="#" onclick="window.print()" style="float:right;" class="btn btn-info"><i class="icon-print icon-large"></i> Print List</a>
</div>
<p style="text-align:center">Equator Seeds Limited</p>
<p style="text-align:center">P.o Box 1375 Gulu</p>
<p style="text-align:center">Located opp.umeme transformer layibi</p>
<p style="text-align:center">Tel: 0782620830</p>
<table class="table table-bordered" id="resultTable" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
			<th width="15%"> Date </th>
			<th width="15%"> Transaction ID </th>
			<th width="15%"> Product </th>
			<th width="15%"> Rate  </th>
			<th width="15%"> Quantity </th>
			<th width="15%"> Amount </th>
		


		</tr>
	</thead>
	<tbody>
		
			<?php
				include('../connect.php');
				
				$result1 = $db->prepare("SELECT * FROM sales_order ORDER BY transaction_id DESC");
				$result1->execute();

				for($i=0; $row = $result1->fetch(); $i++){

					if($row['gen_name']){
			?>
			
			<tr class="record">
			<td><?php echo $row['date']; ?></td>
			<td><?php echo $row['transaction_id']; ?></td>
			<td><?php echo $row['gen_name']; ?></td>
			<td><?php echo $row['price']; ?></td>
			<td><?php echo $row['qty']; ?></td>
			<td><?php echo $row['qty']*$row['price']; ?></td>
			<td></td>


			<td><a rel="facebox" href="view_customer_ledger.php?iv=<?php echo $row['transaction_id']; ?>"> <button class="btn btn-primary btn-mini"><i class="icon-search"></i> View </button></a> 
			<a href="#" id="<?php echo $row['transaction_id']; ?>" class="delbutton" title="Click To Delete"><button class="btn btn-danger btn-mini"><i class="icon-trash"></i> Delete </button></a></td>
			</tr>
			<?php 
		}

	}
			
			?>


			<tr class="record">
			<td>Total</td>
			<td></td>
			<td></td>
			<td></td>

			<td><?php 
			//Connect to mysql server and selecting db
			require '../conn2.php';



			$result1 = $db->prepare("SELECT sum(qty) as value_sum FROM sales_order");
			$result1->execute();
			for($i=0; $row = $result1->fetch(); $i++){

				echo $sum = $row['value_sum'];

			}

				
				?></td>
			<td><?php 

			//Connect to mysql server and selecting db
			require '../conn2.php';

				
			$result1 = $db->prepare("SELECT sum(qty*price) as value_sum FROM sales_order ORDER BY transaction_id DESC");
			$result1->execute();
			for($i=0; $row = $result1->fetch(); $i++){

				echo $sum = $row['value_sum'];

			}
				?></td>

			<td></td>
			</tr>
			<?php
			


			?>





		
	</tbody>
</table>
<div class="clearfix"></div>
</div>
<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Are you sure want to delete? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deletecustledg.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
</body>
<?php include('footer.php');?>

</html>