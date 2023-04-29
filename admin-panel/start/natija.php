<?php

require_once("../controller/connect.php");

$ssql="SELECT * FROM `test`";
$data=mysqli_query($connect, $ssql);
$data=mysqli_fetch_all($data);

$son=$_POST['sonnn'];
$fan=$_POST['fannn'];


$sss="SELECT * FROM `kitob`";
$daaa=mysqli_query($connect, $sss);
$daaa=mysqli_fetch_all($daaa);

foreach($daaa as $val){
  if($val[1]==$_POST['fannn']){
      $id=$val[0];
  }
}


foreach($data as $value){
        $savollar[]=[
          'savol'=>$value[2],
          'id'=>$value[0],
               
        ];
}


$l=$savollar[0]['id'];

$son=$_POST['savollarsoni'];
$k=0;

   $count=count($savollar);
$SON=[];

echo "<pre>";
print_r($_POST['id']);
echo "</pre>";

for($x=1; $x<=$son; $x++){
    $savol=$_POST[$x];
    $A=$_POST[$x+$son];
    for($s=$l; $s<=($l+$count); $s++){
        foreach($data as $value){
            if($value[0]==$s){
                if($value[2]==$savol){
                   if($value[7]==$A){
                    $k++;
                   };
                }
            }
        }
    }
}



?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
<br><br><br>
  <form action="saqlash.php" method="POST">
    <input type="hidden" name="fan" value="<?= $fan ?>">
    <input type="hidden" name="id" value="<?= $id ?>">
    <input  type="hidden" name="natija" value="<?= $k ?>">
    <input  type="hidden" name="savol" value="<?= $son ?>">
    <center>
        <h1>Javoblaringiz bazaga yuborilsinmi</h1><br><br>
        
        <!-- <?php for($z=1; $z<=$son; $z++){ ?>
          <p><?= $z ?><?php echo " - "; ?><?= $SON[$z-1] ?></p>
          <?php } ?> -->
        <input type="submit" class="btn btn-success" value="Jonatish">
</center>

  </form>
  </form>
  </body>
</html>
