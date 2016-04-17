<?php
session_start();
require('../database.php');

function loginUser($email, $password, $pdo) {
        $sth = $pdo->prepare('SELECT * FROM Staff WHERE email = ? AND password = ?');
      	$testVal = $sth->execute(array($email, $password)); 
	    if($testVal)
            return true;
        else
            return false;
    }
	
	
$email = $_POST['staffEmailAdd'];
$password = $_POST['staffPass'];



	
	$checkLogin = loginUser($email,$password, $pdo);
	if ($checkLogin){
		echo "testing";

	}
	else{
			echo "testing2";
	}
		die();	

	
?>