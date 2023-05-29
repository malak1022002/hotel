<?php

 $id = $_GET['id'];
 include "assets/database/functions.php";
 $sql = "DELETE FROM statistic WHERE id = $id";
 $result = dbQuery($sql);
           if($result){
            echo  "<meta http-equiv='refresh' content='0;URL=statistic.php'>";
           }else{
               echo "Error";
           }
