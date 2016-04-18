<?php
require('../database.php');

$row;

function loginStaff($email, $password, $conn) {
        
		
	
		$authQuery = mysqli_query($conn, "SELECT * FROM Staff WHERE email ='".$email."'AND password = '" . $password."'");
	    if(mysqli_num_rows($authQuery) > 0){
            return true;

		}
        else{
            return false;
		}
    }
	
	
$email = $_POST['staffEmailAdd'];
$password = $_POST['staffPass'];


	
	$checkLogin = loginStaff($email,$password, $conn);
	if ($checkLogin){
		$infoQuery = mysqli_query($conn, "SELECT name, manager FROM Staff WHERE email ='".$email."'");
		$row = mysqli_fetch_row($infoQuery);
				$_SESSION["loggedIn"]  = true;

		
		// 2 for manager
		if (	$row[1] == 1) {
			$_SESSION["userType"]  = 2;
	
		}
		
		// 1 for regular staff
		else if($row[1] == 0) {
			$_SESSION["userType"]  = 1;
		}

		else {
			$_SESSION["userType"]  = 0;
		}
		
		
		echo "Hello " .$email;
		$_SESSION["currUserEmail"]  = $email;
		$_SESSION["currUserName"]  = $row[0];
	
		
		
		header("location:./index.php");
    	exit();
	}
	else{
			$_SESSION["LoginError"]  = true;
			header("location:./index.php");
			exit();	

	}

?>