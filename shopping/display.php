<?php

require('../database.php');



function getCartCount($item_id, $email)
{
    $cartQuery = mysqli_query($conn, "SELECT COUNT(*) as count FROM Cart WHERE email ='".$email."'AND item_id = '".$item_id"'");

    return mysqli_num_rows($cartQuery);


}


function displayItems($PStatment, $returnU, $USE_FLAG)
{

	

}


function displayCart($email)
{
	$cartItemsQuery = mysqli_query($conn, "SELECT * FROM Cart WHERE email ='".email."'");

	echo '<tr>';
		foreach ($cartItemsQuery as $res ):
			echo '<td>' .$res['name']. '</td>' ;
			echo '<td>' .$res['description']. '</td>' ;
			echo '<td>' .$res['price']. '</td>' ;

		endforeach;
	echo '</tr>';
}

?>