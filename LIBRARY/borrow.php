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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/web3@1.3.5/dist/web3.min.js"></script>

  <style type="text/css">
    body {
      background-image: url("back.png");
      background-size: cover;
      backdrop-filter: blur(4px) brightness(50%);
    }

    .return {
      color: white;
    }

    h5 {
      font-size: 40px;
    }

    .mb-3 input {
      width: 70%;
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


<form class="row g-3" method="get">
 
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Password</label>
    <input type="text" class="form-control" id="inputPassword2" placeholder="search here..." name="key">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3" name="search">Search</button>
  </div>
</form>





 <?php
$sql="SELECT *FROM Books WHERE book_status = 'available' ";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
  echo"<br>";

  while($row=mysqli_fetch_assoc($result)){
    
    echo "<div class='post'>";
    echo "<p class= 'name' style='color:white;' name='book_name'> ".$row["book_name"]. "</h4>    "                           ;
   
  echo "<p class= 'label' name='label' style='color:white;'> Label- ".$row["Label"]."</p>";
  echo "<p class= 'id' name='id' style='color:white;'> ID- ".$row["book_id"]."</p>";
  echo"</div>";
?> 



  <a href="borrow.php?Borrow=<?php echo $row["book_name"];?>" class="btn btn-info">Borrow</a>
  <br><br><br>





 <?php
}}
?> 

  <div class="return" align="center">
    <form method="get">
      <h5 align="center">Return Your Book</h5>
      
      <br><br><br><br>

      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label" style="color: lightgrey; font-size: 25px">Book ID</label>
        <input type="number" class="form-control" id="exampleFormControlTextarea1" name="bid" placeholder="Enter Book ID..."></input>
      </div>

      <div class="mb-3">
        <button class="btn btn-warning" name="submit">Submit</button>
      </div>
    </form>
  </div>
  <br><br><br><br><br><br><br><br><br>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous">
  </script>
</body>

</html>

 <?php


if(isset($_GET["search"])){
  $key=$_GET["key"];

  $sql="SELECT * FROM Books WHERE book_name LIKE '".$key."%' AND book_status='available'";
  $result=mysqli_query($conn,$sql);
  
 if(mysqli_num_rows($result)>0){
  echo"<br>";
echo"<h1 color='white;'> Your Search Results : </h1>";
  while($row=mysqli_fetch_assoc($result)){
    
    echo "<div class='post'>";
    echo "<p class= 'name' style='color:white;' name='book_name'> ".$row["book_name"]. "</h4>";                           
   
   echo "<p class= 'label' name='label' style='color:white;'> Label- ".$row["Label"]."</p>";

   echo "<p class= 'id' name='id' style='color:white;'> ID- ".$row["book_id"]."</p>";
    
    
    echo"</div>";

    ?>
  <a href="borrow.php?Borrow=<?php echo $row["book_name"]; ?>" class="btn btn-info">Borrow</a>
  <br>
  <br>

  <?php
  }
  
  

  }

}
?>



 <?php


if(isset($_GET["Borrow"])){
  $delete=$_GET["Borrow"];

  $sql="UPDATE Books SET book_status = 'borrowed' WHERE book_name='".$delete."'";
  if(!mysqli_query($conn,$sql)){
    echo "error occured";
  }
  else{
    echo "<script>window.location.href='done.php';</script>";
    exit;

  }
}
?>


<?php
if(isset($_GET["submit"])){
  $bid=$_GET["bid"];

  $sql="UPDATE Books SET book_status = 'available' WHERE book_id='".$bid."'";
  if(!mysqli_query($conn,$sql)){
    echo "error occured";
  }
  else{
     echo "<script>window.location.href='ret.php';</script>";
    exit;

  }



}

?> 



