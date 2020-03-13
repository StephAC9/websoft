<?php
// DB setting
$dsn = 'mysql:host=Localhost;dbname=Customers;charset=UTF8';
$username = 'root';
$password = 'root';
$options = [];

try {

	$connection = new PDO($dsn, $username, $password, $options);
 	
 } catch (PDOException $e) { 	
 } 
 