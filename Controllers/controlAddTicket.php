<?php
include 'Models/modelCreate.php ';
function addTicket(){
    $departure_date=$_POST["departure_date"];
    $arrival_date=$_POST["arrival_date"];
    $travel_time=$_POST["travel_time"];
    $travel_number=$_POST["travel_number"];
    $sit_number=$_POST["sit_number"];
    $destination_id=$_POST["destination_id"];;
    $departure_id=$_POST["departure_id"];
    $price=$_POST["price"];
    createTicket($departure_date,$arrival_date,$travel_time,$travel_number,$sit_number,$destination_id,$departure_id,$price);
    header("location:../index.php");
}
addTicket();
?>