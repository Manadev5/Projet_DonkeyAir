<?php

function putTicket(){
    session_start();
    
    include __DIR__.'/../Template/viewHeader.php';
    include_once __DIR__.'/../Models/modelBasket.php';
    include __DIR__.'/../Models/getTotal.php';

    $totalPrices=0;

    if(isset($_SESSION['basket_id'])){
        foreach($_SESSION['basket_id'] as $key=> $row ){
        
        $ticket =  findTicket($key);
        include __DIR__.'/../Template/viewBasketTable.php';
        }
        var_dump($_SESSION['basket_id']);
    }
    if(isset($_SESSION['basket_id'])){
    ?> 
   total : <?=getTotal()?>
   <a href='controlClear.php'>vider el panier</a>

 <?php
   }
}


