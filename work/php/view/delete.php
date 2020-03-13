<?php
require '../data_connect/db.php';
$id = $_GET['id'];
$sql = 'DELETE FROM customer WHERE customerId = :id';
$statement = $connection ->prepare($sql);

  if($statement ->execute([':id' => $id])){

    header("Location:/");

} 