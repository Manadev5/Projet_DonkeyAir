<?php
session_start();

include __DIR__.'/../Controllers/controlCreate.php';

include __DIR__.'/../Models/modelBasket.php';

// include_once __DIR__ . '/../Template/viewHeader.php';  




$tickets = findTicket($_GET['id']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/style.css">
  <title>Edit Tickets</title>
</head>

<body>
    <div class="login-form">
        

            <form  action="../Controllers/controlUpdateTicket.php?id=<?= $tickets['ticket_id']?>" method="post" class="sign-form">
            <h2>Edit Tickets</h2>
                    <div>
                    <label for="departure_date">Date de départ <i>(AAAA-MM-JJ)</i> :</label><br>
                    <input type="date"  id="departure_date"  name="departure_date" value="<?= $tickets['departure_date'] ?>">
                    </div>
                    <div>
                    <label for="arrival_date">Date d'arrivee <i>(AAAA-MM-JJ)</i> :</label><br>
                    <input type="date"  id="arrival_date"  name="arrival_date" value="<?= $tickets['arrival_date']?>">
                    </div>
                    <div>
                    <label for="sit_number">numero de siege </label><br>
                    <input type="text"  id="sit_number"  name="sit_number" value="<?= $tickets['sit_number']?>">
                    </div>

                    <div>
                    <label for="boarding_hour">Heure d'embarquement <i>(HH:MM:SS)</i> :</label><br>
                    <input type="text"  id="boarding_hour"  name="boarding_hour" value="<?= $tickets['boarding_hour']?>">
                    </div>
                    <div>
                    <label for="arrival_hour">Heure d'arrivee <i>(HH:MM:SS)</i> :</label><br>
                    <input type="text"  id="arrival_hour"  name="arrival_hour" value="<?= $tickets['arrival_hour']?>">
                    </div>

                    <div>
                    <label for="travel_time">Temps de trajet <i>(HH:MM:SS)</i> :</label><br>
                    <input type="text"  id="travel_time"  name="travel_time" value="<?= $tickets['travel_time']?>">
                    </div>
                    <div>
                    <label for="travel_number">Numero de vol :</label><br>
                    <input type="text"  id="travel_number"  name="travel_number" value="<?= $tickets['travel_number']?>">
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
                    <label for="price">Prix du ticket :</label><br>
                    <input type="text"  id="price"  name="price" value="<?= $tickets['price']?>">
                    </div>
                    
                    <div  class="button">
                    <button  type="submit">Edit Ticket / Accueil</button>
                    </div>
                        
                </form>
        </div>
</body>

</html>