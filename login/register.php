<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Register</title>
</head>

<body>
<h1> Register </h1>
<form method="post" action="registerCustomer.php">
				
                
                <label for="email">Email: </label>
                <input type="text" name="custEmailAdd" id="custEmailAdd" />
                <br>
                <label for="password">Password: </label>
                <input type="password" name="custPass" id="custPass" />
                <br>
                
                <label for="Name">Name: </label>
                <input type="text" name="custName" id="custName" />
                <br>
                
                 <label for="Address">Address: </label>
                <input type="text" name="custAdd" id="custAdd" />
                <br>
                
                
                <button type="submit">Register</button>
                <hr>
                
                <a href="./index.php">Already have an account?</a>
    </form>


</body>
</html>