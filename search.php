
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
<div class="container"> 
    <?php  include_once "./templates/topBar.php";  ?>
    <h1 style="text-align:left"> Results </h1>
<h2> <?php if (isset($_GET['srch-term'])) echo  $_GET['srch-term']?></h2>

	<?php if (isset($_GET['srch-term'])){
		$allcartItemsQuery = mysqli_query($conn, "SELECT * FROM Items WHERE name = '".$_GET['srch-term']. "'");

	//echo '<tr>';
		foreach ($allcartItemsQuery as $res ):
			echo '<p>' .$res['name']. '</p>' ;
			echo '<p>' .$res['description']. '</p>' ;
			echo '<p>' .$res['price']. '</p>' ;
			echo '<p>';
		endforeach;
	//echo '</tr>';
	} ?>
    
    </div>
</body>
</html>