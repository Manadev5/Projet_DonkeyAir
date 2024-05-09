<?php


function logoutAdmin(){

  include __DIR__.'/../Models/modelDeleteSession.php';

  $name='admin_log';

  deleteSession($name);

  var_dump($_SESSION['admin_log']);

  header('location: ../index.php?page=home');
}

logoutAdmin();