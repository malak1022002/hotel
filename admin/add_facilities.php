<?php
include "assets/database/functions.php";
if(isset($_POST['btnadd'])){
    //echo "Button Clicked";
    $fname = $_POST['fname'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $newImage = rand(1000, 100000)."_".$image; // 2546_image1.png
    move_uploaded_file($_FILES['ImgFle']['tmp_name'], 'assets/images/'.$newImage);
    $sql = "insert into add_facilities (image,fname,description)
             values('$image','$fname','$description')";
    $result = dbQuery($sql);
    if($result){
        echo  "<meta http-equiv='refresh' content='0;URL=features_facilities.php'>";
    }else{
        echo "Error";
    }
    }



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
.inp{
  background-color: #212529;
  color: white;
  border-color: #212529;
}

    </style>
</head>
<body class="bg-dark">
         

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
       <a class="nav-link text-white active" href="features_facilities.php">Features & Facilities</a>
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
       <a class="nav-link text-white" href="setting.php">Settings</a>
      </li>
    </ul>
    </div>
  </div>
</nav>
    </div>



    <div class="container-fluid" id="main-content">
      <div class="row">         
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">
          <h3 class="mb-4 text-white">FACILITIES</h3>
          <div class="card">
           <div class="card-body shadow bg-dark">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h5 class="card-title m-0 text-white">ADD FACILITIES</h5>
            </div>
            <form action="" method="post">
            <div class="mb-3">
            <label class="form-label text-white">Name</label>
            <input type="text" name="fname" 
            class="form-control shadow-none text-white bg-dark" required>
          </div>
          <div class="mb-3">
            <label class="form-label text-white">Icon</label>
            <input type="file" name="image" 
            class="form-control shadow-none text-white bg-dark" required>
          </div>
          <div class="mb-3">
            <label class="form-label text-white">Description</label>
            <textarea name="description" class="form-control shadow-none text-white bg-dark" rows="6" required></textarea>
          </div>
          <div class="modal-footer">
          <button type="button" onclick="window.location.href='features_facilities.php'" class="btn text-light shadow-none">CANSEL</button>
          <button type="submit" name="btnadd" class="btn custom-bg text-white shadow-none">ADD</button>
        </div>
</form>
           </div>
          </div>
    <?php require('inc/script.php');?>
</body>
</html>