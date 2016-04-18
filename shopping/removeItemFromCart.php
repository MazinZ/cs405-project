<?php
	
	require('../database.php');
	session_start();
	
	$item_ID = $_GET['item_id'];
	$email = $_SESSION['currUserEmail'];
	echo $item_ID;
	echo $email;

	$cartQuery = mysqli_query($conn,"DELETE FROM Cart WHERE email ='".$email."' AND item_id ='".$item_ID."'");

?>