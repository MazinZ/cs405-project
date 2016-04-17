<?php
session_start();
require('../database.php');

function loginUser($email, $password, $pdo) {
        $sth = $pdo->prepare('SELECT * FROM Customers WHERE email = ? AND password = ?');
      	$testVal = $sth->execute(array($email, $password)); 
	    if($testVal)
            return true;
        else
            return false;
    }
	
	
$email = $_POST['custEmailAdd'];
$password = $_POST['custPass'];



	
	$checkLogin = loginUser($email,$password, $pdo);
	if ($checkLogin){
		echo "testing";
	
	die();	
	}
	else{
			echo "testing2";

	die();	
	}
	
?>