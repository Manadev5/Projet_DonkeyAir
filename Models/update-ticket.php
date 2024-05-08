<?php

$pdo = new PDO('mysql:host=localhost;dbname=donkeyair', 'root');


function updateTicket($id, $departure_date, $arrival_date, $boarding_hour, $arrival_hour, $travel_time, $travel_number, $sit_number) {

  $pdo = new PDO('mysql:host=localhost;dbname=donkeyair', 'root','manasse22');
  $stmt = $pdo->prepare('UPDATE ticket 
    SET departure_date = :departure_date,  
        arrival_date = :arrival_date, 
        boarding_hour = :boarding_hour, 
        arrival_hour = :arrival_hour, 
        travel_time = :travel_time, 
        travel_number = :travel_number, 
        sit_number = :sit_number ,
         PDO::PARAM_INT,
    WHERE ticket_id = :id , departure_id = :departure_id , destination_id = :destination_id ');

  $stmt->bindValue(':departure_date',$departure_date, PDO::PARAM_INT);
  $stmt->bindValue(':arrival_date', $arrival_date, PDO::PARAM_INT); 
  $stmt->bindValue(':boarding_hour',$boarding_hour, PDO::PARAM_INT); 
  $stmt->bindValue(':arrival_hour',$arrival_hour, PDO::PARAM_STR); 
  $stmt->bindValue(':travel_time',$travel_time, PDO::PARAM_STR);
  $stmt->bindValue(':travel_number',$travel_number, PDO::PARAM_STR); 
  $stmt->bindValue(':sit_number',$sit_number, PDO::PARAM_STR); 
  $stmt->bindValue(':ticket_id',$id, PDO::PARAM_STR); 

            
            
 

  return $stmt->rowCount();
}






