<?php

function buyTicket($ticketId, $userId){
    $pdo = new PDO('mysql:host=localhost;dbname=donkeyair', 'root','manasse22');

    $stmt = $pdo->prepare("UPDATE ticket SET user_ticket_id = :user_id
                           WHERE ticket_id = :ticket_id");
    $stmt->bindValue(':ticket_id', $ticketId, PDO::PARAM_INT);
    $stmt->bindValue(':user_id', $userId, PDO::PARAM_INT);
    $stmt->execute();

}