<?php

$totalPrices=0;

foreach($tickets as $ticket){
            ?>
            <div>
                <h3><?=$ticket['country']?></h3>
                <h3><?=$ticket['des_country']?></h3>
                <ul>
                    <li><?=$ticket['departure_date']?></li>
                    <li><?=$ticket['arrival_date']?></li>
                    <li><?=$ticket['boarding_hour']?></li>
                    <li><?=$ticket['travel_time']?></li>
                    <li><?=$ticket['arrival_hour']?></li>
                    <li><?=$ticket['sit_number']?></li>
                    <li><?=$ticket['travel_number']?></li>
                    <li><?=$ticket['price']?></li>
                </ul>
                <a href='Controllers/controlBuy.php?id=<?=$ticket['ticket_id']?>'>buy</a>
                <a href='Controllers/controlRemoveBasket.php?id=<?=$ticket['ticket_id']?>'>remove</a>
            </div>
            
            <?php
             $totalPrices = $totalPrices + $ticket['price'];
            }?>

             