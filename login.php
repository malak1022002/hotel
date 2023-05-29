<?php
include "assets/database/functions.php"; 
 $errMessage = "";
 if(isset($_POST['fname'])){
     $result = doLogin();
     if($result != "")
     {
         $errMessage = $result;
     }
 }
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
div.login-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 600px; 
        }
        .custom_alert {
    position: fixed;
    top: 25px;
    right: 25px;
}
.log{
  background-color: black;
  color: white;
}
</style>
</head>
<body class="bg-light">
<nav id="nav_bar" class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
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
        <!-- Button trigger modal -->
<a href="login.php"><button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2 log">
  Login
</button></a>
<a href="register.php"><button type="button" class="btn btn-outline-dark shadow-none">
  Register
</button></a>
</div>
    </div>
  </div>
</nav>
<!-- carousel -->


<div class="login-form text-center rounded bg-white shadow overflow-hidden">
        <form method="POST" action="">
        <h4 class="bg-dark text-white py-4">Login</h4>
        <div class="p-2">
         <div class="mb-3">
           <input name="fname" required type="text" class="form-control shadow-none text-center" placeholder="Username">
         </div>
         <div class="mb-4">
           <input name="password" required type="password" class="form-control shadow-none text-center" placeholder="Password">
         </div>
         <div class="checkbox mb-3">
      <label>
          <span class="text-danger"><?= $errMessage ?></span>
      </label>
    </div>
         <button name="login" type="submit" class="btn text-white custom-bg shadow-none">LOGIN</button>
        </div>
        </form>
    </div>

    <!-- Bundle -->
   
</body>
</html>