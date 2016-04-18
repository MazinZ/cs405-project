<?php
require('../database.php');
session_start();


function loginUser($email, $password, $conn) {
        
		$authQuery = mysqli_query($conn, "SELECT * FROM Customers WHERE email ='".$email."'AND password = '" . $password."'");
	    if(mysqli_num_rows($authQuery) > 0){
            return true;
		}
        else{
            return false;
		}
    }
	
	
$email = $_POST['custEmailAdd'];
$password = $_POST['custPass'];

	
	$checkLogin = loginUser($email,$password, $conn);
	if ($checkLogin){
		$infoQuery = mysqli_query($conn, "SELECT name FROM Customers WHERE email ='".$email."'");
		$row = mysqli_fetch_row($infoQuery);
		
		echo "Hello " .$email;
		$_SESSION["currUserEmail"]  = $email;
		$_SESSION["currUserName"]  = $row[0];
		$_SESSION["userType"]  = 0;
		$_SESSION["loggedIn"]  = true;
		header("location:../shopping/index.php");
    	exit();

	}
	else{
			$_SESSION["LoginError"]  = true;
			header("location:./index.php");
			exit();	

	}

?>