<?php




function updateTicket($id, $departure_date, $arrival_date, $boarding_hour, $arrival_hour, $travel_time, $travel_number, $sit_number, $destination_id, $departure_id , $price) {
  include __DIR__.'/modelConnexionBdd.php';

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
