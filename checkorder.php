<!-- Check of ingelogd -->
<?php
session_start();

if(!isset($_SESSION['user'])){

    header("location: login.php");
    exit;
}

// Query voor orders
require_once ('databaseFunctions.php');

    if(isset($_POST['controleren']))
    {
        $boot = $_POST['boot'];
        $dagdeel = $_POST['dagdeel'];
        $datum = $_POST['datum'];
       

        $query = "INSERT INTO orders(boot, dagdeel, datum, userid) VALUES(' $boot', '$dagdeel', '$datum', '" . $_SESSION['user']['id'] . "')";

        $result = execute_query($query);
        if ($result)
        {
            echo "<p class = wit>Reservering is geplaatst!<p/>";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <br>
    <br>
<a href="orders.php" class="btn btn-primary buttonkleur pos">Bekijk je Reservering</a>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>    
</body>
</html>
