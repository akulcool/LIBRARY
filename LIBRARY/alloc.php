<!-- <?php

session_start();
include("database.php");

?> -->

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>

  <style type="text/css">
    body {
      background-image: url("back.png");
      background-size: cover;
      backdrop-filter: blur(5px) brightness(50%);
      padding: 20px;
      text-align: center;
    }

    h5, p {
      display: inline;
    }
  </style>

  <style>
    .material-symbols-outlined {
      font-variation-settings:
        'FILL' 0,
        'wght' 400,
        'GRAD' 0,
        'opsz' 48
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="home.php">
        <span class="material-symbols-outlined">home</span>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Borrowing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="donation.php">Donations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Seat Allocation</a>
          </li>
        </ul>

        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>

    </div>
  </nav>
  <br>

  <h1 style="padding: 10px; color: white"><i>Let's find you a room...</i></h1>
  <br><br>
  
  <h4 style="color: lightgrey;">AC Hall</h4>
  <p>
    <h5 style="color: white;">
      <?php $x=$_SESSION['count']; echo "$x";?> 
      Seats Free
    </h5>
  </p>
  &nbsp;&nbsp;
  <a href="ac.php" class="btn btn-sm btn-warning">See Allocation</a>
  <br><hr style="color: white;">

  <h4 style="color: lightgrey;">Non-AC Hall</h4>
  <p>
    <h5 style="color: white;">
      <?php $x=$_SESSION['count2']; echo "$x";?> 
      Seats Free
    </h5>
  </p>
  &nbsp;&nbsp;
  <a href="nonac.php" class="btn btn-sm btn-warning">See Allocation</a>
  <br><hr style="color: white;">

  <h4 style="color: lightgrey;">Reading Hall</h4>
  <p>
    <h5 style="color: white;">
      <?php $x=$_SESSION['count3']; echo "$x";?> 
      Seats Free
    </h5>
  </p>
  &nbsp;&nbsp;
  <a href="rh.php" class="btn btn-sm btn-warning">See Allocation</a>
  <br><hr style="color: white;">

  <h4 style="color: lightgrey;">Discussion Room</h4>
  <p>
    <h5 style="color: white;">
      <?php   $x=$_SESSION['count4']; echo "$x";?> 
      Seats Free
    </h5>
  </p>
  &nbsp;&nbsp;
  <a href="dr.php" class="btn btn-sm btn-warning">See Allocation</a>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>