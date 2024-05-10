<?php

function showCountry(){



    include __DIR__.'/modelConnexionBdd.php';


    $stmt = $pdo->prepare("SELECT *,DATE_FORMAT(boarding_hour, '%H:%i')  boarding_hour,
                            DATE_FORMAT(arrival_hour, '%H:%i') arrival_hour, 
                            DATE_FORMAT(travel_time, '%H:%i') travel_time FROM ticket t INNER JOIN departure d
                            ON t.departure_id = d.departure_id
                            INNER JOIN destination des
                            ON t.destination_id = des.destination_id");


   
    $stmt->execute();
    
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $result;

}
