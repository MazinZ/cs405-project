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
	body{background-color:#e0e0e0;}
</style>
</head>

<body>
<div class="container">
    <?php  include_once "../templates/topBar.php"; ?>

    
	<?php if (!isset($_SESSION["loggedIn"])) { 
		if (isset($_SESSION["LoginError"]) && $_SESSION["LoginError"]  == true){
			echo "Username or password incorrect ";
			unset($_SESSION["LoginError"]);
		}
		
	
	
	?>
    <?php if(isset($_SESSION["newRegister"])){  ?>
    
    

    <div class="alert alert-success">
  <strong>Registration successful.</strong> Please login below
</div>
    
    <?php unset($_SESSION["newRegister"]);} ?>
    
    <div class = "centerBox animated fadeIn"> 
    	<h1> Login </h1>

 	<form method="post" action="loginCustomer.php">
                <!--<label for="email">Email: </label>-->
                <input type="text" placeholder="Email" name="custEmailAdd" id="custEmailAdd" />
                <br>
                <!--<label for="password">Password: </label>-->
                <input type="password" placeholder="Password" name="custPass" id="custPass" />
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
		
    </div>
</body>
</html>