<?php 

session_start();

$id = $_GET['id'];

$_SESSION['basket_id'][]= $id;

header('location: ../pageBasket.php');