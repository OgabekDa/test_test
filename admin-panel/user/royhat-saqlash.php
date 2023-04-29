<?php
session_start();
require_once '../controller/connect.php';

$username = $_POST['email'];
$parol = $_POST['kod'];
$name = $_POST['name'];

// $_SESSION['name']=$_POST['name'];
// $_SESSION['password']=$_POST['kod'];
date_default_timezone_set("Asia/Tashkent");
$data=date("Y-m-d-H-i-s");
//echo $username. " ". $parol. " ". $telefon. " ". $kitob. " ". $current_time;
$sql = "INSERT INTO `user` (`id`, `email`, `name`, `password`, `data`) VALUES (NULL, '$username', '$name', '$parol', '$data');";
mysqli_query($connect, $sql);

    header("Location: royhat.php");

?>

