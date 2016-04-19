<?php
    require_once('../database.php'); 

    function shipOrder($conn, $order_id){
        $ship_order = "UPDATE Orders SET status = 1, ship_date = NOW() WHERE order_id = ?";
        $item_ids = "SELECT I.item_id as item_id FROM Items I, ItemOrders IO WHERE I.item_id = IO.item_id AND IO.order_id = ?";

        if ($stmt = mysqli_prepare($conn, $ship_order)){
            mysqli_stmt_bind_param($stmt, 'i', $order_id);
            mysqli_stmt_execute($stmt);
            if($stmt2 = mysqli_prepare($conn, $item_ids)){
                mysqli_stmt_bind_param($stmt2, 'i', $order_id);
                mysqli_stmt_execute($stmt2);
                mysqli_stmt_bind_result($stmt2, $item_ID);
                
                while(mysqli_stmt_fetch($stmt2)){
                    mysqli_query($conn, "UPDATE Items SET stock = (stock - 1) WHERE item_id ='".$item_ID."'");
                }
                // if(!mysqli_stmt_fetch($stmt2)){
                //     header("HTTP/1.1 500 Internal Server Error");
                //     die("Failed to ship order.");
                // }
                // else{
                //     header("HTTP/1.1 200 OK");
                //     die("Order shipped successfully.");        
                // }
            }
            
        }
    }
?>