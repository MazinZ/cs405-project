<?php require('../database.php'); ?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
</head>

<body>
	<h1> Customer Login </h1>
	<?php if (!isset($_SESSION["loggedIn"])) { 
		if (isset($_SESSION["LoginError"]) && $_SESSION["LoginError"]  == true){
			echo "Username or password incorrect ";
			unset($_SESSION["LoginError"]);
		}
	?>
 	<form method="post" action="loginCustomer.php">
                <label for="email">Email: </label>
                <input type="text" name="custEmailAdd" id="custEmailAdd" />
                <br>
                <label for="password">Password: </label>
                <input type="password" name="custPass" id="custPass" />
                <br>
                <button type="submit">Login</button>
                <hr>
                <a href="./register.php">Don't have an account?</a>
    </form>
    <?php }  else {	
	
	if(isset($_SESSION["currUserName"])){	?>
    
    <p> Logged in as <?php echo $_SESSION['currUserName']; ?> </p>
	<?php  }}?>
		
    
</body>
</html>