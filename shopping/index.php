<?php require('../database.php'); 
session_start();
?>

<!doctype html>
<html>
<head>
<?php include_once "../templates/includes.php"; ?>
<meta charset="UTF-8">
<title>Shopping</title>
</head>

<body>
	<div class="container">
	<?php  include_once "../templates/topBar.php"; ?>
    	<h1 style="text-align:left;">Shopping</h1>
        <br>

 	<?php
    	require("../database.php");
    	include("./display.php");

	$email = $_SESSION['currUserEmail'];

    ?>
    
    <?php displayItems($conn);?>

    
    </div>
</body>
</html>