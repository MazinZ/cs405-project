

 <?php
 	session_start();

	require("removeItemFromCart.php");

	function displayCart($email)
	{
		
		$cartQuery = mysqli_query($conn, "SELECT * FROM Cart C, Items I WHERE I.item_id = C.item_id AND C.email ='".$email."'");

		echo '<tr>';
			foreach ($cartQuery as $res ):
				$removeFromCartItem = "removeItemFromCart.php?item_id=" .$res["item_id"];
				echo '<td>' .$res['name']. '</td>' ;
				echo '<td>' .$res['description']. '</td>' ;
				echo '<td>' .$res['price']. '</td>' ;
				echo '<td><a href='.$removeFromCartItem.'>Remove Item</a></td>';
				echo '<br>';
			endforeach;
		echo '</tr>';
	}



?>

    
