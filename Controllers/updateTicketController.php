<?php
include '../Models/update-ticket.php';


function showTickets2(){
 }





function handleTicketUpdate() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_GET['id'];
        $departure_date = $_POST['departure_date'];
        $arrival_date = $_POST['arrival_date'];
        $boarding_hour = $_POST['boarding_hour'];
        $arrival_hour = $_POST['arrival_hour'];
        $travel_time = $_POST['travel_time'];
        $travel_number = $_POST['travel_number'];
        $sit_number = $_POST['sit_number'];
        $destination_id  = $_POST['destination_id'];
        $departure_id  = $_POST['departure_id'];
        $price  = $_POST['price'];

        $rowsUpdated = updateTicket($id, $departure_date, $arrival_date, $boarding_hour, $arrival_hour, $travel_time, $travel_number, $sit_number, $destination_id ,$departure_id , $price);
        var_dump($rowsUpdated);


        // if ($rowsUpdated > 0) {
        //     header('Location: tickets.php?status=updated');
        // } else {
        //     echo "Erreur de mise à jour";
        // }
    }
}

handleTicketUpdate();