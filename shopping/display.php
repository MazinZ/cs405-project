<?php

session_start();


function displayItems($conn)
{
	require("addItemToCart.php");
	$allcartItemsQuery = mysqli_query($conn, "SELECT * FROM Items");

	echo '<tr>';
		foreach ($allcartItemsQuery as $res ):
			$addToCartItem = "addItemToCart.php?item_id=" .$res["item_id"];
			echo '<td>' .$res['name']. '</td>' ;
			echo '<td>' .$res['description']. '</td>' ;
			echo '<td>' .$res['price']. '</td>' ;
			echo '<td><a href='.$addToCartItem.'>Add Item to Cart</a></td>';
			echo '<br>';
		endforeach;
	echo '</tr>';
	

}


function displayCart($email)
{
	require("removeItemFromCart.php");

	//$cartItemsQuery = mysqli_query($conn, "SELECT item_id FROM Cart WHERE email='."$email".'");
	$cartQuery = mysqli_query($conn, "SELECT item_id FROM Cart WHERE email ='".$email."'");


	echo '<tr>';
		foreach ($cartQuery as $res ):
			$removeFromCartItem = "removeItemFromCart.php?item_id=" .$res["item_id"];
			echo '<td>' .$res['cart_id']. '</td>' ;
			echo '<td>' .$res['email']. '</td>' ;
			echo '<td>' .$res['item_id']. '</td>' ;
			echo '<td><a href='.$removeFromCartItem.'>Remove Item</a></td>';
			echo '<br>';
		endforeach;
	echo '</tr>';
}

?>