<?php
var_dump($_POST);

$id=$_POST['ticket_id'];

$pdo = new \PDO('mysql:host=localhost;dbname=donkeyair', 'root');

$statement=$pdo->prepare("DELETE FROM ticket WHERE ticket_id=:id");
$statement->bindValue(":id",$id,PDO::PARAM_INT);
$statement->execute();

header("location:../tickets.php");
?>