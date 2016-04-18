<?php require('../database.php'); ?>


<!doctype html>
<html>
<head>
    <?php  include_once "../templates/includes.php"; ?>

<meta charset="UTF-8">
<title>Staff Login</title>
</head>

<body>

<h1> Staff Login </h1>
    <?php  include_once "../templates/topBar.php"; ?>

<?php if (!isset($_SESSION["loggedIn"])) { 
		if (isset($_SESSION["LoginError"]) && $_SESSION["LoginError"]  == true){
			echo "Username or password incorrect ";
			unset($_SESSION["LoginError"]);
		}
	?>
 	<form method="post" action="loginStaff.php">
                <label for="email">Email: </label>
                <input type="text" name="staffEmailAdd" id="staffEmailAdd" />
                <br>
                <label for="password">Password: </label>
                <input type="password" name="staffPass" id="staffPass" />
                <br>
                <button type="submit">Login</button>
                <hr>
    </form>
    <?php }  else {	
	
	if(isset($_SESSION["currUserName"])){	?>
    
    <p> Logged in as <?php echo $_SESSION['currUserName']; ?> </p>
	<?php  }}?>
    
</body>
</html>