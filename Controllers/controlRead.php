<?php



function readCountry () {

  include 'Models/read.php';  

  $tickets = showCountry();
  include 'Template/readView.php';
  
 
//  var_dump($tickets);

//  header('location: ../tickets.php');
}
