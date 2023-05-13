<?php
session_start();

include("database.php");

?>


<?php


$sql = "SELECT sum(capacity) AS count FROM room ";
$result = mysqli_query($conn, $sql);

// Store the result in a variable
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $count1 = $row["count"];
    $_SESSION['totcnt']=$count1;
} else {
    $count1 = 0;
}

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
          <a class="nav-link active" aria-current="page" href="borrow.php">Borrowing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="donation.php">Donations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="alloc.php">Seat Allocation</a>
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
<br>

<p align="text-center">
 <h1 align="text-center" style="text-align: center;">Welcome to the Grand Central Library Portal</h1> 
</p>


  <br>  <br>  <br>  <br>  <br>  <br>  <br>


<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">


 <div class="carousel-inner">
    <div class="carousel-item active">
      
      <div class="container text-center">
  <div class="row">
    <div class="col-6">
     <img src="book.jpeg" width="200" height="150" class="d-block w-0" alt="...">
    </div>
    <div class="col-6">
       <p align="text-center" style="margin-top: 20px">

       Borrow And Return Books <a href=borrow.php class="btn btn-info">here</a>
    </p>
    </div>
    
  </div>
</div>


     </div>
    
    
    <div class="carousel-item">
      
       <div class="container text-center">
  <div class="row">
    <div class="col-6">
     <img src="lib.jpeg" width="200" height="150" class="d-block w-0" alt="...">
    </div>
   
    <div class="col-6">

       <p align="text-center" style="margin-top: 20px">

       <?php $x=$_SESSION['count']+$_SESSION['count2']+$_SESSION['count3']+$_SESSION['count4'];
       echo "$x"; ?> Seats Available <a href=alloc.php class="btn btn-info">View Details</a>
    </p>
    </div>
    



    </div>
    
  </div>
  

 
  


  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</div>
</div>

<br>  <br>  <br>  <br>  <br>  


  <div class="container text-center">
  <div class="row">
    <div class="col">
      <p style="text-align: center;">
      <h4 >Liked The Experience? Help us make it better.</h4>
    </p>
      
      <a href="donation.php" class="btn btn-info">Know More</a>


    </div>
  </div>
</div>





  







    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>