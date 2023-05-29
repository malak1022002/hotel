<?php
include "assets/database/functions.php"; 
/*adminLogin();
session_regenerate_id(true);*/
                
                     if(Connect()){
                        // echo "Connected";
                        
                     }else{
                         echo "Not Connected".mysqli_error(Connect());
                     }
                     $sql = "SELECT * FROM `settings`";
                     $rs = dbQuery($sql);
                     while($row = dbFetchAssoc($rs)){
                    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Settings</title>
    <link rel="stylesheet" href="css/comon.css">
    <?php require('inc/links.php');?>
    <style>
    #dashbord-menu {
      position: fixed;
      height: 100%;
}
@media screen and (max-width: 992px){
  #dashbord-menu{
    height: auto;
    width: 100%;
  } 
  #main-content {
    margin-top: 60px;
  }
}
.imgf {
  width: 176px;
  height: 220px;
}
    </style>
</head>
<body class="bg-white">


<?php require('inc/links.php');?>
<div class="conyainer-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top">
        <h3 class="mb-0 h_font">HB WEBSITE</h3>
        <a href="logout.php" class="btn btn-light btn-sm">LOG OUT</a>
    </div>
    <div class="col-lg-2 bg-dark border-top border-3 border-secondary" id="dashbord-menu">
    <nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid flex-lg-column align-items-stretch">
    <h4 class="mt-2 text-light">ADMIN PANEL</h4>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropdown" 
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="adminDropdown">
     <ul class="nav nav-pills flex-column">
      <li class="nav-item">
       <a class="nav-link text-white" href="dashbord.php">Dashbord</a>
      </li>
      <li class="nav-item">
       <a class="nav-link text-white" href="features_facilities.php">Features & Facilities</a>
      </li>
      <li class="nav-item">
       <a class="nav-link text-white" href="user.php">Users</a>
      </li>
      <li class="nav-item">
       <a class="nav-link text-white" href="carousel.php">Carousel</a>
      </li>
      <li class="nav-item">
       <a class="nav-link text-white" href="room.php">Room</a>
      </li>
      <li class="nav-item">
       <a class="nav-link text-white" href="testimonials.php">Testimonials</a>
      </li>
      <li class="nav-item">
       <a class="nav-link text-white" href="footer.php">Footer</a>
      </li>
      <li class="nav-item">
       <a class="nav-link text-white" href="title.php">Title</a>
      </li>
      <li class="nav-item">
       <a class="nav-link text-white" href="about.php">About</a>
      </li>
      <li class="nav-item">
       <a class="nav-link text-white" href="statistic.php">Statistic</a>
      </li>
      <li class="nav-item">
       <a class="nav-link text-white" href="login.php">Login</a>
      </li>
      <li class="nav-item">
       <a class="nav-link text-white active" href="setting.php">Settings</a>
      </li>
    </ul>
    </div>
  </div>
</nav>
    </div>


    <div class="container-fluid" id="main-content">
      <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">
          <h3 class="mb-4">SETTINGS</h3>
          <div class="card border-0 shadow-sm">
           <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h5 class="card-title m-0">General Settings</h5>
              <button type="button" class="btn btn-dark shadow-none btn-sm">
              <a href="edit.php?id=<?= $row['id'] ?>" class="text-white text-decoration-none">
              <i class="bi bi-pencil-square me-1"></i>Edit</a> 
              </button>
            </div>
            <h6 class="card-subtitle mb-1 fw-bold">Sit Title</h6>
            <p class="card-text" id="site_title"><?= $row['site_title']; ?></p>
            <h6 class="card-subtitle mb-1 fw-bold">About us</h6>
            <p class="card-text" id="site_about"><?= $row['site_about']; ?></p>
            <?php } ?>
           </div>
          </div>
<br>
<!--/////////////////////////////////////////////////////////////////////////////////////////-->







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



          <div class="card border-0 shadow-sm">
           <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h5 class="card-title m-0">General Settings</h5>
              <button type="button" class="btn btn-dark shadow-none btn-sm">
              <a href="edit_contact.php?id=<?= $row['id'] ?>" class="text-white text-decoration-none">
              <i class="bi bi-pencil-square me-1"></i></i>Edit</a> 
              </button>
            </div>
            <div class="row">
              <div class="col-lg-6">
              <div class="mb-4">
                  <h6 class="card-subtitle mb-1 fw-bold">Title</h6>
                  <p class="card-text" id="tit"><?= $row['tit']; ?></p>
                </div>
                <div class="mb-4">
                  <h6 class="card-subtitle mb-1 fw-bold">Address</h6>
                  <p class="card-text" id="address"><?= $row['address']; ?></p>
                </div>
                <div class="mb-4">
                  <h6 class="card-subtitle mb-1 fw-bold">Google Map</h6>
                  <p class="card-text" id="gmap"><?= $row['gmap']; ?></p>
                </div>
                <div class="mb-4">
                  <h6 class="card-subtitle mb-1 fw-bold">Phone Numpers</h6>
                  <p class="card-text mb-1" id="address"><i class="bi bi-telephone-fill"></i>
                  <span id="pnl"></span><?= $row['pn1']; ?>
                 </p>
                 <p class="card-text" id="address"><i class="bi bi-telephone-fill"></i>
                  <span id="pn2"></span><?= $row['pn2']; ?>
                 </p>
                </div>
                <div class="mb-4">
                  <h6 class="card-subtitle mb-1 fw-bold">E-mail</h6>
                  <p class="card-text" id="email"><?= $row['email']; ?></p>
                </div>
              </div>
              <div class="col-lg-6">
              <div class="mb-4">
                  <h6 class="card-subtitle mb-1 fw-bold">Social Links</h6>
                  <p class="card-text mb-1" id="fb"><i class="bi bi-facebook me-1"></i>
                  <span id="fb"></span><?= $row['fb']; ?>
                 </p>
                 <p class="card-text" id="insta"><i class="bi bi-instagram me-1"></i>
                  <span id="insta"></span><?= $row['insta']; ?>
                 </p>
                 <p class="card-text" id="tw"><i class="bi bi-twitter me-1"></i>
                  <span id="tw"></span><?= $row['tw']; ?>
                 </p>
                </div>
                <div class="mb-4">
                  <h6 class="card-subtitle mb-1 fw-bold">iFrame</h6>
                  <iframe id="iframe" class="border p-2 w-100" loading="lazy"
                  src="<?= $row['iframe']; ?>"></iframe>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
          </div>
          <br>
          

<!--/////////////////////////////////////////////////////////////////////////////////////////////////-->





<br>
    <div class="card border-0 shadow-sm">
           <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h5 class="card-title m-0">General Settings</h5>
              <button type="button" class="btn btn-dark shadow-none btn-sm">
              <a href="add.php" class="text-white text-decoration-none">
              <i class="bi bi-pencil-square me-1"></i>Add</a> 
              </button>
            </div>
    <?php
    if(Connect()){
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
                    
    echo "
    <div class='row'>
        <div class='col-md-2 mb-3'>
        <div class='card bg-dark text-white'>
        <img src='assets/images/$image' class='imgf'>
        <div class='card-img-overlay text-end'>
        <a href='delete.php?id= $id'>
        <button type='button' class='btn btn-danger btn-sm shadow-none'>
        <i class='bi bi-trash text-white'></i>Delete
        </button></a>
        </div>
        <p class='card-text text-center px-3 py-2' id='fname'> $fname </p>       
           </div>
           </div>";
                     }
                     ?>
          </div>
  </div>
                     
                                   


<?php require('inc/script.php');?>
</body>
</html>