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

    //$itemsQuery = mysqli_query($conn, "SELECT item_id, name FROM Items");

    $itemsQuery = mysqli_query($conn, "SELECT I.item_id, I.name FROM Items I, Orders O, ItemOrders IO WHERE O.order_id = IO.order_id AND O.order_date BETWEEN ADDDATE(NOW(),-7) and NOW() ");
    echo mysqli_error($conn); 

    foreach ($itemsQuery as $row): 
      $itemID = $row['item_id'];
      //$statQuery = mysqli_query($conn, "SELECT COUNT(*) as cnt FROM ItemOrders  WHERE item_id ='".$itemID."'");

      //$itemCount =  $statQuery->fetch_object()->cnt;
        echo '<td>' .$row['name']. '</td>' ;
        echo '<br>';
        echo '<td>' .$row['item_id']. '</td>' ;
        echo '<br>';
        //echo '<td>' .$itemCount. '</td>' ;
        echo '<br>'; 
    endforeach;
        
  
    
    /*$statQuery = mysqli_query($conn, "SELECT IO.item_id, COUNT(IO.item_id) as cnt, I.name 
                  FROM Items I, ItemOrders IO, Orders O WHERE I.item_id = IO.item_id 
                  AND O.order_id = IO.order_id AND O.order_date BETWEEN ADDDATE(NOW(),-7) and NOW() ");*/

      //$itemCount =  $statQuery->fetch_object()->cnt;
    //echo "item: "; 
    //echo $itemCount; 
    /*foreach ($statQuery as $res ):
        echo '<td>' .$res['name']. '</td>' ;
        echo '<br>';
        echo '<td>' .$res['item_id']. '</td>' ;
        echo '<br>';
        echo '<td>' .$res['cnt']. '</td>' ;
        echo '<br>';
    endforeach;*/
    
    ?>
    <p></p>
  </div>
  <div id="menu1" class="tab-pane fade">
    <h3>Month</h3>
    <?php  include_once "../templates/topBar.php"; 

    $period = 'month';

    $itemsQuery = mysqli_query($conn, "SELECT I.item_id, I.name FROM Items I, Orders O WHERE O.order_id = I.order_id AND O.order_date BETWEEN ADDDATE(NOW(),-7) and NOW() ");

    foreach ($itemsQuery as $row ): 
      $itemID = $row['item_id'];
      $statQuery = mysqli_query($conn, "SELECT COUNT(*) as cnt FROM ItemOrders  WHERE item_id ='".$itemID."'");

      $itemCount =  $statQuery->fetch_object()->cnt;
        echo '<td>' .$row['name']. '</td>' ;
        echo '<br>';
        echo '<td>' .$row['item_id']. '</td>' ;
        echo '<br>';
        echo '<td>' .$itemCount. '</td>' ;
        echo '<br>'; 
    endforeach;
    
    ?>
    <p>Some content in menu 1.</p>
  </div>
  <div id="menu2" class="tab-pane fade">
    <h3>Year</h3>
    <p>Some content in menu 2.</p>
  </div>
</div>

</body>
</html>