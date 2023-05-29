<?php

 $id = $_GET['id'];
 include "assets/database/functions.php";
 $sql = "DELETE FROM footer WHERE id = $id";
 $result = dbQuery($sql);
           if($result){
            echo "<script>alert('The record was successfully deleted')</script>";
            echo  "<meta http-equiv='refresh' content='0;URL=footer.php'>";
           }else{
               echo "Error";
           }
