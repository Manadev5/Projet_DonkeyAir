<?php

function showCountry(){



    include __DIR__.'/modelConnexionBdd.php';


    $stmt = $pdo->prepare("SELECT * FROM ticket t INNER JOIN departure d
     ON t.departure_id = d.departure_id
     INNER JOIN destination des
     ON t.destination_id = des.destination_id");


   
    $stmt->execute();
    
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $result;

}
