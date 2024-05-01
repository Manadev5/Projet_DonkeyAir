<?php

function logOut($name){

    unset($_SESSION[$name]);
}