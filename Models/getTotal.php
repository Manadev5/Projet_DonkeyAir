<?php

include_once 'Models/modelBasket.php';

function getTotal(){
    $totalPrice=0;
    foreach($_SESSION['basket_id'] as $key => $row){
        $ticket = findTicket($key);
        $total = $ticket['price'] * $row;
        $totalPrice= $totalPrice + $total;
    }

    return $totalPrice;

}