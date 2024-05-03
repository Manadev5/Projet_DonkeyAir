<?php

function deleteSession($name){

    unset($_SESSION[$name]);
}