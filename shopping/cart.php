<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Cart</title>
</head>

<body>

 	<?php
    	require("../database.php");
    	include("./displayCart.php");

	$email = $_SESSION['currUserEmail'];

    ?>
    
    <?php displayCart($conn, $email);?>

    
    
</body>
</html>