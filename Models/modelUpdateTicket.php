<?php

$pdo = new PDO('mysql:host=localhost;dbname=donkeyair', 'root');


function updateTicket($id, $departure_date, $arrival_date, $boarding_hour, $arrival_hour, $travel_time, $travel_number, $sit_number, $destination_id, $departure_id , $price) {

  $pdo = new PDO('mysql:host=localhost;dbname=donkeyair', 'root');
  $stmt = $pdo->prepare('UPDATE ticket 
    SET departure_date = :departure_date,  
        arrival_date = :arrival_date, 
        boarding_hour = :boarding_hour, 
        arrival_hour = :arrival_hour, 
        travel_time = :travel_time, 
        travel_number = :travel_number, 
        sit_number = :sit_number ,
        destination_id = :destination_id ,
        departure_id = :departure_id,
        price = :price        
    WHERE ticket_id = :id');


  $stmt->bindValue(':departure_date',$departure_date, PDO::PARAM_STR);
  $stmt->bindValue(':arrival_date', $arrival_date, PDO::PARAM_STR); 
  $stmt->bindValue(':boarding_hour',$boarding_hour, PDO::PARAM_STR); 
  $stmt->bindValue(':arrival_hour',$arrival_hour, PDO::PARAM_STR); 
  $stmt->bindValue(':travel_time',$travel_time, PDO::PARAM_STR);
  $stmt->bindValue(':travel_number',$travel_number, PDO::PARAM_STR); 
  $stmt->bindValue(':sit_number',$sit_number, PDO::PARAM_STR); 
  $stmt->bindValue(':destination_id',$destination_id, PDO::PARAM_STR); 
  $stmt->bindValue(':departure_id',$departure_id, PDO::PARAM_STR); 
  $stmt->bindValue(':price',$price, PDO::PARAM_STR); 
  $stmt->bindValue(':id',$id, PDO::PARAM_STR); 

            
            
 

  $stmt->execute();
}


// UPDATE ticket 
//     SET departure_date = '1999-02-02' ,
//         arrival_date = '2005-02-02', 
//         boarding_hour = '23:55:00' , 
//         arrival_hour = '01:55:00' , 
//         travel_time = '02:00:00 ', 
//         travel_number = '300' , 
//         sit_number = '2' ,
//         destination_id = '1',
//         departure_id = '1',
//         price = '30.00'
//     WHERE ticket_id = '1' 


