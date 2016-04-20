<?php
	require_once('../database.php'); 
	//components, price, customer info
    function viewPendFunc($conn,$order_id){   
    		$orderByID = "SELECT O.order_id as order_id, status,
                DATE_FORMAT(order_date, '%M %d %Y') as order_date,
                ship_date,
                C.name as name, C.address as address
                FROM Orders O, Customers C, CustomerOrders CO
                WHERE O.order_id = ? 
                AND C.email = CO.email
                AND O.order_id = CO.order_id";
                
    	    if ($stmt2 = mysqli_prepare($conn, $orderByID)){
                echo "</br><p style='color:#66b9a3;'>----------------Order ID: ".$order_id."---------------</p> </br>";
                mysqli_stmt_bind_param($stmt2, 'i', $order_id);
                mysqli_stmt_execute($stmt2);
                mysqli_stmt_bind_result($stmt2, $order_ida, $status ,$order_date, $shipping_date, $name, $address);
                while(mysqli_stmt_fetch($stmt2)){
                    if($shipping_date!=NULL){
                        $time = strtotime($shipping_date);
                        $myFormatForView = date("M d Y", $time);
                    }
                    else{
                        $myFormatForView = "N/A";
                    }
                	echo"<tr>";
                		echo"<th> Order ID: ".$order_ida."</br></th>";
		                echo"<th> Status: ".($status ? "Shipped" : "Not Shipped")."</br></th>";
		                echo"<th> Order Date: ".$order_date."</br></th>";
		                echo"<th> Shipping Date: ".$myFormatForView."</br></th>";
		                echo"<th> Customer's Name: ".$name."</br></th>";
		                echo"<th> Customer's Address: ".$address."</br></th>";
		            echo"</tr>";
                }
            }

            $getItemInOrderBy = "SELECT IO.itemOrder_id as item_id, I.description as description, 
            				I.name as name, 
            				I.price as price 
            				FROM ItemOrders IO, Items I
             				WHERE IO.item_id = I.item_id AND IO.order_id = ?";

    	    if ($stmt = mysqli_prepare($conn, $getItemInOrderBy)){
                mysqli_stmt_bind_param($stmt, 'i', $order_id);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_bind_result($stmt, $item_id, $description ,$name, $price);
                while(mysqli_stmt_fetch($stmt)){
                	echo"</br><tr>";
                		//echo"<th> Item Order ID: ".$item_id."</br></th>";
                		echo"<th> Item Name: ".$name."</br></th>";
                		echo"<th> Item Description: ".$description."</br></th>";
                		echo"<th> Price: $".$price."</br></br></th>";
		            echo"</tr>";
                }

            }          

    }

?>