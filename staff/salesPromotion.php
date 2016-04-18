<?php
	require_once 'authenticate.php';
    if(authenticate() == 0){
        $_SESSION['NEEDS_TO_SIGN_IN'] = true;
        header("Location: ../dashboard/login.php");
        die();
    }
    if(authenticate() == 1){
        $_SESSION['NOT_A_MANAGER'] = true;
        header("Location: ../index.php");
        die();
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sales Promotion</title>
    </head>
    <body>
		<?php
		//can add promotion by percentage
		?>
    </body>
</html>
