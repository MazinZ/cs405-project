<?php
	
	require('../database.php');

	//if(!isset($_SESSION['currUserEmail']))
	//{
	//	header("Location: ../login/index.php");
	//	die(0);
	//}


	
	echo $item_ID;


	$cartQuery = mysqli_query($conn, "INSERT INTO Cart(email, item_id) VALUES(?, ?)");



?>