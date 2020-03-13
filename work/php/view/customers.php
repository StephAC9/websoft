<?php
require '../data_connect/db.php';
$query = 'SELECT * FROM customer'; 
$statement = $connection -> prepare($query);
$statement -> execute();
$getAllcustomers = $statement -> fetchAll(PDO::FETCH_OBJ);
?>

<?php require './shared/header.php'; ?>

<div>
		<h1 style="margin: 20px; text-align:center">OUR CUSTOMERS</h1>	
		<div class="customer-table">
			<table>
				<?php foreach($getAllcustomers as $customer): ?>
				<tr>
					<td><?= $customer->customerId; ?></td>
					<td><?= $customer->name; ?></td>
					<td><?= $customer->email; ?></td>
					<td><?= $customer->phoneNum; ?></td>
					<td style="width: 200px">
						<a class="customerBtn" style="margin-right:20px" href ="update.php?id=<?php echo $customer->customerId ?>">Update</a>
						<a class="customerBtn" onclick = "return confirm('Do you want to remove the customer')" href ="delete.php?id=<?php echo $customer->customerId ?>">Remove </a>
					</td>					
				</tr>
			<?php endforeach; ?>
				
			</table>
			
		</div>	
</div>

<?php require './shared/footer.php';  ?>
