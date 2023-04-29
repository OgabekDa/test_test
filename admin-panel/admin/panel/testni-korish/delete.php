<?php

require_once("../../../controller/connect.php");

$sql1="SELECT * FROM `test`";
$data1=mysqli_query($connect, $sql1);
$data1=mysqli_fetch_all($data1);

$id=$_POST['ids'];
$test=$_POST['test'];

$sql="DELETE FROM `test` WHERE `test`.`id` = $id";

mysqli_query($connect, $sql);
if($test == 1){
header("Location: test.php");
}else{
    header("Location: test-t.php");   
}

?>