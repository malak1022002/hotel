<?php
include "assets/database/functions.php"; 
include('functions.php');

$errName = $errEmail = $errSubject = $errMessage = "";

if(isset($_POST['btnAdd'])){
  $fname = $_POST['fname'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  if($fname == ""){
    $errName = "Please Enter Your Name";
}
if(empty($email)){
    $errEmail = "Please Your Email address";
}
if($subject == ""){
    $errSubject = "Please Enter subject.";
}
if($message == ""){
  $errMessage = "Please Enter message.";
}else{
       $sql = "insert into user_send(fname, email, subject, message, date)
                values('$fname', '$email', '$subject', '$message', NOW())";
       $result = dbQuery($sql);
       if($result){
        echo "<div class='alert alert-success' role='alert'>The operation was successfully completed</div>";
        echo "<script>setTimeout(function(){alert('Your message was successfully sent.');}, 90000);</script>";
         echo  "<meta http-equiv='refresh' content='0;URL=contact.php'>";
       }else{
           echo "Error";
       }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJ Hotel - CONTACT</title>
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php require('inc/links.php');?>
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
          <a class="nav-link me-2" href="room.php">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="facilities.php">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2 active" href="contact.php">Contact Us</a>
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
<div class="my-5 px-4">
  <h2 class="fw-bold h_font text-center text-white">CONTACT US</h2>
  <div class="h-line bg-dark"></div>

  <h4 class="text-center text-white mt-3"><?= $row['tit'] ?></h4>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 px-4">
      <div class="bg-dark rounded shadow p-4">
         <iframe class="w-100 shadow rounded mb-4" height="320" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.7172661374557!2d-55.977653977044305!3d-4.275076884608599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x925fd9911fabe7e9%3A0xcfaa59047b3b2807!2sTG%20Hotel!5e0!3m2!1sar!2s!4v1682671938454!5m2!1sar!2s"
          loading="lazy"></iframe>
          <h5 class="text-white">Address</h5>
          <a href="https://goo.gl/maps/HCDdTjaTxfwe7cBR7" target="-blank" 
          class="d-inline-block text-decoration-none text-white mb-2">
            <i class="bi bi-geo-alt-fill me-1 text-white"></i><?= $row['address'] ?>
          </a>
          <h5 class="mt-4 text-white">Call us</h5>
        <a href="#" class="d-inline-block mb-2 text-decoration-none text-white">
          <i class="bi bi-telephone-fill me-1"></i><?= $row['pn1']; ?></a>
          <br>
          <a href="#" class="d-inline-block text-decoration-none text-white">
            <i class="bi bi-telephone-fill me-1"></i><?= $row['pn2']; ?></a>
            <h5 class="mt-4 text-white">Email</h5>
            <a href="mailto: ask.tjwebdev@gmail.com" class="d-inline-block text-decoration-none text-white">
              <i class="bi bi-envelope-fill me-1 text-white"></i><?= $row['email']; ?></a>
              <h5 class="mt-4 text-white">Follow us</h5>
        <a href="https://twitter.com/?lang=ar" class="d-inline-block text-white fs-5 me-2 text-decoration-none">
            <i class="bi bi-twitter me-1"></i><?= $row['tw'] ?>
          </a>
          <a href="https://www.facebook.com/" class="d-inline-block text-white fs-5 me-2 text-decoration-none">
              <i class="bi bi-facebook me-1"></i><?= $row['fb'] ?>
            </a>
            <a href="https://twitter.com/?lang=ar" class="d-inline-block text-white fs-5 text-decoration-none">
                <i class="bi bi-instagram me-1"></i><?= $row['insta'] ?>
              </a>
      </div>
    </div>
    <?php } ?>
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-dark rounded shadow p-4">
        <form action="" method="post">
          <h5 class="text-white">Send a message</h5>
          <div class="mt-3">
            <label class="form-label text-white" style="font-weight: 500;">Name</label>
            <input type="text" name="fname" class="form-control shadow inp border">
            <span class="text-danger"><?= $errName?></span>
          </div>
          <div class="mt-3">
            <label class="form-label text-white" style="font-weight: 500;">Email</label>
            <input type="email" name="email" class="form-control shadow inp border">
            <span class="text-danger"><?= $errEmail?></span>
          </div>
          <div class="mt-3">
            <label class="form-label text-white" style="font-weight: 500;">Subject</label>
            <input type="text" name="subject" class="form-control shadow inp border">
            <span class="text-danger"><?= $errSubject?></span>
          </div>
          <div class="mt-3">
            <label class="form-label text-white" style="font-weight: 500;">Message</label>
            <textarea class="form-control shadow inp border" name="message" rows="5" style="resize: none;"></textarea>
            <span class="text-danger"><?= $errMessage?></span>
          </div>
          <button type="submit" name="btnAdd" class="btn text-white custom-bg mt-3">SEND</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php require('inc/footer.php');?>
</body>
</html>