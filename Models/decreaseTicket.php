<?php

    session_start();

    $id=$_GET['id'];

    $ticket=$_SESSION['basket_id'];


    if($ticket[$id] == 1){

      header("location: ../Controllers/controlRemoveBasket.php?id=$id");


    }else{

    $ticket[$id]=$ticket[$id]-1;

    $_SESSION['basket_id']=$ticket;

    header('location: ../basket.php');
    }
    