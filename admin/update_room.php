<?php
    include "assets/database/functions.php"; 
    $errtit = $errabout = "";

  $id = $_GET['id'];
      $fname = $_POST['fname'];
      $price = $_POST['price'];
      $adult = $_POST['adult'];
      $area = $_POST['area'];
      $children = $_POST['children'];
                $sql = "update rooms set
                fname = '$fname', 
                price = '$price', 
                adult = '$adult', 
                area = '$area', 
                children = '$children'           
                    where id = $id";
           $result = dbQuery($sql);
           if($result){
            echo  "<meta http-equiv='refresh' content='0;URL=room.php'>";
           }else{
               echo "Error";
           } 