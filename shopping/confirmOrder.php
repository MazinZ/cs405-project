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
<div class="container">
	<h1 style="text-align:left;">My Orders</h1>
	<?php  include_once "../templates/topBar.php"; ?>
 	<?php
    	require("../database.php");
    	include("./displayCart.php");
    ?>
    
    <?php

    ?>
    <p>Your order has been submitted.</p>

    <a href="<?php echo HTTP . "./shopping/viewOrders.php"?>">View My Orders</a>

    
    </div>
</body>
</html>