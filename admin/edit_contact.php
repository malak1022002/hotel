<?php
include "assets/database/functions.php";
/*adminLogin();
session_regenerate_id(true);*/ 
$id = $_GET['id'];                  
$query = "Select * from contact_details where id = $id";
$result1 = dbQuery($query);
$row = dbFetchAssoc($result1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Settings_Contact</title>
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
          <div class="card">
           <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h5 class="card-title m-0">Contsct Settings</h5>
            </div>
            <form action="update_contact.php?id=<?= $id ?>" method="post">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" name="address" 
                            class="form-control shadow-none" value="<?= $row['address'] ?>"  placeholder="please Enter address" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Google Map Link</label>
                            <input type="text" name="gmap" 
                            class="form-control shadow-none" value="<?= $row['gmap'] ?>" placeholder="please Enter link" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone Number (with country code)</label>
                            <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                            <input type="text" class="form-control shadow-none" name="pn1" 
                            value="<?= $row['pn1'] ?>" placeholder="please Enter phone number1" required>
                            </div>
                            <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                            <input type="text" class="form-control shadow-none" name="pn2"
                            value="<?= $row['pn2'] ?>" placeholder="please Enter phone number2">
                        </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" value="<?= $row['email'] ?>"
                            class="form-control shadow-none" placeholder="please Enter email" required>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Social Links</label>
                            <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-facebook me-1"></i></span>
                            <input type="text" class="form-control shadow-none" name="fb"
                            value="<?= $row['fb'] ?>" placeholder="please Enter facebook" required>
                            </div>
                            <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-instagram me-1"></i></span>
                            <input type="text" class="form-control shadow-none" name="insta"
                            value="<?= $row['insta'] ?>" placeholder="please Enter instagram">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-twitter me-1"></i></span>
                            <input type="text" class="form-control shadow-none" name="tw"
                            value="<?= $row['tw'] ?>" placeholder="please Enter instagram">
                        </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">iFrame Src</label>
                            <textarea name="iframe"  class="form-control shadow-none" 
                            placeholder="please Enter iframe src" rows="6"><?= $row['iframe'] ?></textarea>
                        </div>
                        </div>
                    </div>
                </div>
            <!--<div class="mb-3">
            <label class="form-label">Sit Title</label>
            <input type="text" name="site_title" 
            class="form-control shadow-none" placeholder="please Enter title">
            <span class="text-danger"></span>
          </div>
          <div class="mb-3">
            <label class="form-label">About us</label>
            <textarea name="site_about"  class="form-control shadow-none" placeholder="please Enter about" rows="6">
                </textarea>
            <span class="text-danger"></span>
          </div>-->
          <div class="modal-footer">
          <button type="button" onclick="window.location.href='setting.php'" class="btn text-secondary shadow-none">CANSEL</button>
          <button type="submit" name="btnEdit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
        </div>
</form>
           </div>
          </div>
    <?php require('inc/script.php');?>
</body>
</html>