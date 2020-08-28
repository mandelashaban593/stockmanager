<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<table class="table table-bordered" id="resultTable" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
			<th width="25%"> Date </th>
			<th width="3%"> Product Id </th>
			<th width="8%"> Product</th>
			<th width="15%"> Supplier Name </th>
			<th width="15%"> Rate </th>
			<th width="15%"> Quantity </th>
			<th width="15%"> Amount  </th>

		</tr>
	</thead>
	<tbody>
		
	
			<?php
				include('../connect.php');
				$id=$_GET['iv'];
				$result = $db->prepare("SELECT * FROM products  WHERE product_id= :userid");
				$result->bindParam(':userid', $id);
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
			<tr class="record">
		


			<td><?php echo $row['date_arrival']; ?></td>
			<td><?php echo $row['product_id']; ?></td>
			<td><?php echo $row['gen_name']; ?></td>
			<td><?php echo $row['supplier']; ?></td>
			<td><?php echo $row['price']; ?></td>
			<td><?php echo $row['qty']; ?></td>
			

			<td><?php $dfdf = $row['qty']*$row['price'];
			echo formatMoney($dfdf, true);

			 ?></td>


			</tr>
			<?php
			}
			?>
			<tr>
				<td colspan="2"><strong style="font-size: 12px; color: #222222;">Total:</strong></td>
				<td><strong style="font-size: 12px; color: #222222;">
				<?php
				function formatMoney($number, $fractional=false) {
					if ($fractional) {
						$number = sprintf('%.2f', $number);
					}
					while (true) {
						$replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
						if ($replaced != $number) {
							$number = $replaced;
						} else {
							break;
						}
					}
					return $number;
				}
				$sdsd=$_GET['iv'];
				
				?>
				</strong></td>
			</tr>
		
	</tbody>
</table>