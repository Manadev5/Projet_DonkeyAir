<?php

function select($mem,$id,$name){
    include __DIR__.'/modelConnexionBdd.php';
    $stmt = $pdo->prepare("SELECT * FROM $mem");
    $stmt->execute();
    $countries=$stmt->fetchAll(PDO::FETCH_ASSOC);


    foreach($countries as $country){ ?>
        <option value="<?=$country[$id]?>"> <?=$country[$name]?></option>
    <?php
    }   
}


?>