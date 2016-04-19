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
	<h1>Shopping</h1>
	<?php  include_once "../templates/topBar.php"; ?>
 	<?php
    	require("../database.php");
    	include("./display.php");

	$email = $_SESSION['currUserEmail'];

    ?>
    
    <?php displayItems($conn);?>

    
    
</body>
</html>