<?php

include __DIR__.'/viewHeader.php';



?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/style.css">
  <title>Document</title>
</head>
<body>
<div>
    <?php foreach($tickets as $ticket): ?>
        
        <div class="classReadView">
        <div class="ticket">
                <section class="ticket-top">
                    <ul>
                        <li><?=$ticket['boarding_hour']?></li>
                        <li><?=$ticket['country']?></li>
                    </ul>
                    <ul>
                        <li><?=$ticket['travel_time']?>h</li>

                    </ul>
                    
                    <ul>
                        <li><?=$ticket['arrival_hour']?></li>
                        <li><?=$ticket['des_country']?></li>
                    </ul>
                    <ul>
                        <li><?=$ticket['price']?>$</li>
                    </ul>
                    
                </section>
                
                <section class="ticket-top">
                    <li><?=$ticket['departure_date']?></li>
                    <li><?=$ticket['arrival_date']?></li>
                </section>  
            </div>

                    <form class="d-flex" action="../Template/viewEdit.php?id=<?=$ticket['ticket_id']?>" method="POST">
                        <input   type="hidden" name="ticket_id" value="<?= htmlspecialchars($ticket['ticket_id']) ?>">
                        <input type="submit" value="Edit">
                    </form>

                    
                    <form action="Models/modelDeleteTicket.php" method="POST">
                        <input type="hidden" name="ticket_id" value="<?= htmlspecialchars($ticket['ticket_id']) ?>">
                        <input type="submit" value="Delete">
                    </form>
            </div>
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>
