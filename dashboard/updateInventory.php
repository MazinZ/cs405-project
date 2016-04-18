<?php 	require('../database.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Update Inventory</title>
    <?php  include_once "../templates/includes.php"; ?>
<script>
         $(function() {
            $( ".spinner" ).spinner({

            });
 
         });
      </script>
      
</head>

<body>

   <?php 
	$query="SELECT name, description, price, stock FROM Items";
	$results = mysqli_query($conn, $query);

	while ($row = mysqli_fetch_row($results)) {
    	echo '<tr>';
    	foreach($row as $field) {
        	echo '<td>' . htmlspecialchars($field) . '</td> <br><br>';
    	}
    	echo '</tr><input type="text" class="spinner" value="'.$row[3].'" /><br><br><hr>';
	}


	?>
    
   <button type="submit">Update</button>

    
</body>
</html>