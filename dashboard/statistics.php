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
<div class="container">

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
    <h3>Past Week</h3>
    <?php  include_once "../templates/topBar.php"; 

    $period = 'week';
    
        $itemsQuery = mysqli_query($conn, "SELECT IO.item_id,  I.name, COUNT(IO.item_id) as cnt
                      FROM Items I, ItemOrders IO, Orders O
                      WHERE O.order_id = IO.order_id AND  I.item_id = IO.item_id AND
                      O.order_date BETWEEN NOW() - INTERVAL 1 WEEK AND NOW() GROUP BY IO.item_id");


        foreach ($itemsQuery as $res):    
          echo '<td>' .$res['name']. ' </td>' ;
          echo '<td>' .$res['cnt']. ' </td>';
          echo '<br>';
        endforeach;

    
    ?>
    <p></p>
  </div>
  <div id="menu1" class="tab-pane fade">
    <h3>Past Month</h3>
  <?php  

    $period = 'week';
    
        $itemsQuery = mysqli_query($conn, "SELECT IO.item_id,  I.name, COUNT(IO.item_id) as cnt
                      FROM Items I, ItemOrders IO, Orders O
                      WHERE O.order_id = IO.order_id AND  I.item_id = IO.item_id AND
                      O.order_date BETWEEN NOW() - INTERVAL 1 MONTH AND NOW() GROUP BY IO.item_id");


        foreach ($itemsQuery as $res):    
          echo '<td>' .$res['name']. ' </td>' ;
          echo '<td>' .$res['cnt']. ' </td>';
          echo '<br>';
        endforeach;

    
    ?>
  </div>
  <div id="menu2" class="tab-pane fade">
    <h3>Past Year</h3>
    <?php  
/*
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
    */
	
	 

    $period = 'week';
    
        $itemsQuery = mysqli_query($conn, "SELECT IO.item_id,  I.name, COUNT(IO.item_id) as cnt
                      FROM Items I, ItemOrders IO, Orders O
                      WHERE O.order_id = IO.order_id AND  I.item_id = IO.item_id AND
                      O.order_date BETWEEN NOW() - INTERVAL 1 YEAR AND NOW() GROUP BY IO.item_id");


        foreach ($itemsQuery as $res):    
          echo '<td>' .$res['name']. ' </td>' ;
          echo '<td>' .$res['cnt']. ' </td>';
          echo '<br>';
        endforeach;

    
    
    ?>
  </div>
</div>
</div>
</body>
</html>