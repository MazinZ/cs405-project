<?php
	require('../database.php');
	session_start();

	$email = $_SESSION['currUserEmail'];

	

	$cartCount = mysqli_query($conn, "SELECT COUNT(*) as cnt FROM Cart WHERE email ='".$email."'");
	$numItems = $cartCount->fetch_object()->cnt;

	//Get items from the cart
	$cartQuery = mysqli_query($conn, "SELECT * FROM Cart C, Items I WHERE I.item_id = C.item_id AND C.email ='".$email."'");
	
	$cartErrorFlag = false;
	//Create Item Orders
	foreach ($cartQuery as $row ): 
		$itemID = $row['item_id'];
		if ($row['stock'] <= 0) {
			$cartErrorFlag = true;	
		}
	endforeach;
	
	if (!$cartErrorFlag) {
		$orderQuery = mysqli_query($conn, "SELECT COUNT(DISTINCT order_id) + 1 as id FROM Orders");

	//Get the order id
	$orderID =  $orderQuery->fetch_object()->id;

	$orderCon = mysqli_query($conn, "INSERT INTO Orders(order_id, status, order_date, ship_date) VALUES ($orderID, 0, NOW(), NULL)");
	foreach ($cartQuery as $row ): 
		$itemID = $row['item_id'];
		$itemOrder = mysqli_query($conn, "INSERT INTO ItemOrders(order_id, item_id) VALUES($orderID, $itemID)");
		$updateStock = mysqli_query($conn, "UPDATE Items SET stock = (stock - 1) WHERE item_id ='".$itemID."'");		
	endforeach;
	$custOrder = mysqli_query($conn, "INSERT INTO CustomerOrders (email, order_id) VALUES('$email', $orderID)");
	

	$deleteCart = mysqli_query($conn, "DELETE FROM Cart WHERE email ='".$email."'");

	}
	else {
		
		header("location:./errorOccured.php");
		exit();
	}
	
	//Create Customer Order	
	
	header("location:../shopping/confirmOrder.php");
	exit();

?>