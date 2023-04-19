<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webshop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <style>
       @media screen and (max-width: 810px) {
      .container-boten{
        display: flex;
        flex-direction: column;
      }

      }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="Main.php">BootVerhuur</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link" href="Login.php">Inloggen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Registreren.php">Registreren</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Beheerder.php">Inloggen als beheerder</a>
        </li>      
    </div>
  </div>
</nav>


<span class="badge text-bg-secondary">Onze boten:</span>

<div class="container-boten">
<div class="card boten" style="width: 18rem;"  data-bs-theme="dark">
  <img src="bootimages/longfin.png" class="card-img-top" alt="Longfin">
  <div class="card-body">
    <h5 class="card-title">Longfin</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="Login.php" class="btn btn-primary buttonkleur">Reserveren</a>
  </div>
</div>

<div class="card boten" style="width: 18rem;"  data-bs-theme="dark">
  <img src="bootimages/Speeder.jpg" class="card-img-top" alt="Longfin">
  <div class="card-body">
    <h5 class="card-title">Speeder</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="Login.php" class="btn btn-primary buttonkleur">Reserveren</a>
  </div>
</div>

<div class="card boten" style="width: 18rem;"  data-bs-theme="dark">
  <img src="bootimages/Jetski.jpg" class="card-img-top" alt="Longfin">
  <div class="card-body">
    <h5 class="card-title">Jetski</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="Login.php" class="btn btn-primary buttonkleur">Reserveren</a>
  </div>
</div>
</div>

<span class="badge text-bg-secondary">Dagdelen:</span>

<div class="dagdelen">
<div class="card-group"  data-bs-theme="dark">
  <div class="card">
    <img src="bootimages/zonsopkomst.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Ochtend</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <a href="Login.php" class="btn btn-primary buttonkleur">Reserveren</a>
    </div>
  </div>
  <div class="card">
    <img src="bootimages/middag.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Middag</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <a href="Login.php" class="btn btn-primary buttonkleur">Reserveren</a>
    </div>
  </div>
  <div class="card">
    <img src="bootimages/avond.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Avond</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <a href="Login.php" class="btn btn-primary buttonkleur">Reserveren</a>
    </div>
  </div>
</div>
</div>
<br>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>    
</body>
</html>