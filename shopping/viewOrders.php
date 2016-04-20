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
    	include("./displayCart.php");
    ?>
    
    <?php displayOrders($conn);?>
    
</body>
</html>