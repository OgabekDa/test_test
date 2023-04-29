<?php
require_once '../../controller/connect.php';
$login = $_POST['login'];
$parol = $_POST['parol'];

$sql = "SELECT * FROM `admin`";
$data = mysqli_query($connect, $sql);
$data = mysqli_fetch_all($data);

if($login == $data[0][2] && $parol == $data[0][3]){
    $_SESSION['email']=$_POST['login'];
    $_SESSION['password']=$_POST['parol'];
    header("Location: ../panel/fan-test/fan-update.php");
}else{
    header("Location: index.php");
}

?>