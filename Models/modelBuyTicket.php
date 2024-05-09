<?php

function buyTicket($ticketId, $userId){
    include __DIR__.'/modelConnexionBdd.php';

    $stmt = $pdo->prepare("UPDATE ticket SET user_ticket_id = :user_id
                           WHERE ticket_id = :ticket_id");



    $stmt->bindValue(':ticket_id', $ticketId, PDO::PARAM_INT);
    $stmt->bindValue(':user_id', $userId, PDO::PARAM_INT);
    $stmt->execute();

}