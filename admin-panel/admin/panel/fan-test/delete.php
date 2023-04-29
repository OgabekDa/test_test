<?php
require_once("../../../controller/connect.php");

$id = $_POST['id'];

$sql = "DELETE FROM `kitob` WHERE `kitob`.`id` = $id";

mysqli_query($connect, $sql);
header("Location: fan-update.php");
?>