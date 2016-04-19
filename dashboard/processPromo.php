<?php 
	require('../database.php');  
	session_start();
	
	
	$discount = $_POST['discount'];
	$endDate = $_POST['endDate'];
	$currItem = $_POST['itemList'];
	
	$startDate = date("m/d/Y");
	echo mysqli_query($conn,"INSERT INTO Promotions(discount,start,end) VALUES('$discount','$startDate','$endDate')");
		echo "|||||||||";

	$promoIDQuery = mysqli_query($conn, "SELECT COUNT(DISTINCT promotion_id) as id FROM Promotions");
	$promoID =  $promoIDQuery->fetch_object()->id;

	echo $promoID;
		echo "|||||||||";

		echo $currItem;
		$currItem = intval($currItem);
		$promoID = intval($promoID);

	echo "|||||||||\n";
	echo mysqli_query($conn,"INSERT INTO Included(item_id,promotion_id) VALUES($currItem, $promoID)");
		echo "|||||||||";
echo mysqli_error($conn);
	
?>