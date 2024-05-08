<?php 

session_start();

$id = $_GET['id'];


if (isset($_SESSION['basket_id']))  {
    
    if (in_array( $id ,$_SESSION['basket_id']  )) {
 
        $cart=$_SESSION['basket_id'];

        $cart[$id]=$cart[$id]+1;

        $_SESSION['basket_id']=$cart;
    }

    else {
        $_SESSION['basket_id'][$id]=1;
            
    }
}
else {
    $_SESSION['basket_id'][$id]=1;

}

header('location: ../basket.php');