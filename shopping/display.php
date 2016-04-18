<?php

session_start();
require('../database.php');



function getCount($item_id, $email)
{
    $res = $pdo->prepare('SELECT COUNT(*) as count FROM Carts WHERE item_id = ? AND password = ?');
    $testVal = $res->execute(array($item_id, $email));

    $row = $res->fetch();
    return $row['count'];
}


function displayItems($PStatment, $returnU, $USE_FLAG)
{

}

?>