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
                      <div class='col-lg-3 col-md-2 text-center bg-white rounded shadow py-4 my-3'>
                        <img src='assets/images/$image' width='80px'>
                        <h5 class='mt-3'>$fname</h5>
                      
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
                      <div class='bg-white rounded shadow p-4 border-top border-4 border-dark pop'>
                        <div class='d-flex align-items-center mb-2'>
                          <img src='assets/images/$image' width='40px'>
                          <h5 class='m-0 ms-3'>$fname</h5>
                        </div>
                        <p>$description</p>
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
                    <div class='swiper-wrapper mb-5'>
      <div class='swiper-slide bg-white text-center overflow-hidden rounded'>
        <img src='assets/images/$image' class='w-100'>
        <h5 class='mt-2'>$fname</h5>
      </div>
    </div>";
}
}
function room_Features(){
  global $con;
  $sql = "SELECT * FROM `add_features`";
  $rs = dbQuery($sql);
  while($row = dbFetchAssoc($rs)){
   $id = $row['id'];
   $fname = $row['fname'];
   echo "
            <input class='form-check-input mt-0 me-1 shadow-none text-light' type='radio' 
            aria-label='Radio button for following text input' required>$fname";
}
}
function room_facilities(){
  global $con;
  $sql = "SELECT * FROM `add_facilities`";
  $rs = dbQuery($sql);
  while($row = dbFetchAssoc($rs)){
   $id = $row['id'];
   $fname = $row['fname'];
   echo "
            <input class='form-check-input mt-0 me-1 shadow-none' type='radio' 
            aria-label='Radio button for following text input' required>$fname";
}
}
function room_td(){
  global $con;
  $sql = "SELECT * FROM `add_features`";
  $rs = dbQuery($sql);
  while($row = dbFetchAssoc($rs)){
   $id = $row['id'];
   $fname = $row['fname'];
   echo "
   <td> $fname </td>";
}
}
?>