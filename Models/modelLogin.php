<?php

function connexion($table, $bddName, $postName,$postInput, $secondColumn, $sessionName, $id, $redirection, $location){


    include __DIR__.'/modelConnexionBdd.php';


$statement = $pdo->prepare("SELECT * FROM $table WHERE $bddName =:name");
$statement->bindValue(':name', $postName, PDO::PARAM_STR);
$statement->execute();
$user = $statement->fetch(PDO::FETCH_ASSOC);

try{

if(empty($postName) AND empty($postInput)){
    header($location);

}else if($postName !== $user[$bddName]){

    echo 'wrong username ';

}else{

    if($postInput == $user[$secondColumn]){

        echo 'hello'.' '.$postName.' ';
        session_start();


    $_SESSION[$sessionName] = $user[$id];

    var_dump($_SESSION[$sessionName]);

    echo "<a href='".$redirection."'>aller à la page d'accueil</a> ";

    }else{
        
        
        echo 'wrong password';
    }
}
}catch(PDOException $e){

    $error = 'ça ne marche pas';

    throw new \PDOException($error, (int)$e->getcode());


    
}

}