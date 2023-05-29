<?php
    include "assets/database/functions.php"; 

  $id = $_GET['id'];
      $article = $_POST['article'];
                $sql = "update about set
                article = '$article'         
                    where id = $id";
           $result = dbQuery($sql);
           if($result){
            echo  "<meta http-equiv='refresh' content='0;URL=title.php'>";
           }else{
               echo "Error";
           } 