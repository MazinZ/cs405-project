<?php 

	$username = "root";
	$password = "";
	$dbname = "cs405";
	$servername = "localhost";
	
	$conn = new mysqli($servername, $username, $password, $dbname)
		or die("unable to connect");

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	mysql_select_db('cs405');

?>