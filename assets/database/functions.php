<?php session_start();
// اتصال مع السيرفر
function Connect(){
    $conn = mysqli_connect("localhost", "root", "", "hpwebsite");
    return $conn;
}
//تنفيذ الاستعلام
function dbQuery($sql){
    $result = mysqli_query(Connect(), $sql);
    return $result;
}
// تخزين البيانات الناتجة عن الاستعلام في مصفوفة
function dbFetchArray($result, $resultType=MYSQLI_NUM){
    return mysqli_fetch_array($result, $resultType);
}
function dbFetchAssoc($result){
    return mysqli_fetch_assoc($result);
}
// استرجاع عدد الصفوف الناتجة عن الاستعلام
function dbNumRows($result){
    return mysqli_num_rows($result);
}
function doLogin(){
    $errorMessage = "";
    $fname = $_POST['fname'];
    $password = $_POST['password'];
    if($fname == "" || $password ==""){
        $errorMessage = "Please enter your username and password";
    }else{
        $sql = "SELECT id FROM `login` 
                WHERE fname='$fname' AND password='$password'";
        $rs = dbQuery($sql);
        if(dbNumRows($rs) > 0)
        {
            $row = dbFetchAssoc($rs);
            $_SESSION['id']  = $row['id'];
            $_SESSION['fname'] = $fname;
            header('location:index.php');
        }else{
         $errorMessage = "Please check your username or password";   
        }
    }
    return $errorMessage;
}
function CheckUser(){
    if(!isset($_SESSION['id'])){
        header('location:login.php');
        exit();
    }
}




