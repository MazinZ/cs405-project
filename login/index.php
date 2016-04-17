<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
</head>

<body>

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
    
    
</body>
</html>