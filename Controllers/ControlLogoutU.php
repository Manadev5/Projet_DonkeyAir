<?php
session_start();

function logoutUser(){

  include '../Models/logOut.php';

  $name='user_log';

  logOut($name);

  header('location: ../index.php');

}

logoutUser();