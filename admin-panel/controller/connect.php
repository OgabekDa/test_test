<?php
$host = "localhost";
$user = "root";
$password = "root";
$details = "blog-test";

$connect = mysqli_connect($host, $user, $password, $details);

if(!$connect){
    die("Error");
}




?>