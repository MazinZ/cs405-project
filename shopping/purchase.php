<?php
	require('../database.php');
	session_start();

	$email = $_SESSION['currUserEmail'];

	$orderQuery = mysqli_query($conn, "SELECT COUNT(DISTINCT order_id) + 1 as id FROM Orders");

	//Get the order id
	$orderID =  $orderQuery->fetch_object()->id;

	$orderCon = mysqli_query($conn, "INSERT INTO Orders(status, order_date, ship_date) VALUES (0, NOW(), NULL)");


	$cartCount = mysqli_query($conn, "SELECT COUNT(*) as cnt FROM Cart WHERE email ='".$email."'");
	$numItems = $cartCount->fetch_object()->cnt;

	//Get items from the cart
	$cartQuery = mysqli_query($conn, "SELECT * FROM Cart C, Items I WHERE I.item_id = C.item_id AND C.email ='".$email."'");

	//Create Item Orders
	foreach ($cartQuery as $row ): 
		$itemID = $row['item_id'];
		$itemOrder = mysqli_query($conn, "INSERT INTO ItemOrders(order_id, item_id) VALUES($orderID, $itemID)");
		$updateStock = mysqli_query($conn, "UPDATE Items SET stock = (stock - 1) WHERE item_id ='".$itemID."'");		
	endforeach;

	//Create Customer Order	
	$custOrder = mysqli_query($conn, "INSERT INTO CustomerOrders (email, order_id) VALUES('$email', $orderID)");
	

	$deleteCart = mysqli_query($conn, "DELETE FROM Cart WHERE email ='".$email."'");

	header("location:../shopping/confirmOrder.php");
	exit();

?>