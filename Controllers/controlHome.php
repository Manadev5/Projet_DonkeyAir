<?php

function showTickets(){
    include 'Template/header.php';

    include 'Models/searchCountry.php';

    if (isset($_GET['search-dep'])){
        $depSearch = $_GET['search-dep'];
    }else{
        $depSearch = '';
    }

    if (isset($_GET['search-des'])){
        $desSearch = $_GET['search-des'];
    }else{
        $desSearch = '';
    }

    $desCountry='des.des_country';
    $depCountry ='d.country';
    

    $tickets = searchCountry($desCountry, $depCountry, $desSearch, $depSearch);

    $results = searchCountry($desCountry, $depCountry, $desSearch, $depSearch);
    
    include 'Template/Home.php';
    
}

