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
        <title>Sales Statistics</title>
    </head>
    <body>
        <?php
        //show the sales statistics of week month and year
        ?>
    </body>
</html>