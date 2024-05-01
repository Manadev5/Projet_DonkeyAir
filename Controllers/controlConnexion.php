<?php

function connexionAdmin(){

    include '../Models/login.php';

    $table= 'admin';
    $bddName= 'name';
    $postName= $_POST['name'];
    $postColumn=$_POST['password'];
    $secondColumn='password';
    $sessionName='admin_log';
    $id='admin_id';
    $redirection= '../tickets.php';

    connexion($table, $bddName, $postName,$postColumn, $secondColumn, $sessionName, $id, $redirection);

    



}

connexionAdmin();