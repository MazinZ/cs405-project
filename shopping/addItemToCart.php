<?php
	
	require('../database.php');
	session_start();
	
	$item_ID = $_GET['item_id'];
	$email = $_SESSION['currUserEmail'];

	$cartQuery = mysqli_query($conn,"INSERT INTO Cart(email,item_id) VALUES('$email','$item_ID')");

	if($cartQuery)
	{
		header("location:./index.php");
		exit();
	}

?>