<?php require('../database.php');  
	session_start();
	/*if (!isset ($_SESSION['loggedIn']) || $_SESSION["userType"] != 2){
		header("location:./index.php");
		exit();	
	}*/
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Add Promotion</title>
    <?php  include_once "../templates/includes.php"; ?>

</head>
<body>

    
<div class="container">
    <?php  include_once "../templates/topBar.php"; ?>

	<?php if (isset($_SESSION["InsertSuccess"])) { ?>
		<div class="alert alert-success">
  			<strong>Success!</strong> New promotion added.
		</div>
	<?php unset($_SESSION["InsertSuccess"]);} ?>
    
                <div class = "centerBox animated fadeIn" style="height:250px;"> 
<h1> Add Promotion </h1>
	
 	<form method="post" action="processPromo.php">
    <select name="itemList">

    <?php 

		$sql = mysqli_query($conn, "SELECT item_id, name FROM Items");
		while ($row = mysqli_fetch_array($sql)){
			$item_id = $row['item_id'];
			echo "<option id=".$item_id." value=".$item_id.">" .$row['item_id'] .  " " . $row['name'] ."</option>";
			}
	?>
    </select>

                <!--<label for="discount">Discount percentage: </label>-->
                <input type="text" placeholder="Discount percentage" name="discount" id="discount" />
                <br>
                <label for="endDate">End date: </label>
                <input type="date" name="endDate" id="endDate" />
                <input type="hidden" name="idPass" id="idPass" />

                <hr>
                <button type="submit">Add promotion</button>

    </form>
    
    </div>
</div>
</body>
</html>