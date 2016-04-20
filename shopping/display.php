<?php

function displayItems($conn)
{
	//require("addItemToCart.php");
	$allcartItemsQuery = mysqli_query($conn, "SELECT * FROM Items");

	echo '<tr>';
		foreach ($allcartItemsQuery as $res ):
			$addToCartItem = "addItemToCart.php?item_id=" .$res["item_id"];
			echo '<h4>' .$res['name']. '
			</h4>' ;
			echo '<p>' .$res['description']. '
			</p>' ;
			echo '<p> Price: $' .$res['price']. '
			</p>' ;
			echo '<p><a href='.$addToCartItem.'>Add Item to Cart</a>
			</p>';
			echo '<br>';
		endforeach;
	echo '</tr>';

}

?>