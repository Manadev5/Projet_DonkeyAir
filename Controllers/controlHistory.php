<?php

function ticketsHistory() {

    include __DIR__.'/../Models/modelUserTicket.php';
    include __DIR__.'/../Template/viewHeader.php';

    $id = $_GET['id'];


   
    $tickets =showTicketsHistory($id);

    include __DIR__.'/../Template/viewHistory.php';

}