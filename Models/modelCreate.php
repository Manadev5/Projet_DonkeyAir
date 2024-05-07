<?php
function select($mem,$id,$name){
    $pdo = new PDO('mysql:host=localhost;dbname=donkeyair', 'root'); 
    $stmt = $pdo->prepare("SELECT * FROM $mem");
    $stmt->execute();
    $countries=$stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($countries as $country){?>
        <option value="<?=$country[$id]?>"> <?=$country[$name]?></option>
    <?php
    }   
}


?>