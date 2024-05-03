<?php

session_start();

function logoutAdmin(){

  include '../Models/deleteSession.php';

  $name='admin_log';

  deleteSession($name);

  var_dump($_SESSION['admin_log']);

}

logoutAdmin();