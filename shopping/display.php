<?php


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




?>