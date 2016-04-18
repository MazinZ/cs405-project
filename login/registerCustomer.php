<?php
require('../database.php');
session_start();



function registerUser($conn, $email, $password, $name, $address){
	
		if ( mysqli_query($conn,"INSERT INTO Customers(email,password,name,address) VALUES('$email','$password','$name','$address')"))
			return true;
		else
			return false;
	
}


$email = $_POST['custEmailAdd'];
$password = $_POST['custPass'];
$name = $_POST['custName'];
$address = $_POST['custAdd'];


$authQuery = mysqli_query($conn, "SELECT * FROM Customers WHERE email ='".$email."'");


	   	if(mysqli_num_rows($authQuery) > 0){
            echo "User already exists";
		}
        else{
			
			if(registerUser($conn, $email, $password, $name, $address))
				echo "New user registered";
			else
				echo "Error";
		}
		
		
?>