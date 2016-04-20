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

    <div class = "container">
	<?php  include_once "../templates/topBar.php"; ?>
    	<h1 style="text-align:left;">Cart</h1>
        <br>

 	<?php
    	require("../database.php");
    	include("./displayCart.php");
    ?>
    
    <?php displayCart($conn);?>

    <a href="<?php echo HTTP . "shopping/purchase.php"?>">Purchase</a>
	
    
    
    
    </div>
</body>
</html>