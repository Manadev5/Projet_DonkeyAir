<?php
include __DIR__.'/../Models/modelCreate.php';

function selectDeparture(){
    $mem='departure';
    $id='departure_id';
    $name='country';
    select($mem,$id,$name);
}

function selectDestination(){
    $mem='destination';
    $id='destination_id';
    $name='des_country';
    select($mem,$id,$name);
}


?>