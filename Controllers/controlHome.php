<?php

function showTickets(){
    include 'Template/header.php';

    include 'Models/read.php';

    $tickets = displayTickets();

    include 'Template/home.php';
}

