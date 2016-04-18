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

	

    ?>
    
    <?php displayCart($conn);?>

    
    
</body>
</html>