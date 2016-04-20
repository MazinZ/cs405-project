<?php require('../database.php'); 
session_start();
?>

<!doctype html>
<html>
<head>
<?php include_once "../templates/includes.php"; ?>
<meta charset="UTF-8">
<title>Orders</title>
</head>

<body>

	<h1>Orders</h1>
	<?php  include_once "../templates/topBar.php"; ?>
 	<?php
    	require("../database.php");
    ?>
    
    <?php


	$email = $_SESSION['currUserEmail'];

	$custOrdersQuery = mysqli_query($conn, "SELECT O.order_id, O.order_date, O.status FROM Orders O, CustomerOrders CO WHERE O.order_id = CO.order_id AND CO.email ='".$email."'");
	echo mysqli_error($conn);

	foreach ($custOrdersQuery as $row ):
		$orderID = $row['order_id'];
		echo"<p> Item Order Date: ".$row['order_date']."</br></p>";
		echo"<p> Order Status: ".$row['status']."</br></p>";

		$itemsOrdersQuery = mysqli_query($conn, "SELECT I.name, I.description 
									FROM Items I, ItemOrders IO
									WHERE I.item_id = IO.item_id AND IO.order_id = '".$orderID."'");

		foreach ($itemsOrdersQuery as $res ):
        	echo"<p> Item Name: ".$res['name']."</br></p>";
        	echo"<p> Item Description: ".$res['description']."</br></p>";		
		endforeach;    		
	
	endforeach;


	

	




	
	//header("location:../shopping/confirmOrder.php");
	exit();

?>
    
</body>
</html>