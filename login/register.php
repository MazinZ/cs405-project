<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Register</title>
    <?php  include_once "../templates/includes.php"; ?>

</head>

<body>
<div class="container">
    <?php  include_once "../templates/topBar.php"; ?>
        <div class = "centerBox animated fadeIn" style="height:390px;"> 

<h1> Register </h1>
<form method="post" action="registerCustomer.php">
				
                
                <!--<label for="email">Email: </label>-->
                <input type="text"  placeholder="Email" name="custEmailAdd" id="custEmailAdd" />
                <br>
                <!--<label for="password">Password: </label>-->
                <input type="password" placeholder="Password" name="custPass" id="custPass" />
                <br>
                
                <!--<label for="Name">Name: </label>-->
                <input type="text" placeholder="Name" name="custName" id="custName" />
                <br>
                
                 <!--<label for="Address">Address: </label>-->
                <input type="text" placeholder="Address" name="custAdd" id="custAdd" />
                <br>
                
                
                <button type="submit">Register</button>
                <hr>
                
                <a href="./index.php">Already have an account?</a>
    </form>
</div>
</div>
</body>
</html>