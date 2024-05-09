<?php

function buyTicket($ticketId, $userId){
    include __DIR__.'/modelConnexionBdd.php';

    $stmt = $pdo->prepare("INSERT INTO ticket_has_user 
                        (ticket_ticket_id, 
                        user_user_id) 
                        VALUES 
                        (:ticket_id, 
                        :user_id)");



    $stmt->bindValue(':ticket_id', $ticketId, PDO::PARAM_INT);
    $stmt->bindValue(':user_id', $userId, PDO::PARAM_INT);
    $stmt->execute();

}