<?php
session_start();


include 'Controllers/controlHome.php';

showTickets();

// Template/home.php


var_dump($_SESSION);
// ROUTEUR : Lien entre URL => logique (controller)
// recuperation de l'url
// recuperation de l'url

// if ((isset($_GET['page'])))
// {
//     $page=$_GET['page'];
// }
// else 
// {
//     $page="home";
// }


// if ($page=="home"){
//     // logique
//     include_once __DIR__.'Controllers\controlCreate.php';    
//     home();
// }
// if ($page=="liste_book"){
//     include_once __DIR__.'/Controller/ControllerBooks.php';
//     displayBooks();
    
// }

// if ($page=="remove_books"){
//     include_once __DIR__.'/Controller/ControllerBooks.php';
//     removeBook();
    
// }
// if ($page=="category"){
//     echo "Category";
// }

// if ($page=="vider_panier"){
//     include_once __DIR__.'/Controller/ControllerCart.php';
//     clearCart();

//     echo "je suis dans la page vider panier";
// }
?>


>
