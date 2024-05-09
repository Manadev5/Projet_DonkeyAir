<?php

session_start();

function removeBasket(){


 $id = $_GET['id'];


 unset($_SESSION['basket_id'][$id]);

 header('location: ../index.php?page=basket ');


}

removeBasket();