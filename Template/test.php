<?php
include __DIR__.'/../Controllers/controlCreate.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>

<h2>Create Tickets</h2>

<form  action="../Controllers/controlAddTicket.php" method="post" class="sign-form">
        <div>
        <label for="departure_date">departure date <i>(AAAA-MM-JJ)</i> :</label><br>
        <input type="date"  id="departure_date"  name="departure_date" >
        </div>
        <div>
        <label for="arrival_date">Date d'arrivee <i>(AAAA-MM-JJ)</i> :</label><br>
        <input type="date"  id="arrival_date"  name="arrival_date" >
        </div>
        <div>
        <label for="sit_number">numero de siege </label><br>
        <input type="text"  id="sit_number"  name="sit_number" >
        </div>
        <label for="boarding_hour">Heure d'embarquement <i>(HH:MM:SS)</i> :</label><br>
        <input type="text"  id="boarding_hour"  name="boarding_hour" >
        </div>
        <div>
        <label for="arrival_hour">Heure d'arrivee <i>(HH:MM:SS)</i> :</label><br>
        <input type="text"  id="arrival_hour"  name="arrival_hour" >
        </div>
        <label for="travel_time">Temps de trajet <i>(HH:MM:SS)</i> :</label><br>
        <input type="text"  id="travel_time"  name="travel_time" >
        </div>
        <div>
        <label for="travel_number">Numero de vol :</label><br>
        <input type="text"  id="travel_number"  name="travel_number">
        </div>
        <div>
        <label for="departure_id">Lieu de depart :</label><br>
        <select id="departure_id" name="departure_id">
            <?php
            selectDeparture();
            // foreach pour les departs mais soucis comment appeler le pdo. peut etre nouvelle fonction???
            ?>
        </select>
        </div>
        <div>
        <label for="destination_id">Lieu d'arrivee :</label><br>
        <select id="destination_id" name="destination_id">
            <?php
            selectDestination();
            // foreach pour les destinations mais soucis comment appeler le pdo. peut etre nouvelle fonction???
            ?>
        </select>
        </div>
        <div>
        <label for="price">Price ticket :</label><br>
        <input type="text"  id="price"  name="price" >
        </div>
        
        <div  class="button">
        <button  type="submit">Create tickets</button>
        </div>
            
    </form>

</body>
</html>
