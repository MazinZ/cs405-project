<?php
require('../database.php');

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
		echo "Hello " .$email;
		$_SESSION["currUserEmail"]  = $email;
		//$_SESSION["currUserName"]  = $name;
		$_SESSION["userType"]  = 1;
		$_SESSION["loggedIn"]  = true;
		header("location:./index.php");
    	exit();

	}
	else{
			$_SESSION["LoginError"]  = true;
			header("location:./index.php");
			exit();	

	}

?>