<?php

 $id = $_GET['id'];
 include "assets/database/functions.php";
 $sql = "DELETE FROM about_title WHERE id = $id";
 $result = dbQuery($sql);
           if($result){
            echo  "<meta http-equiv='refresh' content='0;URL=about.php'>";
           }else{
               echo "Error";
           }
