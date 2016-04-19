<?php require('../database.php');  
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Sales Statistics</title>
    <?php  include_once "../templates/includes.php"; ?>

</head>

<body>

<h1> Sales Statistics </h1>
    <?php  include_once "../templates/topBar.php"; 

    $itemsQuery = mysqli_query($conn, "SELECT item_id FROM Items");

    foreach ($itemsQuery as $row ): 
      $itemID = $row['item_id'];
      $statQuery = mysqli_query($conn, "SELECT COUNT(*) as cnt FROM ItemOrders  WHERE item_id ='".$itemID."'");

      $itemCount =  $statQuery->fetch_object()->cnt;
      echo "item: "; 
      echo $itemCount; 

    endforeach;
    ?>

<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Week</a></li>
  <li><a data-toggle="tab" href="#menu1">Month</a></li>
  <li><a data-toggle="tab" href="#menu2">Year</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <h3>Week</h3>
    <p>Some content.</p>
  </div>
  <div id="menu1" class="tab-pane fade">
    <h3>Month</h3>
    <p>Some content in menu 1.</p>
  </div>
  <div id="menu2" class="tab-pane fade">
    <h3>Year</h3>
    <p>Some content in menu 2.</p>
  </div>
</div>

</body>
</html>