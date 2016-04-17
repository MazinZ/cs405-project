<?php
session_start();
require('../database.php');


$email = $_POST['custEmailAdd'];
$password = $_POST['custPass'];


function loginUser($email, $password) {
        $sth = $pdo->prepare('SELECT * FROM Customers WHERE email = ? AND password = ?');
      	$testVal = $sth->execute(array($email, $password)); 
	    if($testVal->rowCount() == 0)
            return false;
        else
            return true;
    }
	
	
	
	
?>