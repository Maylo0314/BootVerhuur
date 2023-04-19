<!-- Check of ingelogd-->
<?php
session_start();
if(!isset($_SESSION['user'])){

    header("location: login.php");
    exit;
}

require_once('databaseFunctions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeheerderOrders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <style>

        body{
            background-color:  #2b3035;
        }
        .wit{
            color: white;
            margin: 20px;
        }
        .pos{
            margin: 0 0 0 20px;
        }
    </style>
</head>
<body>

<h2 class="wit">Beheerder pagina</h2>
<a href="main.php" class="btn btn-primary buttonkleur pos">Terug</a>
<h3 class="wit">Alle orders:</h3>
<br>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>    
</body>
</html>

<!-- Query voor alle orders voor de beheerder  -->
<?php
$bestellingen = execute_query("SELECT orders.boot, orders.dagdeel, orders.datum, orders.userid, users.firstName, users.lastName FROM `orders` INNER JOIN users ON users.id=orders.userid");

while($bestelling = $bestellingen->fetch_assoc()){
    echo "<h4 class = wit> Boot: " . $bestelling["boot"] . "</h4>";
    echo "<h4 class = wit> Dagdeel: " . $bestelling["dagdeel"] . "</h4>";
    echo "<h4 class = wit> Datum: " . $bestelling["datum"] . "</h4>";
    echo "<h4 class = wit> Naam: " . $bestelling["firstName"] . " " .  $bestelling["lastName"] .  "</h4>";
echo "<br>";
}
?>


