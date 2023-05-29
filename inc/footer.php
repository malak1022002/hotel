
<div class="container-fluid bg-dark shadow mt-5">
  <div class="row">
    <div class="col-lg-4 p-4">
      <h3 class="h_font fw-bold text-white fs-3 mb-2">TJ HOTEL</h3>
    <?php footer(); ?>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Links</h5>
      <a href="index.php" class="d-inline-block mb-2 text-white text-decoration-none">Home</a><br>
      <a href="room.php" class="d-inline-block mb-2 text-white text-decoration-none">Rooms</a><br>
      <a href="facilities.php" class="d-inline-block mb-2 text-white text-decoration-none">Facilities</a><br>
      <a href="contact.php" class="d-inline-block mb-2 text-white text-decoration-none">Contact Us</a><br>
      <a href="about.php" class="d-inline-block mb-2 text-white text-decoration-none">About</a><br>
    </div>
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
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Follow us</h5>
      <a href="https://twitter.com/?lang=ar" class="d-inline-block text-white text-decoration-none mb-2">
        <i class="bi bi-twitter me-1"></i><?= $row['tw'] ?></a><br>
        <a href="https://www.facebook.com/" class="d-inline-block text-white text-decoration-none mb-2">
        <i class="bi bi-facebook me-1"></i><?= $row['fb'] ?></a>
          <br>
          <a href="https://twitter.com/?lang=ar" class="d-inline-block text-white text-decoration-none">
          <i class="bi bi-instagram me-1"></i><?= $row['insta'] ?></a>
    </div>
    <?php } ?>
  </div>
</div>
<h6 class="text-center bg-dark text-white p-3 m-0">Designed and devloper by MALAK</h6>
<h6 class="text-center bg-dark text-white p-3 m-0">&copy; 2023–<?= date('Y') ?></h6>