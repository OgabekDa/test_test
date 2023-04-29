<?php
session_start();
require_once("controller/connect.php");

$sql = "SELECT * FROM `user`";
$data = mysqli_query($connect, $sql);
$data = mysqli_fetch_all($data);

$email=$_SESSION['email'];
$kod=$_SESSION['password'];

foreach($data as $key=>$value){
   
if($value[1]==$email and $value[3]==$kod){
 $q=true;
}
}

?>
