<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Add Promotion</title>
    <?php  include_once "../templates/includes.php"; ?>

</head>
<body>
<?php require('../database.php');  
	session_start();
?>
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

                <label for="discount">Discount percentage: </label>
                <input type="text" name="discount" id="discount" />
                <br>
                <label for="endDate">End date: </label>
                <input type="date" name="endDate" id="endDate" />
                <input type="hidden" name="idPass" id="idPass" />

                <hr>
                <button type="submit">Add promotion</button>

    </form>

</body>
</html>