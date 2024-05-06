<?php

function assignTicket()
{
    session_start();

    include 'controlRemoveBasket.php';
    include '../Models/buyTicket.php';

    $userId = $_SESSION['user_log'];
    $ticketId = $_GET['id'];

    buyTicket($ticketId, $userId);
    removeBasket();

    echo 'you have bought this ticket, good travel!<br>';
    echo "<a href='../index.php'>back to home</a>";
}

assignTicket();
