<?php

function displayTickets(){

    $pdo = new PDO('mysql:host=localhost;dbname=donkeyair', 'root', 'manasse22');

    $stmt = $pdo->prepare("SELECT * FROM ticket t INNER JOIN departure d
     ON t.departure_id = d.departure_id
     INNER JOIN destination des
     ON t.destination_id = des.destination_id");

    $stmt->execute();
    $tickets = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $tickets;
}