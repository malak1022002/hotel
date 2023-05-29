<?php
    include "assets/database/functions.php"; 
    $errtit = $errabout = "";

  $id = $_GET['id'];
      $fname = $_POST['fname'];
                $sql = "update footer set
                fname = '$fname'           
                    where id = $id";
           $result = dbQuery($sql);
           if($result){
            echo  "<meta http-equiv='refresh' content='0;URL=footer.php'>";
           }else{
               echo "Error";
           } 