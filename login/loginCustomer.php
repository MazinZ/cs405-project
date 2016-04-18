<?php
require('../database.php');

function loginUser($email, $password, $conn) {
        
		
		//$nRows = $pdo->query('SELECT * FROM Customers WHERE email ='.$email. 'AND password = ' . $password."'')->fetchColumn(); 
		
		$authQuery = mysqli_query($conn, "SELECT * FROM Customers WHERE email ='".$email."'AND password = '" . $password."'");
		//$checkUser = mysqli_fetch_array($authQuery);
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

	}
	else{
			echo "Username or password incorrect ";

	}
			die();	

?>