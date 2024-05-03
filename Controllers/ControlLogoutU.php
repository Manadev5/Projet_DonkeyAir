<?php
session_start();

function logoutUser(){

  include '../Models/deleteSession.php';

  $name='user_log';

  deleteSession($name);

  header('location: ../index.php');

}

logoutUser();