<?php

function showReturnTickets(){
session_start();

    header("location: ../index.php?=go-one-way=one&search-des=".$_SESSION['depart']."&search-dep=".$_SESSION['destin']."");
    
}

showReturnTickets();