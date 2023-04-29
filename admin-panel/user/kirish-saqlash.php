<?php
session_start();    
require_once("../controller/connect.php");
$sql = "SELECT * FROM `user`";
$data = mysqli_query($connect, $sql);
$data = mysqli_fetch_all($data);

$email=$_POST['email'];
$password=$_POST['kod'];

foreach($data as $key=>$value){
     if($value[1]==$email and $value[3]==$password){
     echo "ok";
     $_SESSION['email']=$_POST['email'];
     $_SESSION['password']=$_POST['kod'];
     header("Location: ../../index.php");
     }
}
if(!($value[1]==$email and $value[3]==$password)){
   
    // header("Location: kirish.php");
}
    
?>