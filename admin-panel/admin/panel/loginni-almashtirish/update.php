<?php
require_once("../../../controller/connect.php");

$id = $_POST['id'];
$name = $_POST['name'];
$log = $_POST['log'];
$kod = $_POST['kod'];
print_r($_POST);
$sql = "UPDATE `admin` SET `name` = '$name', `login` = '$log', `password` = '$kod' WHERE `admin`.`id` = $id;";

mysqli_query($connect, $sql);
header("Location: ../index.php");
?>