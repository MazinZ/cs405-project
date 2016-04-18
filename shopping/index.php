<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Shopping</title>
</head>

<body>

 	<?php
        if(!isset($keyword))
            echo "<h2>All items</h2>";
        else
            echo "<h2>Items realted to \"$keyword\"</h2>";


        if(!isset($res))
        {
            
        }
    ?>

    
    
</body>
</html>