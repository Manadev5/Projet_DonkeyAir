<?php

function buyTicket($ticketId, $userId){
    $pdo = new PDO('mysql:host=localhost;dbname=donkeyair', 'root', 'manasse22');

    $stmt = $pdo->prepare("INSERT INTO ticket_has_user (ticket_ticket_id, user_user_id) 
                           VALUES (:ticket_id, :user_id)");
    $stmt->bindValue(':ticket_id', $ticketId, PDO::PARAM_INT);
    $stmt->bindValue(':user_id', $userId, PDO::PARAM_INT);
    $stmt->execute();

}