<?php

session_start();

function logoutAdmin(){

  include '../Models/modelDeleteSession.php';

  $name='admin_log';

  deleteSession($name);

  var_dump($_SESSION['admin_log']);

  header('location: ../index.php');
}

logoutAdmin();