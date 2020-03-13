<?php
require '../data_connect/db.php';
$search = $_GET ["search"] ?? null;
$like = "%$search%";

if($search){

	$sql =  'SELECT * FROM customer WHERE customerId = ? OR name LIKE ? OR email LIKE ?' ;
	$statement = $connection -> prepare($sql);
	$statement -> execute([$search, $like, $like]);
	$customer = $statement -> fetchAll(PDO::FETCH_OBJ);

}
?>

<?php require './shared/header.php'; ?>

<div >
	<h2 style="text-align:center; margin:20px">Search customer by name</h2>	
	<div style="width:80%; margin:0 auto">
		<form style="width:100%; text-align:center; margin-bottom:100px">
			<input style="width:50%;padding:10px; outline:0" placeholder="Enter customer's name..." type="search" name="search" value="<?= $search ?>">
		</form>
		<?php if ($search) : ?>
		<table >
					
		<?php foreach($customer as $find): ?>
					<tr>
						<td><?= $find->customerId; ?></td>
						<td><?= $find->name; ?></td>
						<td><?= $find->email; ?></td>
						<td><?= $find->phoneNum; ?></td>
						<td style="width:200px">
							<a class="customerBtn" style="margin-right:20px" href ="update.php?id=<?php echo $customer->customerId ?>">Update</a>
							<a class="customerBtn" onclick = "return confirm('Do you want to remove the customer')" href ="delete.php?id=<?php echo $customer->customerId ?>">Remove </a>
						</td>
						
					</tr>
				<?php endforeach; ?>
					
				</table>
				<?php endif ;?>			
		</div>	
</div>



<?php require './shared/footer.php';  ?>








