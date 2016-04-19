<?php require('../database.php'); 
session_start();
?>

<!doctype html>
<html>
<head>
<?php include_once "../templates/includes.php"; ?>
<meta charset="UTF-8">
<title>Cart</title>
</head>

<body>

	<h1>Cart</h1>
	<?php  include_once "../templates/topBar.php"; ?>
 	<?php
    	require("../database.php");
    	include("./displayCart.php");
    ?>
    
    <?php displayCart($conn);?>

    <a href="<?php echo HTTP . "purchase.php"?>">Purchase</a>

    
    
</body>
</html>