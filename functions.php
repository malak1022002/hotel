<?php
function our_facilities(){
    global $con;
    $sql = "SELECT * FROM `add_facilities`";
                     $rs = dbQuery($sql);
                     while($row = dbFetchAssoc($rs)){
                      $id = $row['id'];
                      $image = $row['image'];
                      $fname = $row['fname'];
                      $description = $row['description'];
                      echo "
                      <div class='col-lg-3 col-md-2 text-center bg-dark rounded shadow py-4 my-3'>
                        <img src='assets/images/$image' width='80px'>
                        <h5 class='mt-3 text-white'>$fname</h5>
                      
                    </div>";
}
}
function facilities(){
  global $con;
  $sql = "SELECT * FROM `add_facilities`";
                   $rs = dbQuery($sql);
                   while($row = dbFetchAssoc($rs)){
                    $id = $row['id'];
                    $image = $row['image'];
                    $fname = $row['fname'];
                    $description = $row['description'];
                    echo "
                    <div class='col-lg-4 col-md-6 mb-5 px-4'>
                      <div class='bg-dark rounded shadow p-4 border-top border-4 border-dark pop'>
                        <div class='d-flex align-items-center mb-2'>
                          <img src='assets/images/$image' width='40px'>
                          <h5 class='m-0 ms-3 text-white'>$fname</h5>
                        </div>
                        <p class='text-white'>$description</p>
                      </div>

                  </div>";
}
}
function about(){
  global $con;
  $sql = "SELECT * FROM `team_details`";
                   $rs = dbQuery($sql);
                   while($row = dbFetchAssoc($rs)){
                    $id = $row['id'];
                    $image = $row['image'];
                    $fname = $row['fname'];
                    echo "                   
      <div class='swiper-slide bg-dark shadow text-center overflow-hidden rounded'>
        <img src='assets/images/$image' class='w-100'>
        <h5 class='mt-2 text-white'>$fname</h5>
    </div>";
}
}
function carousel(){
  global $con;
  $sql = "SELECT * FROM `carousel`";
                   $rs = dbQuery($sql);
                   while($row = dbFetchAssoc($rs)){
                    $id = $row['id'];
                    $image = $row['image'];
                    echo "
                    <div class='swiper-slide'>
        <img src='assets/images/$image' class='w-100 d-block'/>
      </div>";
}
}
function our_room(){
  global $con;
  $sql = "SELECT * FROM `rooms`";
                   $rs = dbQuery($sql);
                   while($row = dbFetchAssoc($rs)){
                    $id = $row['id'];
                      $name = $row['fname'];
                      $area = $row['area'];
                      $price = $row['price'];
                      $adult = $row['adult'];
                      $children = $row['children'];
                    echo "
                    <div <div class='col-lg-4 col-md-6 my-3'>
                    <div class='card border-0 shadow bg-dark' style='width: 350px; margin: auto;'>
                      <img src='images/rooms/1.jpg' class='card-img-top'>
                      <div class='card-body text-white'>
                        <h5>$name</h5>
                        <h6 class='mb-4'>$price per night</h6>
                        <div class='features mb-4'>
                          <h6 class='mb-1'>Features</h6>
                          <span class='badge rounded-pill bg-dark shadow text-white text-wrap'>
                            3 Sofa
                          </span>
                        </div>
                        <div class='facilities mb-4'>
                          <h6 class='mb-1'>Facilities</h6>
                          <span class='badge rounded-pill bg-dark shadow text-white text-wrap'>
                            Wifi
                          </span>
                          <span class='badge rounded-pill bg-dark shadow text-white text-wrap'>
                            Television
                          </span>
                          <span class='badge rounded-pill bg-dark shadow text-white text-wrap'>
                            AC
                          </span>
                          <span class='badge rounded-pill bg-dark shadow text-white text-wrap'>
                            Room heater
                          </span>
                        </div>
                        <div class='guests mb-4'>
                          <h6 class='mb-1'>Guests</h6>
                          <span class='badge rounded-pill bg-dark shadow text-white text-wrap'>
                          $adult Adults
                          </span>
                          <span class='badge rounded-pill bg-dark shadow text-white text-wrap'>
                          $children Children
                          </span>
                        </div>
                        <div class='rating mb-4'>
            <h6 class='mb-1'>Rating</h6>
            <span class='badge rounded-pill bg-dark shadow'>
            <i class='bi bi-star-fill text-warning'></i>
            <i class='bi bi-star-fill text-warning'></i>
            <i class='bi bi-star-fill text-warning'></i>
            <i class='bi bi-star-fill text-warning'></i>
            </span>
          </div>
          <div class='d-flex justify-content-evenly mb-2'>
          <a href='#' class='btn btn-sm text-white custom-bg shadow-none'>Book Now</a>
          <a href='#'class='btn btn-sm btn-outline-dark shadow-none'>More details</a>
          </div>
                      </div>
                    </div>
                  </div>";
}
}
function features_room(){
  global $con;
  $sql = "SELECT * FROM `add_features`";
                   $rs = dbQuery($sql);
                   while($row = dbFetchAssoc($rs)){
                    $id = $row['id'];
                    $fname = $row['fname'];
                    echo "                   
                    <span class='badge rounded-pill bg-light text-dark text-wrap'>
                    $fname
                  </span>";
}
}
function testimonials(){
  global $con;
  $sql = "SELECT * FROM `testimonials`";
                   $rs = dbQuery($sql);
                   while($row = dbFetchAssoc($rs)){
                    $id = $row['id'];
                    $fname = $row['fname'];
                    $article = $row['article'];
                    echo "                   
                    <div class='swiper-slide bg-dark shadow p-4'>
        <div class='profile d-flex align-items-center mb-3'>
          <img src='images/facilities/star.png' width='30px'>
          <h6 class='m-0 ms-2 text-white'>$fname</h6>
        </div>
        <p>$article</p>
          <div class='rating'>
            <i class='bi bi-star-fill text-warning'></i>
            <i class='bi bi-star-fill text-warning'></i>
            <i class='bi bi-star-fill text-warning'></i>
            <i class='bi bi-star-fill text-warning'></i>
          </div>
      </div>";
}
}
function footer(){
  global $con;
  $sql = "SELECT * FROM `footer`";
                   $rs = dbQuery($sql);
                   while($row = dbFetchAssoc($rs)){
                    $id = $row['id'];
                    $fname = $row['fname'];
                    echo "
                    <p class='text-white'>$fname.</p>";
}
}
function facilities_title(){
  global $con;
  $sql = "SELECT * FROM `facilities_article`";
                   $rs = dbQuery($sql);
                   while($row = dbFetchAssoc($rs)){
                    $id = $row['id'];
                    $article = $row['article'];
                    echo "
                    <p class='text-center text-white mt-3'>$article </p>";
}
}
function about_us(){
  global $con;
  $sql = "SELECT * FROM `about`";
                   $rs = dbQuery($sql);
                   while($row = dbFetchAssoc($rs)){
                    $id = $row['id'];
                    $article = $row['article'];
                    echo "
                    <p class='text-center text-white mt-3'>$article.</p>";
}
}
function about_title(){
  global $con;
  $sql = "SELECT * FROM `about_title`";
                   $rs = dbQuery($sql);
                   while($row = dbFetchAssoc($rs)){
                    $id = $row['id'];
                    $title = $row['title'];
                    $article = $row['article'];
                    $image = $row['image'];
                    echo "
                    <div class='col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2'>
                    <h3 class='mb-3'>$title</h3>
                    <p>
                    $article.
                      </p>
                  </div>
                  <div class='col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1'>
                    <img src='admin/assets/images/$image' class='w-100'>
                  </div></p>";
}
}
function statistic(){
  global $con;
  $sql = "SELECT * FROM `statistic`";
                   $rs = dbQuery($sql);
                   while($row = dbFetchAssoc($rs)){
                    $id = $row['id'];
                      $article = $row['article'];
                      $image = $row['image'];
                    echo "
                    <div class='col-lg-3 col-md-6 mb-4 px-4'>
      <div class='bg-dark rounded shadow p-4 border-top border-4 text-center box'>
        <img src='admin/assets/images/$image' width='70px'>
        <h4 class='mt-3 text-white'>$article</h4>
      </div>
    </div>";
}
}
function Login(){
  $errorMessage = "";
  $fname = $_POST['fname'];
  $password = $_POST['password'];
  if($fname == "" || $password ==""){
      $errorMessage = "Please enter your username and password";
  }else{
      $sql = "SELECT id FROM `login` 
              where fname='$fname' and password='$password'";
      $rs = dbQuery($sql);
      if(dbNumRows($rs) > 0)
      {
          $row = dbFetchAssoc($rs);
          $_SESSION['id']  = $row['id'];
          $_SESSION['fname'] = $fname;
          header('location:index.php');
      }else{
       $errorMessage = "Please check your username or password";   
      }
  }
  return $errorMessage;
}
?>

