<?php

include __DIR__.'/modelConnexionBdd.php';

var_dump($_POST);

$id=$_POST['ticket_id'];

$statement=$pdo->prepare("DELETE FROM ticket WHERE ticket_id=:id");
$statement->bindValue(":id",$id,PDO::PARAM_INT);
$statement->execute();

header("location:../index.php?page=tickets");
?>