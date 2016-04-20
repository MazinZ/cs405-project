<?php session_start(); ?>
<!--<?php require('./database.php'); ?>-->
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Home</title>
    <?php  include_once "./templates/includes.php"; ?>

</head>

<body>
<div class="container">

	<!--<h1> Home </h1>-->
    
    <?php  include_once "./templates/topBar.php"; ?>

	<!--<a href="./login">Login</a>
	<a href="./logout.php">Logout</a>-->
    <br>
        <br>

    <div class = "centerBox animated fadeIn" style="padding:10px; padding-left:30px; text-align:left; height:180px;"> 
		<h6> CS 405</h6>
        <h5> Mazin Zakaria <br>
        Daun Chung<br>
        Erika Wilcox    <br>
        </h5>
 	</div>

<!--<?php include_once "./shopping/itemList.php"; ?>-->

</div>
               
</body>
</html>