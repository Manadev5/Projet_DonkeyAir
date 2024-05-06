<?php

function searchCountry($desCountry, $depCountry, $depSearch, $desSearch){

    $pdo = new PDO('mysql:host=localhost;dbname=donkeyair', 'root', '');

    $stmt = $pdo->prepare("SELECT * FROM ticket t INNER JOIN departure d
     ON t.departure_id = d.departure_id
     INNER JOIN destination des
     ON t.destination_id = des.destination_id
     WHERE $depCountry LIKE(:search_dep) 
     AND $desCountry LIKE(:search_des)");

    $stmt->bindValue(':search_dep',"%$depSearch%", PDO::PARAM_STR);
    $stmt->bindValue(':search_des',"%$desSearch%", PDO::PARAM_STR);
    $stmt->execute();
    
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $result;

}
