<?php
    include "assets/database/functions.php"; 
    $errtit = $errabout = "";

  $id = $_GET['id'];
      $fname = $_POST['fname'];
      $article = $_POST['article'];
                $sql = "update testimonials set
                fname = '$fname', 
                article = '$article'            
                    where id = $id";
           $result = dbQuery($sql);
           if($result){
            echo  "<meta http-equiv='refresh' content='0;URL=testimonials.php'>";
           }else{
               echo "Error";
           } 