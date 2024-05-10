<?php
include __DIR__.'/../Controllers/controlCreate.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>Create</title>
</head>
<body>
    <div class="login-form">
        

                <form action="../Controllers/controlAddTicket.php" method="post" class="sign-form">
                <h2>Create Ticket</h2>
                    <div>
                    <label for="departure_date">Departure Date :<i>(AAAA-MM-JJ)</i> :</label><br>
                    <input type="date"  id="departure_date"  name="departure_date" >
                    </div>
                    <div>
                    <label for="arrival_date">Arrival Date :<i>(AAAA-MM-JJ)</i> :</label><br>
                    <input type="date"  id="arrival_date"  name="arrival_date" >
                    </div>
                    <div>
                    <label for="sit_number">Sit Number :</label><br>
                    <input type="text"  id="sit_number"  name="sit_number">
                    </div>
                    <div>
                    <label for="boarding_hour">Boarding Hour :<i>(HH:MM:SS)</i> :</label><br>
                    <input type="text"  id="boarding_hour"  name="boarding_hour" >
                    </div>
                    <div>
                    <label for="arrival_hour">Arrival Hour :<i>(HH:MM:SS)</i> :</label><br>
                    <input type="text"  id="arrival_hour"  name="arrival_hour" >
                    </div>
                    <div>
                    <label for="travel_time">Time Travel :<i>(HH:MM:SS)</i> :</label><br>
                    <input type="text"  id="travel_time"  name="travel_time" >
                    </div>
                    <div>
                    <label for="travel_number">Travel Number :</label><br>
                    <input type="text"  id="travel_number"  name="travel_number">
                    </div>
                    <div>
                    <label for="departure_id">Departure :</label><br>
                    <select id="departure_id" name="departure_id">
                        <?php
                        selectDeparture();
                        // foreach pour les departs mais soucis comment appeler le pdo. peut etre nouvelle fonction???
                        ?>
                    </select>
                    </div>
                    <div>
                    <label for="destination_id">Arrival :</label><br>
                    <select id="destination_id" name="destination_id">
                        <?php
                        selectDestination();
                        // foreach pour les destinations mais soucis comment appeler le pdo. peut etre nouvelle fonction???
                        ?>
                    </select>
                    </div>
                    <div>
                    <label for="price">Price Ticket :</label><br>
                    <input type="text"  id="price"  name="price" >
                    </div>
                    
                    <div class="button">
                    <button  type="submit">Create Ticket</button>
                    </div>
                </form>
                        
                
    </div>

</body>
</html>
