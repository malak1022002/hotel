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
    <title>TJ Hotel - ROOM</title>
    <?php require('inc/links.php');?>
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style>
      .re{
        color: white;
      }
      .inp{
  background-color: #212529;
  color: white;
  border-color: #212529;
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
          <a class="nav-link me-2 active" href="room.php">Rooms</a>
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
<div class="my-5 px-4">
  <h2 class="fw-bold h_font text-center">OUR ROOM</h2>
  <div class="h-line bg-dark"></div>
  
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark rounded shadow">
  <div class="container-fluid flex-lg-column align-items-stretch">
    <h4 class="mt-2 text-white">FILTERS</h4>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" 
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
      <div class="border bg-dark shadow p-3 rounded mb-3">
        <h5 class="mb-3 text-white" style="font-size: 18px;">CHECK AVAILABILITY</h5>
        <label class="form-label text-white">Check-in</label>
        <input type="date" class="form-control shadow mb-3 inp border">
        <label class="form-label text-white">Check-out</label>
        <input type="date" class="form-control shadow inp border">
      </div>
      <div class="border bg-dark p-3 shadow rounded mb-3">
        <h5 class="mb-3 text-white" style="font-size: 18px;">FACILITIES</h5>
        <div class="mb-2">
          <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
          <label class="form-check-label text-white" for="f1">Facility one</label>
        </div>
        <div class="mb-2">
          <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
          <label class="form-check-label text-white" for="f2">Facility two</label>
        </div>
        <div class="mb-2">
          <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
          <label class="form-check-label text-white" for="f3">Facility three</label>
        </div>
      </div>
      <div class="border bg-dark p-3 shadow rounded mb-3">
        <h5 class="mb-3 text-white" style="font-size: 18px;">GUESTS</h5>
        <div class="d-flex">
          <div class="me-3">
            <label class="form-label text-white">Adults</label>
            <input type="number" class="form-control shadow inp border">
          </div>
          <div>
            <label class="form-label text-white">Children</label>
            <input type="number" class="form-control shadow inp border">
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
    </div>
    <div class="col-lg-9 col-md-12 px-4">
    <div class="card mb-4 border-0 shadow bg-dark">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/1.jpg" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3 text-white">Simple Room Name</h5>
      <div class="features mb-3">
            <h6 class="mb-1 text-white">Features</h6>
            <span class="badge rounded-pill bg-dark text-white shadow text-wrap">
              2 Rooms
            </span>
            <span class="badge rounded-pill bg-dark text-white shadow text-wrap">
              1 Bathroom
            </span>
            <span class="badge rounded-pill bg-dark text-white shadow text-wrap">
              2 Balcony
            </span>
            <span class="badge rounded-pill bg-dark text-white shadow text-wrap">
              3 Sofa
            </span>
          </div>
          <div class="facilities mb-3">
            <h6 class="mb-1 text-white">Facilities</h6>
            <span class="badge rounded-pill bg-dark text-white shadow text-wrap">
              Wifi
            </span>
            <span class="badge rounded-pill bg-dark text-white shadow text-wrap">
              Television
            </span>
            <span class="badge rounded-pill bg-dark text-white shadow text-wrap">
              AC
            </span>
            <span class="badge rounded-pill bg-dark text-white shadow text-wrap">
              Room heater
            </span>
          </div>
          <div class="guests">
            <h6 class="mb-1 text-white">Guests</h6>
            <span class="badge rounded-pill bg-dark text-white shadow text-wrap">
              5 Adults
            </span>
            <span class="badge rounded-pill bg-dark text-white shadow text-wrap">
              4 Children
            </span>
          </div>
    </div>
    <div class="col-md-2 mt-lg-0 col-md-0 mt-4 text-center text-white">
      <h6 class="mb-4">₪200 per night</h6>
      <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
      <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
    </div>
  </div>
</div>
<div class="card mb-4 border-0 shadow bg-dark">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/1.jpg" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3 text-white">Simple Room Name</h5>
      <div class="features mb-3">
            <h6 class="mb-1 text-white">Features</h6>
            <span class="badge rounded-pill bg-dark text-white shadow text-wrap">
              2 Rooms
            </span>
            <span class="badge rounded-pill bg-dark text-white shadow text-wrap">
              1 Bathroom
            </span>
            <span class="badge rounded-pill bg-dark text-white shadow text-wrap">
              2 Balcony
            </span>
            <span class="badge rounded-pill bg-dark text-white shadow text-wrap">
              3 Sofa
            </span>
          </div>
          <div class="facilities mb-3">
            <h6 class="mb-1 text-white">Facilities</h6>
            <span class="badge rounded-pill bg-dark text-white shadow text-wrap">
              Wifi
            </span>
            <span class="badge rounded-pill bg-dark text-white shadow text-wrap">
              Television
            </span>
            <span class="badge rounded-pill bg-dark text-white shadow text-wrap">
              AC
            </span>
            <span class="badge rounded-pill bg-dark text-white shadow text-wrap">
              Room heater
            </span>
          </div>
          <div class="guests">
            <h6 class="mb-1 text-white">Guests</h6>
            <span class="badge rounded-pill bg-dark text-white shadow text-wrap">
              5 Adults
            </span>
            <span class="badge rounded-pill bg-dark text-white shadow text-wrap">
              4 Children
            </span>
          </div>
    </div>
    <div class="col-md-2 mt-lg-0 col-md-0 mt-4 text-center text-white">
      <h6 class="mb-4">₪200 per night</h6>
      <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
      <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
    </div>
  </div>
</div>
<div class="card mb-4 border-0 shadow bg-dark">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/1.jpg" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3 text-white">Simple Room Name</h5>
      <div class="features mb-3">
            <h6 class="mb-1 text-white">Features</h6>
            <span class="badge rounded-pill bg-dark text-white shadow text-wrap">
              2 Rooms
            </span>
            <span class="badge rounded-pill bg-dark text-white shadow text-wrap">
              1 Bathroom
            </span>
            <span class="badge rounded-pill bg-dark text-white shadow text-wrap">
              2 Balcony
            </span>
            <span class="badge rounded-pill bg-dark text-white shadow text-wrap">
              3 Sofa
            </span>
          </div>
          <div class="facilities mb-3">
            <h6 class="mb-1 text-white">Facilities</h6>
            <span class="badge rounded-pill bg-dark text-white shadow text-wrap">
              Wifi
            </span>
            <span class="badge rounded-pill bg-dark text-white shadow text-wrap">
              Television
            </span>
            <span class="badge rounded-pill bg-dark text-white shadow text-wrap">
              AC
            </span>
            <span class="badge rounded-pill bg-dark text-white shadow text-wrap">
              Room heater
            </span>
          </div>
          <div class="guests">
            <h6 class="mb-1 text-white">Guests</h6>
            <span class="badge rounded-pill bg-dark text-white shadow text-wrap">
              5 Adults
            </span>
            <span class="badge rounded-pill bg-dark text-white shadow text-wrap">
              4 Children
            </span>
          </div>
    </div>
    <div class="col-md-2 mt-lg-0 col-md-0 mt-4 text-center text-white">
      <h6 class="mb-4">₪200 per night</h6>
      <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
      <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
    </div>
  </div>
</div>
    </div>
  </div>
</div>
<?php require('inc/footer.php');?>
</body>
</html>