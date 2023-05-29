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
    <title>TJ Hotel - HOME</title>
    <?php require('inc/links.php');?>
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
<style>
.availability-form {
  margin-top: -50px;
  z-index: 2;
  position: relative;
}
@media screen and (max-width: 575px){
  .availability-form {
  margin-top: 25px;
  padding: 0 35px;
}
}
.out{
  color: black;
}
.inp{
  background-color: #212529;
  color: white;
  border-color: #212529;
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
          <a class="nav-link me-2 active" href="index.php">Home</a>
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
          <a class="nav-link" href="about.php">About</a>
        </li>
      </ul>
      <div class="d-flex">     
<a href="login.php"><button type="button" class="btn btn-outline-dark shadow me-lg-3 me-2 re">
  Login
</button></a>
<a href="register.php"><button type="button" class="btn btn-outline-dark shadow re">
  Register
</button></a>

</div>
    </div>
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark shadow bg-dark">
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
<!-- carousel -->
<div class="container-fluid px-lg-4 mt-4">
   <!-- Swiper -->
  <div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <?php carousel(); ?>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
</div>
<!-- check availability form -->
<div class="container availability-form">
  <div class="row">
    <div class="col-lg-12 bg-dark shadow p-4 rounded">
      <h5 class="mb-4 text-white">Check Booking Availability</h5>
      <form >
      <div class="row align-items-end">
        <div class="col-lg-3 mb-3">
            <label class="form-label text-white" style="font-weight: 500;">Check-in</label>
            <input type="date" class="form-control shadow inp border">
        </div>
        <div class="col-lg-3 mb-3">
            <label class="form-label text-white" style="font-weight: 500;">Check-out</label>
            <input type="date" class="form-control shadow inp border">
        </div>
        <div class="col-lg-3 mb-3">
            <label class="form-label text-white" style="font-weight: 500;">Adult</label>
              <select class="form-select shadow inp border">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
        </div>
        <div class="col-lg-2 mb-3">
            <label class="form-label text-white" style="font-weight: 500;">Children</label>
              <select class="form-select shadow inp border">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
        </div>
        <div class="col-lg-1 mb-lg-3 mt-2">
          <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- our Rooms -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h_font">OUR ROOMS</h2>
<div class="container">
  <div class="row">
<?php our_room(); ?>

 
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
    </div>
  </div>
</div>
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h_font">OUR FACILITIES</h2>
<div class="container">
<div class='row justify-content-evenly px-lg-0 px-md-0 px-5'>
  <?php
our_facilities();?>
</div>
<div class='col-lg-12 text-center mt-5'>
<a href='facilities.php' class='btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none'>More Facilities >>></a>
</div>
</div>
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h_font">TESTIMONIALS</h2>
<div class="container">
  <!-- Swiper -->
  <div class="swiper swiper-testimonials">
    <div class="swiper-wrapper mb-5">

 <?php testimonials(); ?>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>
<?php
                     if(Connect()){
                        // echo "Connected";
                        
                     }else{
                         echo "Not Connected".mysqli_error(Connect());
                     }
                     $sql = "SELECT * FROM `contact_details`";
                     $rs = dbQuery($sql);
                     while($row = dbFetchAssoc($rs)){
                      ?>
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h_font">REACH US</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-dark shadow rounded">
      <iframe class="w-100 rounded" height="320" src="<?= $row['iframe'] ?>"
          loading="lazy"></iframe>
    </div>
    <div class="col-lg-4 col-md-4">
      <div class="bg-dark shadow text-white p-4 rounded mb-4">
        <h5>Call us</h5>
        <a href="#" class="d-inline-block mb-2 text-decoration-none text-white">
          <i class="bi bi-telephone-fill me-1"></i><?= $row['pn1']; ?></a>
          <br>
          <a href="#" class="d-inline-block text-decoration-none text-white">
            <i class="bi bi-telephone-fill me-1"></i><?= $row['pn2']; ?></a>
      </div>
      <div class="bg-dark shadow p-4 rounded mb-4">
        <h5>Follow us</h5>
        <a href="https://www.instagram.com/" class="d-inline-block mb-3">
          <span class="badge bg-dark text-white fs-6 p-2">
            <i class="bi bi-twitter me-1"></i><?= $row['insta'] ?>
          </span>
          </a>
          <br>
          <a href="https://www.facebook.com/" class="d-inline-block mb-3">
            <span class="badge bg-dark text-white fs-6 p-2">
              <i class="bi bi-facebook me-1"></i><?= $row['fb'] ?>
            </span>
            </a>
            <br>
            <a href="https://twitter.com/?lang=ar" class="d-inline-block">
              <span class="badge bg-dark text-white fs-6 p-2">
                <i class="bi bi-instagram me-1"></i><?= $row['tw'] ?>
              </span>
              </a>
      </div>
    </div>
  </div>
</div>
<?php } 
 require('inc/footer.php');?>
    <!-- Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      loop:true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false, 
      }
    });
    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
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
          slidesPerView: 1,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
  </script>
</body>
</html>