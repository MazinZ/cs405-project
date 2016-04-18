<?php

require('../database.php');


function displayItems()
{
	$allcartItemsQuery = mysqli_query($conn, "SELECT * FROM Items");

	echo '<tr>';
		foreach ($allcartItemsQuery as $res ):
			echo '<td>' .$res['name']. '</td>' ;
			echo '<td>' .$res['description']. '</td>' ;
			echo '<td>' .$res['price']. '</td>' ;
		endforeach;
	echo '</tr>';
	

}


function displayCart($email)
{
	//$cartItemsQuery = mysqli_query($conn, "SELECT * FROM Cart WHERE email ='".email."'");

	//echo '<tr>';
	//	foreach ($cartItemsQuery as $res ):
	//		echo '<td>' .$res['name']. '</td>' ;
	//		echo '<td>' .$res['description']. '</td>' ;
	//		echo '<td>' .$res['price']. '</td>' ;

	//	endforeach;
	//echo '</tr>';
}

?>