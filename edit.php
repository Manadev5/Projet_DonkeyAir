<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit</title>
</head>

<body>
<h2>Modifier les Tickets</h2>
<form action="updateTicketController.php" method="POST">
  <input type="hidden" name="id" value="<?= $ticket['ticket_id'] ?>" />

  <label for="departure_date">Date de Départ :</label>
  <input type="date" id="departure_date" name="departure_date" value="<?= $ticket['departure_date'] ?>" required><br><br>

  <label for="arrival_date">Date d'Arrivée :</label>
  <input type="date" id="arrival_date" name="arrival_date" value="<?= $ticket['arrival_date'] ?>" required><br><br>

  <label for="boarding_hour">Heure d'Embarquement :</label>
  <input type="time" id="boarding_hour" name="boarding_hour" value="<?= $ticket['boarding_hour'] ?>" required><br><br>

  <label for="arrival_hour">Heure d'Arrivée :</label>
  <input type="time" id="arrival_hour" name="arrival_hour" value="<?= $ticket['arrival_hour'] ?>" required><br><br>

  <label for="travel_time">Durée du Voyage :</label>
  <input type="text" id="travel_time" name="travel_time" value="<?= $ticket['travel_time'] ?>" required><br><br>

  <label for="travel_number">Numéro du Voyage :</label>
  <input type="text" id="travel_number" name="travel_number" value="<?= $ticket['travel_number'] ?>" required><br><br>

  <label for="sit_number">Numéro de Siège :</label>
  <input type="number" id="sit_number" name="sit_number" value="<?= $ticket['sit_number'] ?>" required><br><br>

  <input type="submit" value="Modifier">
</form>

</body>

</html>