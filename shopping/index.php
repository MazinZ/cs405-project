<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Shopping</title>
</head>

<body>

 	<?php
    	require("../database.php");

    	$allcartItemsQuery = mysqli_query($conn, "SELECT * FROM Items");

		echo '<tr>';
			foreach ($allcartItemsQuery as $res ):
				echo '<td>' .$res['name']. '</td>' ;
				echo '<td>' .$res['description']. '</td>' ;
				echo '<td>' .$res['price']. '</td>' ;
			endforeach;
		echo '</tr>';

    ?>

    
    
</body>
</html>