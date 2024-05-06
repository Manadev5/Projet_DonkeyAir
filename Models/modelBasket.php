<?php

function findTicket($id){


    $pdo = new PDO('mysql:host=localhost;dbname=donkeyair', 'root');


    $stmt = $pdo->prepare("SELECT * FROM ticket t INNER JOIN departure d
     ON t.departure_id = d.departure_id
     INNER JOIN destination des
     ON t.destination_id = des.destination_id
     WHERE t.ticket_id = :id");

    $stmt->bindValue(':id',$id, PDO::PARAM_INT);
    $stmt->execute();
    
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $result;

}
