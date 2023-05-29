<?php
    include "assets/database/functions.php"; 
    $errtit = $errabout = "";

  $id = $_GET['id'];
      $site_title = $_POST['site_title'];
      $site_about = $_POST['site_about'];
      if($site_title == ""){
          $errtit = "please Enter title";
      }
      if(empty($site_about)){
          $errabout = "please Enter about";
      }else{
                $sql = "update settings set
                site_title = '$site_title', 
                site_about = '$site_about'            
                    where id = $id";
           $result = dbQuery($sql);
           if($result){
            echo  "<meta http-equiv='refresh' content='0;URL=setting.php'>";
           }else{
               echo "Error";
           } 
         }