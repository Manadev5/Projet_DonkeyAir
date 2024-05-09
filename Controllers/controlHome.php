<?php

function showTickets(){
    include __DIR__.'/../Template/viewHeader.php';
    include __DIR__.'/../Models/modelSearchCountry.php';

    if (isset($_GET['search-dep'])){
        $depSearch = $_GET['search-dep'];
    }else{
        $depSearch = '';
    }

    $_SESSION['depart']= $depSearch;

    if (isset($_GET['search-des'])){
        $desSearch = $_GET['search-des'];
    }else{
        $desSearch = '';
    }

    $_SESSION['destin']= $desSearch;

    if (isset($_GET['go-one-way'])){
        $trip = $_GET['go-one-way'];
    }else{
        $trip = '';
    }

    $desCountry='des.des_country';
    $depCountry ='d.country';
    

    $tickets = searchCountry($desCountry, $depCountry, $desSearch, $depSearch);

    
    include 'Template/viewHome.php';
    
}

