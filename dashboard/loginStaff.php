<?php
require('../database.php');

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
		echo "Hello " .$email;

	}
	else{
			echo "Username or password incorrect ";

	}
			exit();	

?>