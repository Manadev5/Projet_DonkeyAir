<?php
session_start();


include 'Template/header.php';
include 'Controllers/updateTicketController.php';

showTickets2();
handleTicketUpdate()
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
            <p>Ticket ID: <?= htmlspecialchars($ticket['id']) ?></p>
            <p>Départ: <?= htmlspecialchars($ticket['departure_date']) ?></p>
            <p>Destination: <?= htmlspecialchars($ticket['arrival_date']) ?></p>
           

            <form action="edit-ticket.php" method="POST">
                <input type="hidden" name="ticket_id" value="<?= htmlspecialchars($ticket['id']) ?>">
                <input type="submit" value="Modifier">
            </form>
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>

