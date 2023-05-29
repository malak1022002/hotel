<?php
include "assets/database/functions.php"; 
include('functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJ Hotel - ABOUT</title>
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php require('inc/links.php');?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
<style>
  .box {
    border-top-color: var(--teal) !important;
  }
  .re{
  color: white;
}
</style>
</head>
<body class="bg-dark">
<nav id="nav_bar" class="navbar navbar-expand-lg navbar-dark bg-dark px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h_font" href="index.php">TJ HOTEL</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link me-2" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="room.php">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="facilities.php">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="about.php">About</a>
        </li>
      </ul>
      <div class="d-flex">
        <!-- Button trigger modal -->
<button type="button" class="btn btn-outline-dark shadow me-lg-3 me-2 re">
  Login
</button>
<button type="button" class="btn btn-outline-dark shadow re">
  Register
</button>
</div>
    </div>
  </div>
</nav>
<nav class="navbar navbar-expand-lg shadow navbar-dark bg-dark">
  <ul class="navbar-nav me-auto">
        
        <?php
        if(!isset($_SESSION['fname'])){
          echo "<li class='nav-item'>
          <a class='nav-link' href='#'>Welcome name </a>
        </li>";
          }else{
            echo "<li class='nav-item'>
            <a class='nav-link' href='#'>Welcome ".$_SESSION['fname']."</a>
          </li>"; 
          }
        if(isset($_SESSION['fname'])){
          echo "<li class='nav-item'>
          <a class='nav-link' href='logout.php'>logout</a>
        </li>"; 
        }
        ?>
</ul>
</nav>



<div class="my-5 px-4">
  <h2 class="fw-bold h_font text-center text-white">ABOUT US</h2>
  <div class="h-line bg-dark"></div>
  <?php about_us(); ?>
</div>
<div class="container">
  <div class="row justify-content-between text-white align-items-center">
   <?php about_title(); ?>
  </div>
</div>
<div class="container mt-5">
  <div class="row">
    <?php statistic(); ?>
  </div>
</div>


<!--<h3 class="my-5 fw-bold h_font text-center">MANAGEMENT TEAM</h3>
<div class="container px-4">-->
<?php
    /*if(Connect()){
                        // echo "Connected";
                        
                     }else{
                         echo "Not Connected".mysqli_error(Connect());
                     }
                     $sql = "SELECT * FROM `team_details`";
                     $rs = dbQuery($sql);
                     while($row = dbFetchAssoc($rs)){
                      $id = $row['id'];
                      $fname = $row['fname'];
                      $image = $row['image'];
echo "<div class='swiper mySwiper'>
    <div class='swiper-wrapper mb-5'>
      <div class='swiper-slide bg-white text-center overflow-hidden rounded'>
        <img src='assets/images/$image' class='w-100'>
        <h5 class='mt-2'>$fname</h5>
      </div>
    </div>";
                     }    
*/
?>
<h3 class="my-5 fw-bold h_font text-center">MANAGEMENT TEAM</h3>
<div class="container px-4">
<div class="swiper mySwiper">
<div class='swiper-wrapper mb-5'>
    <?php about(); ?>
                    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>
<?php require('inc/footer.php');?>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 40,
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
  </script>
</body>
</html>