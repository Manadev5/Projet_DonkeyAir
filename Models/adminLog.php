<?php

$name = $_POST['name'];
$password =$_POST['password'];

$pdo = new PDO('mysql:host=localhost;dbname=donkeyair', 'root', 'manasse22');

$statement = $pdo->prepare("SELECT * FROM admin WHERE name =:name");
$statement->bindValue(':name', $name, PDO::PARAM_STR);
$statement->execute();
$admin = $statement->fetch(PDO::FETCH_ASSOC);

try{

if($name !== $admin['name']){
    echo 'wrong username ';
    var_dump($admin);

}else{

    if($password == $admin['password']){

        echo 'hello'.' '.$name.' ';
        session_start();


    $_SESSION['admin_log'] = $admin['admin_id'];

    var_dump($_SESSION['admin_log']);

    echo "<a href='tickets.php'>retourner sur la page d'accueil</a> ";

    }else{
        echo 'wrong password';
    }
}
}catch(PDOException $e){

    $error = 'ça ne marche pas';

    throw new \PDOException($error, (int)$e->getcode());


    
}

