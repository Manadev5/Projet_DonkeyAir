<?php

include '/Template/header.php';
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
        <div>
            <p>Ticket ID: <?= htmlspecialchars($ticket['ticket_id']) ?></p>
            <p>Départ: <?= htmlspecialchars($ticket['departure_date']) ?></p>
            <p>Destination: <?= htmlspecialchars($ticket['arrival_date']) ?></p>
            <p>Départ: <?= htmlspecialchars($ticket['boarding_hour']) ?></p>
            <p>Destination: <?= htmlspecialchars($ticket['arrival_hour']) ?></p>
            <p>Départ: <?= htmlspecialchars($ticket['travel_time']) ?></p>
            <p>Destination: <?= htmlspecialchars($ticket['travel_number']) ?></p>
            <p>Départ: <?= htmlspecialchars($ticket['sit_number']) ?></p>
          
           

            <form action="edit.php?id=<?= $ticket['ticket_id']?>" method="POST">
                <input type="hidden" name="ticket_id" value="<?= htmlspecialchars($ticket['id']) ?>">
                <input type="submit" value="Modifier">
            </form>

            
            <form action="delete.php" method="POST">
                <input type="hidden" name="ticket_id" value="<?= htmlspecialchars($ticket['id']) ?>">
                <input type="submit" value="Delete">
            </form>
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>
