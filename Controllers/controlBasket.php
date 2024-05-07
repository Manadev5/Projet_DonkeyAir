<?php

function putTicket(){
    session_start();
    
    include 'Template/viewHeader.php';
    include 'Models/modelBasket.php';

    if(isset($_SESSION['basket_id'])){
        foreach($_SESSION['basket_id'] as $idBasket){
        $tickets =  findTicket($idBasket);
        include 'Template/viewBasketTable.php';
        }
        var_dump($_SESSION['basket_id']);
    }


}

