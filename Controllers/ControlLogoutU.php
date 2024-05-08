<?php

function logoutUser(){

  include __DIR__.'/../Models/modelDeleteSession.php';

  $name='user_log';

  deleteSession($name);

  header('location: ../index.php');

}

logoutUser();