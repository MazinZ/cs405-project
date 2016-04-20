 <?php
 	
	function displayCart($conn)
	{
		$email = $_SESSION['currUserEmail'];
		//require("removeItemFromCart.php");
		$cartQuery = mysqli_query($conn, "SELECT * FROM Cart C, Items I WHERE I.item_id = C.item_id AND C.email ='".$email."'");

		echo '<tr>';
			foreach ($cartQuery as $res ):
				$removeFromCartItem = "removeItemFromCart.php?cart_id=" .$res["cart_id"];
				echo '<h4>' .$res['name']. 
				
				'</h4>' ;
				echo '<p>' .$res['description'].
				
				 '</p>' ;
				echo '<p> Price: $' .$res['price']. 
				
				'</p>' ;
				echo '<p><a href='.$removeFromCartItem.'>Remove Item</a></p>';
				echo '<br>';
			endforeach;
		echo '</tr>';

	}
?>

    
