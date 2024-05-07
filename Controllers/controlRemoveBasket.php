<?php

session_start();

function removeBasket(){


 $id = $_GET['id'];

 $idFound = array_search($id, $_SESSION['basket_id']);

 unset($_SESSION['basket_id'][$idFound]);

 header('location: ../pageBasket.php ');


}

removeBasket();