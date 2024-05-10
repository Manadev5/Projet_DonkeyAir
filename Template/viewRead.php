<?php

include __DIR__.'/viewHeader.php';



?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div>
    <?php foreach($tickets as $ticket): ?>
        
        <div class="classReadView">
            <p>Ticket ID: <?= htmlspecialchars($ticket['ticket_id']) ?></p>
            Departure:<h3> <?= htmlspecialchars($ticket['country']) ?></h3><br>
            Destination:<h3><?= htmlspecialchars($ticket['des_country']) ?></h3>
            <p>Departure date: <?= htmlspecialchars($ticket['departure_date']) ?></p>
            <p>Arrival date: <?= htmlspecialchars($ticket['arrival_date']) ?></p>
            <p>Boarding hour: <?= htmlspecialchars($ticket['boarding_hour']) ?></p>
            <p>Arrival hour: <?= htmlspecialchars($ticket['arrival_hour']) ?></p>
            <p>Travel time: <?= htmlspecialchars($ticket['travel_time']) ?></p>
            <p>Travel number: <?= htmlspecialchars($ticket['travel_number']) ?></p>
            <p>Sit number: <?= htmlspecialchars($ticket['sit_number']) ?></p>
          
            
           

            <form id="mon_form" action="../Template/viewEdit.php?id=<?=$ticket['ticket_id']?>" method="POST">
                <input type="hidden" name="ticket_id" value="<?= htmlspecialchars($ticket['ticket_id']) ?>">
                <input type="submit" value="Edit">
            </form>

            
            <form action="Models/modelDeleteTicket.php" method="POST">
                <input type="hidden" name="ticket_id" value="<?= htmlspecialchars($ticket['ticket_id']) ?>">
                <input type="submit" value="Delete">
            </form>
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>
