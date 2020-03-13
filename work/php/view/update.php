<?php
require '../data_connect/db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM customer WHERE customerId = :id";
$statement = $connection-> prepare($sql);
$statement-> execute([':id' => $id]);
$customer = $statement -> fetch(PDO::FETCH_OBJ);


if(isset($_POST['name']) && isset($_POST['email'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phoneNum = $_POST['phoneNum'];
	$sql = 'UPDATE customer SET name = :name, email = :email, phoneNum = :phoneNum WHERE customerId = :id';

	$statement = $connection -> prepare($sql);
	if ($statement-> execute([':name' => $name, ':email' => $email, ':phoneNum' => $phoneNum, ':id' => $id])) {

		header("Location: /");
	}
}
?>
<?php require './shared/header.php'; ?>

<div>

	<h1 style="text-align:center; margin:20px">Update Customer Data </h1>
	
  <div class="update-container">
  		
  		<?php if(!empty($message)): ?>
  			<div class="alert alert-success">
  				<?php echo $message; ?>	
  			</div>
  	<?php endif; ?>

    <form method="post">
    	<input value="<?= $customer->name; ?>" type="text" name="name" id="name" class="form-control">	
		<input value="<?= $customer->email;  ?>" type="email" name="email" id="email" class="form-control">
		<input value="<?= $customer->phoneNum;  ?>" type="text" name="phoneNum" id="phoneNum" class="form-control"><br>
    	<button style="padding:10px" type="submit">UPDATE</button>	
    </form>
    	
    </div>
</div>

<?php require './shared/footer.php'; ?>