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
<title>Sales Statistics</title>
    <?php  include_once "../templates/includes.php"; ?>

</head>

<body>

<h1> Sales Statistics </h1>
    <?php  include_once "../templates/topBar.php"; 

    
    ?>




    

<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Week</a></li>
  <li><a data-toggle="tab" href="#menu1" >Month</a></li>
  <li><a data-toggle="tab" href="#menu2" >Year</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <h3>Week</h3>
    <?php  include_once "../templates/topBar.php"; 

    $period = 'week';
    $getOrders = mysqli_query($conn, "SELECT order_id FROM Orders WHERE order_date >= DATE_SUB( CURDATE(), INTERVAL 1 WEEK)");

    foreach ($getOrders as $row): 
        //echo '<td>' .$row['order_id']. '</td>' ;
        $orderID = $row['order_id'];

        $itemsQuery = mysqli_query($conn, "SELECT I.item_id, I.name, COUNT(IO.item_id) as ct FROM Items I, ItemOrders IO
                      WHERE IO.item_id = '".$orderID."' AND I.item_id = IO.item_id");

        $itemCount =  $itemsQuery->fetch_object()->ct;

        foreach ($itemsQuery as $res):         
          echo '<td>' .$res['name']. '</td>' ;
          echo '<td>' .$res['item_id']. '</td>' ;
          echo '<td>' .$itemCount. '</td>';
          echo '<br>';
        endforeach;

    endforeach;
    
    ?>
    <p></p>
  </div>
  <div id="menu1" class="tab-pane fade">
    <h3>Month</h3>
    <?php  include_once "../templates/topBar.php"; 

    $period = 'month';
    $getOrders = mysqli_query($conn, "SELECT order_id FROM Orders WHERE order_date >= DATE_SUB( CURDATE(), INTERVAL 1 MONTH)");

    foreach ($getOrders as $row): 
        //echo '<td>' .$row['order_id']. '</td>' ;
        $orderID = $row['order_id'];

        $itemsQuery = mysqli_query($conn, "SELECT I.item_id, I.name, COUNT(IO.item_id) as ct FROM Items I, ItemOrders IO
                      WHERE IO.item_id = '".$orderID."' AND I.item_id = IO.item_id");

        $itemCount =  $itemsQuery->fetch_object()->ct;

        foreach ($itemsQuery as $res):         
          echo '<td>' .$res['name']. '</td>' ;
          echo '<td>' .$res['item_id']. '</td>' ;
          echo '<td>' .$itemCount. '</td>';
          echo '<br>';
        endforeach;

    endforeach;
    
    ?>
    <p>Some content in menu 1.</p>
  </div>
  <div id="menu2" class="tab-pane fade">
    <h3>Year</h3>
    <?php  include_once "../templates/topBar.php"; 

    $period = 'year';
    $getOrders = mysqli_query($conn, "SELECT order_id FROM Orders WHERE order_date >= DATE_SUB( CURDATE(), INTERVAL 1 YEAR)");

    foreach ($getOrders as $row): 
        $orderID = $row['order_id'];

        $itemsQuery = mysqli_query($conn, "SELECT I.item_id, I.name, COUNT(IO.item_id) as ct FROM Items I, ItemOrders IO
                      WHERE IO.item_id = '".$orderID."' AND I.item_id = IO.item_id");

        $itemCount =  $itemsQuery->fetch_object()->ct;

        foreach ($itemsQuery as $res):         
          echo '<td>' .$res['name']. '</td>' ;
          echo '<td>' .$res['item_id']. '</td>' ;
          echo '<td>' .$itemCount. '</td>';
          echo '<br>';
        endforeach;

    endforeach;
    
    ?>
    <p>Some content in menu 2.</p>
  </div>
</div>

</body>
</html>