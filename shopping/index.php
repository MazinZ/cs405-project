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

    ?>
    
    <?php displayItems($conn); ?>

    
    
</body>
</html>