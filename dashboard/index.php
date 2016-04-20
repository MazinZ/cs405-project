<?php require('../database.php'); 
session_start();

?>


<!doctype html>
<html>
<head>
    <?php  include_once "../templates/includes.php"; ?>

<meta charset="UTF-8">
<title>Staff Login</title>
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
            <div class = "centerBox animated fadeIn" style="height:250px;"> 

 	<form method="post" action="loginStaff.php">
    <h1> Dashboard </h1>

                <!--<label for="email">Email: </label>-->
                <input type="text" placeholder="Email" name="staffEmailAdd" id="staffEmailAdd" />
                <br>
                <!--<label for="password">Password: </label-->
                <input placeholder="Password" type="password" name="staffPass" id="staffPass" />
                <br>
                <button type="submit">Login</button>
                <hr>
    </form>
    </div>
    <?php }  else {	
	
	if(isset($_SESSION["currUserName"])){	?>
    
    <p> Logged in as <?php echo $_SESSION['currUserName']; ?> </p>
	<?php  }}?>

</div>
</body>
</html>