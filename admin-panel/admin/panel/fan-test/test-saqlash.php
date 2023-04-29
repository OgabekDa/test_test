<?php
require_once("../../../controller/connect.php");



$sql="SELECT * FROM `kitob`";
$data=mysqli_query($connect, $sql);
$data=mysqli_fetch_all($data);

foreach($data as $value){
    if($value[0]==$_POST['fan']){
        $fan=$value[1];
    }
}
echo "<pre>";
print_R($_POST);
echo "</pre>";
echo $fan;

$savol=$_POST['savol'];
$A=$_POST['A'];
$B=$_POST['B'];
$C=$_POST['C'];
$D=$_POST['D'];
$AJ=$_POST['AJ'];
$BJ=$_POST['BJ'];
$CJ=$_POST['CJ'];
$DJ=$_POST['DJ'];

if(isset($AJ)){
    $sql="INSERT INTO `test` (`id`, `fan`, `savol`, `javob1`, `javob2`, `javob3`, `javob4`, `javob`) VALUES (NULL, '$fan', '$savol', '$A', '$B', '$C', '$D', '$A');";
}elseif(isset($BJ)){
    $sql="INSERT INTO `test` (`id`, `fan`, `savol`, `javob1`, `javob2`, `javob3`, `javob4`, `javob`) VALUES (NULL, '$fan', '$savol', '$A', '$B', '$C', '$D', '$B');";
}elseif(isset($CJ)){
    $sql="INSERT INTO `test` (`id`, `fan`, `savol`, `javob1`, `javob2`, `javob3`, `javob4`, `javob`) VALUES (NULL, '$fan', '$savol', '$A', '$B', '$C', '$D', '$C');";
}else{
    $sql="INSERT INTO `test` (`id`, `fan`, `savol`, `javob1`, `javob2`, `javob3`, `javob4`, `javob`) VALUES (NULL, '$fan', '$savol', '$A', '$B', '$C', '$D', '$D');";
}

mysqli_query($connect, $sql);
header("Location: testlar.php");
?>