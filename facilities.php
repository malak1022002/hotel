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
    <title>TJ Hotel - FACILITIES</title>
    <!-- font google -->
    <?php require('inc/links.php');?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<style>
  .pop:hover{
    border-top-color: var(--teal) !important;
    transform: scale(1.03);
    transition: all 0.3s;
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
          <a class="nav-link me-2 active" href="facilities.php">Facilities</a>
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
  <h2 class="fw-bold h_font text-center text-white">OUR FACILITIES</h2>
  <div class="h-line bg-dark"></div>
  <?php facilities_title(); ?>
</div>
<div class="container">
<div class='row'>
  <?php
  facilities();
  ?>
  </div>
</div>

<?php require('inc/footer.php');?>
</body>
</html>