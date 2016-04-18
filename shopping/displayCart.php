

 <?php
 	session_start();

	

	function displayCart($conn)
	{
		$email = $_SESSION['currUserEmail'];
		//require("removeItemFromCart.php");
		$cartQuery = mysqli_query($conn, "SELECT * FROM Cart C, Items I WHERE I.item_id = C.item_id AND C.email ='".$email."'");

		

		echo '<tr>';
			foreach ($cartQuery as $res ):
				$removeFromCartItem = "removeItemFromCart.php?cart_id=" .$res["cart_id"];
				echo '<td>' .$res['name']. '</td>' ;
				echo '<td>' .$res['description']. '</td>' ;
				echo '<td>' .$res['price']. '</td>' ;
				echo '<td><a href='.$removeFromCartItem.'>Remove Item</a></td>';
				echo '<br>';
			endforeach;
		echo '</tr>';
	}



?>

    
