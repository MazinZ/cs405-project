<?php require('../database.php'); 
session_start();
$email = $_SESSION['currUserEmail'];
?>

<!doctype html>
<html>
<head>
<?php include_once "../templates/includes.php"; ?>
<meta charset="UTF-8">
<title>Orders</title>
</head>

<body>
<div class="container">
	<?php  include_once "../templates/topBar.php"; ?>
    	<h1 style="text-align:left;">Orders</h1>

    <?php

	$custOrdersQuery = mysqli_query($conn, "SELECT O.order_id as order_id, O.order_date as order_date, O.status as status FROM Orders O, CustomerOrders CO WHERE O.order_id = CO.order_id AND CO.email ='".$email."'");
	echo mysqli_error($conn); 
	foreach ($custOrdersQuery as $row ):
		if($row['status'] == 0){
			$status = "Not Shipped";
		}else{
			$status = "Shipped";
		}
		echo"<p> Item Order Date:<strong> ".$row['order_date']." </strong></br></p>";
		echo"<p> Order Status: <strong> ".$status." </strong> </br></p>";
		$orderID = $row['order_id'];
		$itemsOrdersQuery = mysqli_query($conn, "SELECT I.name, I.description 
									FROM Items I, ItemOrders IO
									WHERE I.item_id = IO.item_id AND IO.order_id = '".$orderID."'");
		echo mysqli_error($conn); 
		
		foreach ($itemsOrdersQuery as $res ):
        	echo"<p> Item Name: ".$res['name']."</br></p>";
        	echo"<p> &#8195; Item Description: ".$res['description']."</br></p>";

		endforeach;   		
	echo "<hr>";
	endforeach;
	

?>
    </div>
</body>
</html>