<?php

function connexionUser(){

  include __DIR__.'/../Models/modelLogin.php';

  $table= 'user';
  $bddName= 'firstname';
  $postName= $_POST['name'];
  $postInput=$_POST['lastname'];
  $secondColumn='lastname';
  $sessionName='user_log';
  $id='user_id';
  $redirection= '../index.php';
  $location = 'location: ../index.php?page=login';

  connexion($table, $bddName, $postName,$postInput, $secondColumn, $sessionName, $id, $redirection, $location);

}

connexionUser();