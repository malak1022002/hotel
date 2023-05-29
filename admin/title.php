<?php
include "assets/database/functions.php"; 
include('functions.php');
/*adminLogin();
session_regenerate_id(true);*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - FOOTER</title>
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
  width: 130px;
  height: 100px;
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
       <a class="nav-link text-white active" href="title.php">Title</a>
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
          <h3 class="mb-4">TITLE</h3>
          <div class="card border-0 shadow-sm">
           <div class="card-body">



     
          <!--
          <div class="card border-0 shadow-sm mb-4">
           <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h5 class="card-title m-0">Add Team Member</h5>
              <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" 
              data-bs-target="#team_s">
              <i class="bi bi-plus-square me-1"></i>Add
</button>
            </div>
            <div class="row" id="team-data">

            </div>
       </div>
       </div>-->
       <!-- Modal -->
<!--<div class="modal fade" id="team_s" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form class="team_s_form">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add Team Member</h5>
      </div>
      <div class="modal-body">
       <div class="mb-3">
        <label class="form_label fw-bold">Name</label>
        <input type="text" name="member_name" id="member_name_inp" class="form-control shadow-none" required>
       </div>
       <div class="mb-3">
        <label class="form_label fw-bold">Picture</label>
        <input type="file" name="member_picture" id="member_picture_inp" accept=".jpg" class="form-control shadow-none" required>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn custom-bg text-white shadow-none">SUBMIT</button>
      </div>
    </div>
    </form>-->
    <div class="card border-0 shadow-sm">
           <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h5 class="card-title m-0">TITLE</h5>
              <button type="button" class="btn btn-dark shadow-none btn-sm">
              <a href="add_title.php" class="text-white text-decoration-none">
              <i class="bi bi-plus-square me-1"></i>Add</a> 
              </button>
            </div>
            <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Article</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
    if(Connect()){      
                     }else{
                         echo "Not Connected".mysqli_error(Connect());
                     }
                     $sql = "SELECT * FROM `facilities_article`";
                     $rs = dbQuery($sql);
                     while($row = dbFetchAssoc($rs)){
                      $id = $row['id'];
                      $article = $row['article'];
                      ?>
    <tr>
      <td><?= $id ?></td>
      <td><?= $article ?></td>
      <td><a href="edit_title.php?id=<?= $row['id'] ?>"><i class="bi bi-pencil-square text-white"></i></a> | 
                    <a href="delete_title.php?id=<?= $row['id'] ?>" onclick="return confirm('Are You Sure To Delete This Record!')">
                    <i class="bi bi-trash text-white"></i></a></td>
    </tr>
    <?php
                     }                     
 ?>  
  </tbody>
</table>


          </div>
  </div>
                                  
  <div class="card border-0 shadow-sm">
           <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h5 class="card-title m-0">TITLE ABOUT</h5>
              <button type="button" class="btn btn-dark shadow-none btn-sm">
              <a href="add_about.php" class="text-white text-decoration-none">
              <i class="bi bi-plus-square me-1"></i>Add</a> 
              </button>
            </div>
            <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Article</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
    if(Connect()){      
                     }else{
                         echo "Not Connected".mysqli_error(Connect());
                     }
                     $sql = "SELECT * FROM `about`";
                     $rs = dbQuery($sql);
                     while($row = dbFetchAssoc($rs)){
                      $id = $row['id'];
                      $article = $row['article'];
                      ?>
    <tr>
      <td><?= $id ?></td>
      <td><?= $article ?></td>
      <td><a href="edit_about.php?id=<?= $row['id'] ?>"><i class="bi bi-pencil-square text-white"></i></a> | 
                    <a href="delete_about.php?id=<?= $row['id'] ?>" onclick="return confirm('Are You Sure To Delete This Record!')">
                    <i class="bi bi-trash text-white"></i></a></td>
    </tr>
    <?php
                     }                     
 ?>  
  </tbody>
</table>


          </div>
  </div>

<?php require('inc/script.php');?>
</body>
</html>