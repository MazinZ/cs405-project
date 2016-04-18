<?php
	
	require('../database.php');
	session_start();
	
	$item_ID = $_GET['item_id'];
	$email = $_SESSION['currUserEmail'];


	$cartQuery = mysqli_query($conn,"DELETE FROM Cart WHERE email ='".$email."' AND item_id ='".$item_ID."'");

	header("location:./displayCart.php");
	exit();
	

?>