<?php
	require('../database.php');
	session_start();

	$email = $_SESSION['currUserEmail'];

	$orderRes = mysqli_query($conn, "SELECT COUNT(DISTINCT order_id) + 1 as or_id FROM Orders" );

	$orderID = $orderRes['or_id'];

	echo $orderID;
	


	//$cartQuery = mysqli_query($conn, "SELECT * FROM Cart C, Items I WHERE I.item_id = C.item_id AND C.email ='".$email."'");

		
	

?>