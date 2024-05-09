<?php

function clear(){
    session_start();
    
unset($_SESSION['basket_id']);

var_dump($_SESSION['basket_id']);
}

clear();