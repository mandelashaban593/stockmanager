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

<div id="maintable">
<div style="margin-top: -19px; margin-bottom: 21px;">
<a  href="index.php"><button class="btn btn-default btn-large" style="float: none;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
<a href="#" onclick="window.print()" style="float:right;" class="btn btn-info"><i class="icon-print icon-large"></i> Print List</a>
</div>

<br><br/>



<p style="text-align:center">Equator Seeds Limited</p>
<p style="text-align:center">P.o Box 1375 Gulu</p>
<p style="text-align:center">Located opp.umeme transformer layibi</p>
<p style="text-align:center">Tel: 0782620830</p>
<table class="table table-bordered" id="resultTable" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
			
			<th width="15%">Operation  </th>
			<th width="15%">Items  </th>
			<th width="15%"> shs</th>
		
			
			

		</tr>
		
	</thead>
	<tbody>
		
			<?php
				include('../connect.php');
				$result = $db->prepare("SELECT * FROM expenses ORDER BY expense_id DESC");
				$result->execute();

				


				$result1 = $db->prepare("SELECT * FROM liabilities ORDER BY transaction_id DESC");
				$result1->execute();

				

					
			?>
		
			<tr class="record">
			<td></td>
			<td>Equity</td>
			<td><?php


			//Connect to mysql server and selecting db
		


			$result1 = $db->prepare("SELECT sum(amount) as value_sum FROM equity ORDER BY equity_id DESC ");
			$result1->execute();

			for($i=0; $row = $result1->fetch(); $i++){

				echo $sum = $row['value_sum'];

			}

			 ?></td>
	
			</tr>


			<tr class="record">
			<td>Less</td>
			<td>Goods Sold</td>
			<td><?php


			//Connect to mysql server and selecting db
		

			$result1 = $db->prepare("SELECT sum(price) as value_sum FROM sales_order ORDER BY transaction_id DESC");
			$result1->execute();

			for($i=0; $row = $result1->fetch(); $i++){

				echo $sum = $row['value_sum'];

			}

			?></td>
	
			</tr>



			<?php
			
					
			?>
		   </tbody>
		   <tbody><tr><td></td><td>Gross profit</td><td><?php $gross_profit=$sum - $sum1; echo $gross_profit; ?></td></tr></tbody>
		   <thead>
		   	<tr><th>Less</th><th>Expenses</th></tr>
		   </thead>
			<tbody>
			<?php

		

			
				for($i=0; $row = $result->fetch(); $i++){

						
			?>

			<tr class="record">
			<td></td>
			<td><?php echo $row['item']; ?></td>
			<td><?php echo $row['amount']; ?></td>
			</tr>
			<?php
		}

			?>
		   </tbody>
		  

			
			<?php

			
			?>


			<tbody>
			<tr class="record">
			<td>Net Profit</td>
			
			<td><?php 

		//Connect to mysql server and selecting db
	
		$result1 = $db->prepare("SELECT sum(amount) as value_sum FROM expenses");
		$result1->execute();

		for($i=0; $row = $result1->fetch(); $i++){

			$tot_expense = $row['value_sum'];
			$net_profit = $gross_profit -$tot_expense;
			echo $net_profit ;

		}

			
				
				?></td>
				
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
   url: "deletepppp.php",
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

