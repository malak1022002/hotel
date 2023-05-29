<?php

 $id = $_GET['id'];
 include "assets/database/functions.php";
 $sql = "DELETE FROM add_facilities WHERE id = $id";
 $result = dbQuery($sql);
           if($result){
            echo "<script>alert('The record was successfully deleted')</script>";
            echo  "<meta http-equiv='refresh' content='0;URL=features_facilities.php'>";
           }else{
               echo "Error";
           }
