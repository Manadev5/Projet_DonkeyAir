<?php

session_start();

function logoutAdmin(){

  include '../Models/logOut.php';

  $name='admin_log';

  logOut($name);

  var_dump($_SESSION['admin_log']);

}

logoutAdmin();