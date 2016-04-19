<?php 
	require('../database.php');  
	session_start();
	
	
	$discount = $_POST['discount'];
	$endDate = $_POST['endDate'];
	$currItem = $_POST['itemList'];
	
	$startDate = date("m/d/Y");
	 mysqli_query($conn,"INSERT INTO Promotions(discount,start,end) VALUES('$discount','$startDate','$endDate')");

	$promoIDQuery = mysqli_query($conn, "SELECT COUNT(DISTINCT promotion_id) as id FROM Promotions");
	$promoID =  $promoIDQuery->fetch_object()->id;



	mysqli_query($conn,"INSERT INTO Included(item_id,promotion_id) VALUES($currItem, $promoID)");
	$_SESSION["InsertSuccess"]  = true;
	header("location:./salesPromo.php");
	exit();	
	
?>