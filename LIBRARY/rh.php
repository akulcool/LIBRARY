<?php
session_start();

include("database.php");

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  
 <style type="text/css">
      
      body{
          background-image: linear-gradient( 135deg, #81FFEF 10%, #F067B4 100%);
      }

      #navbar{
        background-image: linear-gradient( 135deg, #81FFEF 10%, #F067B4 100%);
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


.circle {
      display: inline-block;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      margin-right: 10px;
      align-self: center;

    }
    .green {
      align-self: center;
      background-color: green;
    }
    .red {
      background-color: red;
      align-self: center;
    }

     #circle-container {
    text-align: center;
  }
</style>




  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php"><span class="material-symbols-outlined">
home
</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

</body>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lib";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="SELECT count(sid) AS count FROM allocation WHERE status='f' AND type='Reading Hall' ";
$res=mysqli_query($conn, $sql);
if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    $count = $row["count"];
    $_SESSION['count3']=$count;
} else {
    $count = 0;
}



?>



<h1 align="center" style="color: white">
  <?php echo "$count";?> Seats Are Available Here
</h1>
<br><br><br><br><br><br><br> <br><br>

<div id="circle-container">
<?php for ($i = 1; $i <= $count; $i++) : ?>
    <div class="circle green"></div>
  <?php endfor; ?>
  <?php for ($i = $count + 1; $i <= 5; $i++) : ?>
    <div class="circle red"></div>
  <?php endfor; ?>
</div>


<br><br><br><br><br>
<form method="get">
<h2 align="center" style="color: white">
  Enter ID of seat Occupied
</h2>
<div style="text-align: center;">
<input type="number" name="id">
</div>

<div style="text-align: center;">
<button class="btn btn-info" name="occupy">Occupy</button>
</div>
</form>


<form method="get">
<h2 align="center" style="color: white">
  Enter ID of seat Vacated
</h2>
<div style="text-align: center;">
<input type="number" name="id2">
</div>

<div style="text-align: center;">
<button class="btn btn-info" name="v">Vacate</button>
</div>
</form>

<?php

if(isset($_GET['occupy'])){
  $sid=$_GET['id'];
 
if(isset($_SESSION['totcnt'])){
   $_SESSION['totcnt']--;

}

  $sql="UPDATE allocation SET status='o' WHERE sid='".$sid."' AND type='Reading Hall'";
  
  $res=mysqli_query($conn,$sql);

if($res){

 


  header("Location: http://localhost/LIBRARY%20/alloc.php");
}
else {
        // Output an error message
        echo "Error executing queries: " . $conn->error;
    }

}






else if(isset($_GET['v'])){
  $sid=$_GET['id2'];
 
if(isset($_SESSION['totcnt'])){
   $_SESSION['totcnt']++;

}

  $sql="UPDATE allocation SET status='f' WHERE sid='".$sid."' AND type='Reading Hall' ";
  
  $res=mysqli_query($conn,$sql);

if($res){

 


  header("Location: http://localhost/LIBRARY%20/alloc.php");
}
else {
        // Output an error message
        echo "Error executing queries: " . $conn->error;
    }

}

$conn->close();


?>
?>