<?php

function connexionAdmin(){

    include __DIR__.'/../Models/modelLogin.php';

    $table= 'admin';
    $bddName= 'name';
    $postName= $_POST['name'];
    $postColumn=$_POST['password'];
    $secondColumn='password';
    $sessionName='admin_log';
    $id='admin_id';
    $redirection= '../index.php?page=tickets';
    $location ='location: ../index.php?page=admin';

    connexion($table, $bddName, $postName,$postColumn, $secondColumn, $sessionName, $id, $redirection, $location);

    



}

connexionAdmin();