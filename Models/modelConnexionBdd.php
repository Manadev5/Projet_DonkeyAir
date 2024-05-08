<?php

$host = 'localhost';
$db   = 'donkeyair';
$user = 'root';
$pass = 'manasse22';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES   => false,
];

try {

  $pdo = new PDO($dsn, $user, $pass, $options);

} 
catch (PDOException $e) {
  $errorMessage = "Une erreur s'est produite lors de la connexion à la base de données. Veuillez réessayer plus tard.";
  throw new \PDOException($errorMessage, (int)$e->getCode());
}

