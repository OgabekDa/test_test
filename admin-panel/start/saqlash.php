<?php
require_once("../controller/connect.php");
session_start();
$sss="SELECT * FROM `user`";
$daaa=mysqli_query($connect, $sss);
$daaa=mysqli_fetch_all($daaa);

$email=$_SESSION['email'];
$kod=$_SESSION['password'];

$fan=$_POST['fan'];
$son=$_POST['savol'];
$nat=$_POST['natija'];
$_SESSION['natija']=$nat;

$foiz=(100/$son)*$nat;
date_default_timezone_set("Asia/Tashkent");
$sana=date('Y-m-d H:i:s');

foreach($daaa as $value){
    if($value[1]==$email and $value[3]==$kod){
        $id=$value[0];
        $ema=$value[1];
        $name=$value[2];
        $kooo=$value[3];
        $sqllll="INSERT INTO `natija` (`id`, `user_id`, `email`, `kod`, `name`, `natija`, `foiz`, `sana`, `fan`) VALUES (NULL, '$id', '$ema', '$kooo', '$name', '$nat/$son', '$foiz', '$sana', '$fan');";
        mysqli_query($connect, $sqllll);
    }
}

header("Location: ../../components.php");
?>

