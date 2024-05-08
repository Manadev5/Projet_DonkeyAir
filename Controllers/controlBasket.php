<?php

function putTicket(){
    session_start();
    
    include 'Template/header.php';
    include_once 'Models/modelBasket.php';
    include 'Models/getTotal.php';

    $totalPrices=0;

    if(isset($_SESSION['basket_id'])){
        foreach($_SESSION['basket_id'] as $key=> $row ){
        
        $ticket =  findTicket($key);
        include 'Template/basket-table.php';
        }
        var_dump($_SESSION['basket_id']);
    }
    if(isset($_SESSION['basket_id'])){
    ?> 
   total : <?=getTotal()?>

 <?php
   }}

