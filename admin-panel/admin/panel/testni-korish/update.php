<?php 
require_once("../../../controller/connect.php");


$sql1="SELECT * FROM `test`";
$data1=mysqli_query($connect, $sql1);
$data1=mysqli_fetch_all($data1);

$test=$_POST['test'];
$fan=$_POST['fan'];
$id=$_POST['id'];
$savol=$_POST['savol'];
$A=$_POST['A'];
$B=$_POST['B'];
$C=$_POST['C'];
$D=$_POST['C'];
$javob=$_POST['javob'];


$sql="UPDATE `test` SET `fan` = '$fan', `savol` = '$savol', `javob1` = '$A', `javob2` = '$B', `javob3` = '$C', `javob4` = '$D', `javob` = '$javob' WHERE `test`.`id` =$id;";
mysqli_query($connect, $sql);
if($test == 1){
header("Location: test.php");
}else{
    header("Location: test-t.php");   
}
?>