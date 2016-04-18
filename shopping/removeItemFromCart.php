<?php
	
	require('../database.php');
	session_start();
	
	$cart_ID = $_GET['cart_id'];
	//$email = $_SESSION['currUserEmail'];


	$cartQuery = mysqli_query($conn,"DELETE FROM Cart WHERE cart_id ='".$cart_ID."'");

	
	

?>