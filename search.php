
<?php require('./database.php');  
	session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Search Results</title>
    <?php  include_once "./templates/includes.php"; ?>
	
</head>

<body>
<h1> Results </h1>
<h2> <?php if (isset($_GET['srch-term'])) echo  $_GET['srch-term']?></h2>
    <?php  include_once "./templates/topBar.php";  ?>
	<?php if (isset($_GET['srch-term'])){
		$allcartItemsQuery = mysqli_query($conn, "SELECT * FROM Items WHERE name = '".$_GET['srch-term']. "'");

	echo '<tr>';
		foreach ($allcartItemsQuery as $res ):
			echo '<td>' .$res['name']. '</td>' ;
			echo '<td>' .$res['description']. '</td>' ;
			echo '<td>' .$res['price']. '</td>' ;
			echo '<br>';
		endforeach;
	echo '</tr>';
	} ?>
</body>
</html>