<?php

session_start();


function displayItems($conn)
{
	$allcartItemsQuery = mysqli_query($conn, "SELECT * FROM Items");

	echo '<tr>';
		foreach ($allcartItemsQuery as $res ):
			$addToCartItem = "addItemToCart.php?item_id=" .$res["item_id"];
			echo '<td>' .$res['item_id']. '</td>';
			echo '<td>' .$res['name']. '</td>' ;
			echo '<td>' .$res['description']. '</td>' ;
			echo '<td>' .$res['price']. '</td>' ;
			echo '<td><a class\"addToCartLink\" href=\"#\"$addToCartItem\">Add Item to Cart</a></td>';
			echo '<br>';
		endforeach;
	echo '</tr>';
	

}


function displayCart($email)
{
	$cartItemsQuery = mysqli_query($conn, "SELECT * FROM Cart WHERE email ='".email."'");

	echo '<tr>';
		foreach ($cartItemsQuery as $res ):
			echo '<td>' .$res['name']. '</td>' ;
			echo '<td>' .$res['description']. '</td>' ;
			echo '<td>' .$res['price']. '</td>' ;
			echo '<td><a class\"removeItemFromCartLink\" href=\"#\"$removeItem\">Remove Item</a></td>';
			echo '<br>';
		endforeach;
	echo '</tr>';
}

?>