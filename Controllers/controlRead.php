<?php



function readCountry () {

  include 'Models/modelRead.php';  
  


  $tickets = showCountry();
  include 'Template/viewRead.php';
  
 
//  var_dump($tickets);

//  header('location: ../tickets.php');
}
