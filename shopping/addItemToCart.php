<?php
	
	require('../database.php');

	//if(!isset($_SESSION['currUserEmail']))
	//{
	//	header("Location: ../login/index.php");
	//	die(0);
	//}


	$item_ID = $_GET['item_id'];



	$cartQuery = mysqli_query($conn, "INSERT INTO Cart(email, item_id) VALUES(?, ?)");



?>