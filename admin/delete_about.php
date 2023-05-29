<?php

 $id = $_GET['id'];
 include "assets/database/functions.php";
 $sql = "DELETE FROM about WHERE id = $id";
 $result = dbQuery($sql);
           if($result){
            echo  "<meta http-equiv='refresh' content='0;URL=title.php'>";
           }else{
               echo "Error";
           }
