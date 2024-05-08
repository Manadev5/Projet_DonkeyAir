<?php


    session_start();

    $id=$_GET['id'];

    $ticket=$_SESSION['basket_id'];

    $ticket[$id]=$ticket[$id]+1;

    $_SESSION['basket_id']=$ticket;

    header('location: ../index.php?page=basket');
    
    session_start();
