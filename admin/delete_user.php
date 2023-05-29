<?php

 $id = $_GET['id'];
 include "assets/database/functions.php";
 $sql = "DELETE FROM user_send WHERE id = $id";
 $result = dbQuery($sql);
           if($result){
            echo "<script>alert('The record was successfully deleted')</script>";
            echo  "<meta http-equiv='refresh' content='0;URL=user.php'>";
           }else{
               echo "Error";
           }
