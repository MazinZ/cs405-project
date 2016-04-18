<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Shopping</title>
</head>

<body>

 	<?php
    	require("../database.php");
    	include("./display.php");

	$email = $_SESSION['currUserEmail'];

    ?>
    
    <?php displayCart($conn, $email); ?>

    
    
</body>
</html>