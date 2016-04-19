<?php require('../database.php'); 
session_start();

?>

<!doctype html>
<html>
<head>
    <?php  include_once "../templates/includes.php"; ?>

<meta charset="UTF-8">
<title>Login</title>

<style> 
	body{background-color:#17181a;}
</style>
</head>

<body>
	<h1> Customer Login </h1>
    
    <?php  include_once "../templates/topBar.php"; ?>

    
	<?php if (!isset($_SESSION["loggedIn"])) { 
		if (isset($_SESSION["LoginError"]) && $_SESSION["LoginError"]  == true){
			echo "Username or password incorrect ";
			unset($_SESSION["LoginError"]);
		}
	?>
    <div class = "centerBox"> 
 	<form method="post" action="loginCustomer.php">
                <label for="email">Email: </label><br>
                <input type="text" name="custEmailAdd" id="custEmailAdd" />
                <br>
                <label for="password">Password: </label><br>
                <input type="password" name="custPass" id="custPass" />
                <br>
                <button type="submit">Login</button>
                <hr>
                <a href="./register.php">Don't have an account?</a>
    </form>
    </div>
    <?php }  else {	
	
	if(isset($_SESSION["currUserName"])){	?>
    
    <p> Logged in as <?php echo $_SESSION['currUserName']; ?> </p>
	<?php  }}?>
		
    
</body>
</html>