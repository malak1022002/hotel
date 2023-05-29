<?php
require('inc/essen.php');
/*adminLogin();*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Dasbord</title>
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
.ca{
  background-color: #212529;
  color: white;
}

    </style>
</head>
<body class="bg-dark">


<?php require('inc/links.php');?>
<div class="conyainer-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top shadow">
        <h3 class="mb-0 h_font">HB WEBSITE</h3>
        <a href="logout.php" class="btn btn-dark shadow re btn-sm">LOG OUT</a>
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
       <a class="nav-link text-white active" href="dashbord.php">Dashbord</a>
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
        <div class="content">
        <div class="container-fluid">
          <div class="header text-center">
            <h3 class="title text-white">Dashbord</h3>
          </div>
          <div class="places-sweet-alerts shadow">
            <div class="row">
              <div class="col-md-3">
                <div class="card ">
                  <div class="card-body text-center shadow ca">
                    <h5 class="card-text">FEATURES & FACILITIES</h5>
                    <a href="features_facilities.php"><button class="btn btn-primary btn-fill">Click</button></a>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card ">
                  <div class="card-body shadow text-center ca">
                    <h5 class="card-text">USERS</h5>
                    <a href="user.php"><button class="btn btn-primary btn-fill">Click</button></a>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card ">
                  <div class="card-body text-center shadow ca">
                    <h5 class="card-text">CAROUSEL</h5>
                    <a href="carousel.php"><button class="btn btn-primary btn-fill">Click</button></a>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card ">
                  <div class="card-body text-center shadow ca">
                    <h5 class="card-text">ROOM</h5>
                    <a href="room.php"><button class="btn btn-primary btn-fill">Click</button></a>
                  </div>
                </div>
              </div><br>
              <div class="col-md-3">
                <div class="card ">
                  <div class="card-body text-center shadow ca">
                    <h5 class="card-text">TESTIMONIALS</h5>
                    <a href="testimonials.php"><button class="btn btn-primary btn-fill">Click</button></a>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card ">
                  <div class="card-body text-center shadow ca">
                    <h5 class="card-text">FOOTER</h5>
                    <a href="footer.php"><button class="btn btn-primary btn-fill">Click</button></a>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card ">
                  <div class="card-body text-center shadow ca">
                    <h5 class="card-text">TITLE</h5>
                    <a href="title.php"><button class="btn btn-primary btn-fill">Click</button></a>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card ">
                  <div class="card-body text-center shadow ca">
                    <h5 class="card-text">ABOUT</h5>
                    <a href="about.php"><button class="btn btn-primary btn-fill">Click</button></a>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card ">
                  <div class="card-body text-center shadow ca">
                    <h5 class="card-text">STATISTIC</h5>
                    <a href="statistic.php"><button class="btn btn-primary btn-fill">Click</button></a>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card ">
                  <div class="card-body text-center shadow ca">
                    <h5 class="card-text">LOGIN</h5>
                    <a href="login.php"><button class="btn btn-primary btn-fill">Click</button></a>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card ">
                  <div class="card-body text-center shadow ca">
                    <h5 class="card-text">SETTINGS</h5>
                    <a href="setting.php"><button class="btn btn-primary btn-fill">Click</button></a>
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
<?php require('inc/script.php');?>
</body>
</html>