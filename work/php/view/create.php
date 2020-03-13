<?php 
require '../data_connect/db.php';
$message = '';
if(isset($_POST['name']) && isset($_POST['email'])&& isset($_POST['phoneNum'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phoneNum = $_POST['phoneNum'];
	$query = 'INSERT INTO customer(name, email, phoneNum) VALUES(:name, :email, :phoneNum)';

	$statement = $connection -> prepare($query);
if ($statement-> execute([':name' => $name, ':email' => $email, ':phoneNum' => $phoneNum])) {
		$message = 'Data inserted successfull';
	}
}

?>
<?php require './shared/header.php'; ?>
<div>

	<h1 style="text-align:center; margin:20px">ADD A NEW CUSTOMER  </h1>
	
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
    	<button style="padding:10px" type="submit">SAVE CUSTOMER</button>	
    </form>
    	
    </div>
</div>

<?php require './shared/footer.php'; ?>
