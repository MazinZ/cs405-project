   <?php 
	require('../database.php');
	$query="SELECT name, description, price FROM Items";
	$results = mysqli_query($conn, $query);

	while ($row = mysqli_fetch_row($results)) {
    	echo '<tr>';
    	foreach($row as $field) {
        	echo '<td>' . htmlspecialchars($field) . '</td> <br>';
    	}
    	echo '</tr>';
	}

	?>