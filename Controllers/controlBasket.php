<?php

function putTicket(){
    session_start();
    
    include 'Template/header.php';
    include 'Models/modelBasket.php';

    if(isset($_SESSION['basket_id'])){
        foreach($_SESSION['basket_id'] as $idBasket){
        $tickets =  findTicket($idBasket);
        include 'Template/basket-table.php';
        }
        var_dump($_SESSION['basket_id']);
    }


}

