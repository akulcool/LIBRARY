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
  <script src="https://cdn.jsdelivr.net/npm/web3@1.3.5/dist/web3.min.js"></script>

  <style type="text/css">
    body {
      background-image: url("back.png");
      background-size: cover;
      backdrop-filter: blur(5px) brightness(50%);
    }

    .form-donation {
      padding: 30px;
      width: 70%;
      color: white;
      font-size: 20px;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="home.php">Home</a>
      
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

  <br><br><br><br>

  <form class="form-donation" method="post">
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Name</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your name..." name="name">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Donation Amount</label>
      <input type="text" class="form-control" id="exampleFormControl1" name="pay" placeholder="Enter donation amount...">
    </div>

    <br><br>

    <button class="btn btn-warning" name="go">PAY</button>

    <br><br><br><br><br><br><br><br><br><br>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>


<!-- 
<?php

// Establish a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lib";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST["go"])){
  // Get values from HTML form
  $name = $_POST['name'];
  $pay = $_POST['pay'];

  // Prepare and execute the SQL statement
  $sql = "INSERT INTO Donations(name, amount)
  VALUES ('$name', '$pay')";

  if (mysqli_query($conn, $sql)) {
    header("Location: http://localhost/LIBRARY%20/home.php");
  }
  else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

?> -->