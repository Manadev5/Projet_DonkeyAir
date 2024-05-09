<?php



function readCountry () {

  include __DIR__.'/../Models/modelRead.php';  
  


  $tickets = showCountry();
  include __DIR__.'/../Template/viewRead.php';
  
 
//  var_dump($tickets);

//  header('location: ../tickets.php');
}
