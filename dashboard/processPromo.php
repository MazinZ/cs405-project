<?php 
	require('../database.php');  
	session_start();
	
	
	$discount = $_POST['discount'];
	$endDate = $_POST['endDate'];
	$currItem = $_POST['itemList'];
	
	$startDate = date("Y/m/d");
	 mysqli_query($conn,"INSERT INTO Promotions(discount,start,end) VALUES('$discount','$startDate','$endDate')");

	$promoIDQuery = mysqli_query($conn, "SELECT COUNT(DISTINCT promotion_id) as id FROM Promotions");
	$promoID =  $promoIDQuery->fetch_object()->id;

	$getCurrPrice = mysqli_query($conn, "SELECT price FROM Items WHERE item_id=".$currItem."");
	$queryArray = mysqli_fetch_array($getCurrPrice);
	$newPrice =$queryArray['price']- $queryArray['price']*($discount/100);
	mysqli_query($conn, "UPDATE Items SET price='".$newPrice."' WHERE item_id='".$currItem."';");
	mysqli_query($conn, "UPDATE Items SET Promoted = '1' WHERE item_id ='".$currItem."'");		

	
	mysqli_query($conn,"INSERT INTO Included(item_id,promotion_id) VALUES($currItem, $promoID)");
	$_SESSION["InsertSuccess"]  = true;
	header("location:./salesPromo.php");
	exit();	
	
?>