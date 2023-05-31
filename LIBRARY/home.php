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
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Library</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   <!-- <style>
  body {
    /* background-color: black; */
    background-image: url("https://us.123rf.com/450wm/timoshenkoanna/timoshenkoanna2210/timoshenkoanna221000114/192537031-black-luxury-fabric-background-with-golden-waves-stripes-modern-background.jpg");
    background-size: auto;
    background-repeat: repeat-x;
    animation: waveAnimation 10s linear infinite;
  }

  @keyframes waveAnimation {
    0% {
      background-position: 0 0;
    }
    100% {
      background-position: 100% 0;
    }
  }

  #navbar {
    background-color: black;
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
</style> -->
<style>
.navbar-logo {
  display: flex;
  align-items: center;
}

.logo {
  width: 150px; /* Adjust the width as per your requirements */
  height: 50px; /* Adjust the height as per your requirements */
}

</style>




  </head>
  <body class="main-layout">
    <!-- <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="" /></div>
   </div> -->
    



    <header>
      <div class="header">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class=" col-md-2 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo">
                          <a href="index.html" class="navbar-logo">
                            <img src="images/logo.jpeg" alt="#" class="logo"/>
                          </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-8 col-sm-9">
                  <nav class="navigation navbar navbar-expand-md navbar-dark ">
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarsExample04">
                        <ul class="navbar-nav mr-auto">
                           <li class="nav-item active">
                              <a class="nav-link" href="home.php">Home</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="borrow.php">Borrowing</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="donation.php">Donations</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="alloc.php">Seat Allocation </a>
                           </li>
                           
                        </ul>
                     </div>
                     <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search for books here" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                      </form>
                  </nav>
               </div>
               
            </div>
         </div>
      </div>
   </header>
    








<br>
<br>


<style type="text/css">
  h1 {
    color: rgb(3, 2, 9); 
  }
</style>
<br>
<br>
 <!-- start slider section -->
  <div id="top_section" class=" banner_main">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                   <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                   <li data-target="#myCarousel" data-slide-to="1"></li>
                   <li data-target="#myCarousel" data-slide-to="2"></li>
                   <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                   <div class="carousel-item active">
                      <div class="container-fluid">
                         <div class="carousel-caption relative">
                            <div class="bluid">
                               <h1>Welcome to<br>Libratech Portal</h1>
                               <p>Our library management portal provides seamless access to a vast collection of books,  <br>enabling users to search, borrow, and return with ease.Students can conveniently reserve <br> reading halls, air-conditioned halls, and enjoy excellent access to the library's facilities through <br>this portal.
                               </p>
                               
                            </div>
                         </div>
                      </div>
                   </div>
                   
                   
                   
                </div>
                
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end slider section -->

 <!-- start we do -->
 <div class="we_do">
  <div class="container">
     <div class="row">
        <div class="col-md-12">
           <div class="titlepage text_align_center">
              <h2>What we offer </h2>
           </div>
        </div>
     </div>
     <div class="row">
        <div class="col-md-12">
           <div id="we1" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                 <li data-target="#we1" data-slide-to="0" class="active"></li>
                 <li data-target="#we1" data-slide-to="1"></li>
                 <li data-target="#we1" data-slide-to="2"></li>
                 <li data-target="#we1" data-slide-to="3"></li>
              </ol>
              <div class="carousel-inner">
                 <div class="carousel-item active">
                    <div class="container-fluid">
                       <div class="carousel-caption we1_do">
                          <div class="row">
                             <div class="col-md-4">
                                <div id="bo_ho" class="we_box text_align_left">
                                   <i><img src="images/we1.png" alt="#"/></i>
                                   <h3>Seat <br>Allocation</h3>
                                   <p>Click here to access the seat allocation system and reserve seats for air-conditioned areas, non-air-conditioned areas, reading halls, and discussion rooms.
                                   </p>
                                   <a class="read_more" href="alloc.php">Go</a>
                                </div>
                             </div>
                             <div class="col-md-4">
                                <div id="bo_ho" class="we_box text_align_left">
                                   <i><img src="images/we1.png" alt="#"/></i>
                                   <h3>Borrow and Return<br>Books</h3>
                                   <p>Click here to access book borrowing and return services for a seamless borrowing and withdrawal experience.
                                   </p><br><br>
                                   <a class="read_more" href="borrow.php">Go</a>
                                </div>
                             </div>
                             
                           </div>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="carousel-item">
                    <div class="container-fluid">
                       <div class="carousel-caption we1_do">
                          <div class="row">
                             <div class="col-md-4">
                                <div id="bo_ho" class="we_box text_align_left">
                                   <i><img src="images/we1.png" alt="#"/></i>
                                   <h3>Donations</h3>
                                   <p>many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                   </p>
                                   <a class="read_more" href="we_do">Go</a>
                                </div>
                             </div>
                             
                             
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="carousel-item">
                    <div class="container-fluid">
                       <div class="carousel-caption we1_do">
                          <div class="row">
                             <div class="col-md-4">
                                <div id="bo_ho" class="we_box text_align_left">
                                   <i><img src="images/we1.png" alt="#"/></i>
                                   <h3>website <br>development</h3>
                                   <p>many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                   </p>
                                   <a class="read_more" href="we_do">Read More</a>
                                </div>
                             </div>
                             <div class="col-md-4">
                                <div id="bo_ho" class="we_box text_align_left">
                                   <i><img src="images/we1.png" alt="#"/></i>
                                   <h3>website <br>development</h3>
                                   <p>many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                   </p>
                                   <a class="read_more" href="we_do">Read More</a>
                                </div>
                             </div>
                             <div class="col-md-4">
                                <div id="bo_ho" class="we_box text_align_left">
                                   <i><img src="images/we1.png" alt="#"/></i>
                                   <h3>website <br>development</h3>
                                   <p>many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                   </p>
                                   <a class="read_more" href="we_do">Read More</a>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              
           </div>
        </div>
     </div>
  </div>
</div>
<!-- end we do -->


<!-- <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">


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
</div> -->

<!-- portfolio -->
<div class="portfolio">
  <div class="container">
     <div class="row">
        <div class="col-md-12">
           <div class="titlepage text_align_left">
              <h2>Libratech Online Service Portal for NITK Students </h2>
           </div>
        </div>
     </div>
     <div class="row">
        
        
        <div class="col-md-6">
           <div id="ho_nf" class="portfolio_main text_align_left">
              <figure>
                 <img src="images/prot3.png" alt="#"/>
                 
              </figure>
           </div>
        </div>
        <div class="col-md-6">
           <div id="ho_nf" class="portfolio_main text_align_left">
              <figure>
                 <img src="images/prot4.png" alt="#"/>
                 
              </figure>
           </div>
        </div>
        
     </div>
  </div>
</div>
<!-- end portfolio -->

<!-- chose -->
<div class="chose">
  <div class="container">
     <div class="row d_flex">
        <div class="col-md-12">
           <div class="titlepage text_align_left">
              <h2>Done By</h2>
              <br>
              <p>This project was done as a part of the Database Management Systems Lab course(CS254) by the students of NITK SURATHKAL CSE students of the batch of 2025.</p>
           </div>
        </div>
        <div class="col-lg-5 col-md-4">
           <div class="chose_box">
              
              <h3> Akul Arora</h3>
              <strong>211CS103</strong>
              
           </div>
        </div>
        <div class="col-lg-5 col-md-4">
           <div class="chose_box">
              
              <h3>Chinmay Sharma T</h3>
              <strong>211CS114</strong>
              
           </div>
        </div>
        <div class="col-lg-2 col-md-4">
           <div class="chose_box">
              
              <h3>Kush Anchalia</h3>
              <strong>211CS134</strong>
              
           </div>
        </div>
        <div class="col-lg-2 col-md-4">
           <div class="chose_box">
              
              <h3>Samar Sodhi</h3>
              <strong>211CS167</strong>
              
           </div>
        </div>
        
     </div>
  </div>
</div>
<!-- end chose --> 
<!-- footer -->
<footer>
         
  <div class="copyright text_align_left">
     <div class="container">
        <div class="row d_flex">
           <div class="col-md-6">
              <p>© 2023 All Rights Reserved.  <a href="https://html.design/"> Library Management</a></p>
              <!-- <h4 >Liked The Experience? Help us make it better.</h4> -->
              <a href="donation.php" class="btn btn-info">Donate</a>
           </div>
           
        </div>
     </div>
  </div>
</div>
</footer>
<!-- end footer -->


  <!-- <div class="container text-center">
  <div class="row">
    <div class="col">
      <p style="text-align: center;">
      
    </p>
      
      


    </div>
  </div>
</div> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
