<?php

function putTicket(){
    
    include __DIR__.'/../Template/viewHeader.php';
    include_once __DIR__.'/../Models/modelBasket.php';
    include __DIR__.'/../Models/modelGetTotal.php';

    $totalPrices=0

    ?>
    <a href='index.php?page=history&id=<?=$_SESSION['user_log']?>'>show tickets history</a>
    <?php

    if(isset($_SESSION['basket_id'])){
        foreach($_SESSION['basket_id'] as $key=> $row ){
        $ticket =  findTicket($key);
        include __DIR__.'/../Template/viewBasketTable.php';
        
        }
        ?>
        total : <?=getTotal()?>
        <a href='/Controllers/controlClear.php'>empty the basket</a>
        <?php
    }else{
      return'';
    }
    if(isset($_SESSION['basket_id'])){
    ?> 
   

 <?php
   }
}


