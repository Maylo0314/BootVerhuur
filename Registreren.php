<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreren</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <style>
        body{
            margin: 20px;
            background-color: #2b3035;
        }

        .mb-3{
            width: 400px;
        }

        .form-label{
            color: white;
        }

        .wit{
            color: white;
        }
        
    </style>    
</head>
<body>

    <h1 class="wit">Registreren</h1>

    <form action="CheckRegistreren.php" method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Voornaam</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="firstName" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Achternaam</label>
        <input type="text" class="form-control" id="exampleInputtext2" name="lastName" required>
    </div>
     <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="exampleInputtext2" name="email" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Wachtwoord</label>
        <input type="password" class="form-control" id="exampleInputtext2" name="password" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Telefoonnummer</label>
        <input type="text" class="form-control" id="exampleInputtext2" name="phoneNumber" required>
    </div>
    <button type="submit" class="btn btn-primary buttonkleur" name="login">Registreren</button>
    <br>
    </form>
    <br>
    <a href="Main.php" class="btn btn-primary buttonkleur">Home</a>
    <br>
    <br>
    <p class="wit">All een account? click hier om in te loggen!</p>
    <a href="login.php" class="btn btn-primary buttonkleur">Inloggen</a>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
