<?php
require_once("../../../controller/connect.php");

$name = $_POST['kitob'];

$sql = "INSERT INTO `kitob` (`id`, `name`) VALUES (NULL, '$name');";

mysqli_query($connect, $sql);
header("Location: fan-update.php");
?>