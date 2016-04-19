<?php 
require('../database.php'); 
require('viewPendFunc.php');
require('shipOrder.php');
session_start();

?>
<!doctype html>
<head>
<meta charset="UTF-8">
<title>Pending Orders</title>
	<?php  include_once "../templates/includes.php"; ?>
</head>
<body>
	<?php
        if(!isset($_GET['order_id'])){

        }else{
            $order_ID = $_GET['order_id'];
            shipOrder($conn, $order_ID);
        }
        $getOrderIDs = "SELECT order_id FROM Orders WHERE status = 0";
        $result = mysqli_query($conn, $getOrderIDs);
        $orderID = mysqli_fetch_all($result);
        foreach($orderID as $order_id):
            viewPendFunc($conn,$order_id[0]);
        	//ship button
            $ship_order = "viewPendingOrders.php?order_id=" .$order_id[0];
            echo "<a href='$ship_order'>Ship Order</a>";
        endforeach;
	?>
</body>
</html>