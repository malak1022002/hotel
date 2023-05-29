<?php
    include "assets/database/functions.php"; 
    $errtit = $errabout = "";

  $id = $_GET['id'];
      $address = $_POST['address'];
      $gmap = $_POST['gmap'];
      $pn1 = $_POST['pn1'];
      $pn2 = $_POST['pn2'];
      $email = $_POST['email'];
      $fb = $_POST['fb'];
      $insta = $_POST['insta'];
      $tw = $_POST['tw'];
      $iframe = $_POST['iframe'];
                $sql = "update contact_details set
                address = '$address', 
                gmap = '$gmap',
                pn1 = '$pn1',            
                pn2 = '$pn2',
                email = '$email',
                fb = '$fb',
                insta = '$insta',
                tw = '$tw',
                iframe = '$iframe'
                    where id = $id";
           $result = dbQuery($sql);
           if($result){
            echo  "<meta http-equiv='refresh' content='0;URL=setting.php'>";
           }else{
               echo "Error";
           } 
