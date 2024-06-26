<?php
function createTicket($departure_date,$arrival_date,$boarding_hour,$arrival_hour,$travel_time,$travel_number,$sit_number,$destination_id,$departure_id,$price){

    //partie a definir avec formulaire
    include __DIR__.'/modelConnexionBdd.php';
    $statement=$pdo->prepare(
    "INSERT INTO ticket (departure_date, 
    arrival_date, 
    boarding_hour,
    arrival_hour,
    travel_time,
    travel_number, 
    sit_number, 
    destination_id, 
    departure_id, 
    price)
    VALUES (:departure_date, 
    :arrival_date, 
    :boarding_hour, 
    :arrival_hour,
    :travel_time, 
    :travel_number, 
    :sit_number, 
    :destination_id, 
    :departure_id, 
    :price)");

    
    $statement->bindValue(":departure_date", $departure_date, PDO::PARAM_STR);
    $statement->bindValue(":arrival_date", $arrival_date, PDO::PARAM_STR);
    $statement->bindValue(":boarding_hour", $boarding_hour, PDO::PARAM_STR);
    $statement->bindValue(":arrival_hour", $arrival_hour, PDO::PARAM_STR);
    $statement->bindValue(":travel_time", $travel_time, PDO::PARAM_STR);
    $statement->bindValue(":travel_number", $travel_number, PDO::PARAM_STR);
    $statement->bindValue("sit_number", $sit_number, PDO::PARAM_STR);
    $statement->bindValue("destination_id", $destination_id, PDO::PARAM_STR);
    $statement->bindValue("departure_id", $departure_id, PDO::PARAM_STR);
    $statement->bindValue(":price", $price, PDO::PARAM_STR);

    $statement->execute();
}
?>