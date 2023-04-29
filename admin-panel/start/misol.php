<?php

require_once("../controller/connect.php");

$ssql="SELECT * FROM `test`";
$data=mysqli_query($connect, $ssql);
$data=mysqli_fetch_all($data);

$son=$_POST['misol'];
foreach($data as $value){
    if($value[1]==$_POST['fan']){
        $savol[]=[
          'savol'=>$value[2],
          'A'=>$value[3],
          'B'=>$value[4],
          'C'=>$value[5],
          'D'=>$value[6]
        ];
    }
}
$fannn=$_POST['fan'];


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
    <center>
    <h1>Boshlagan ishini oxiriga yetirish<br> haqiqiy mard insonning ishi</h1>
    </center><br><br>

    <div class="container">
        <?php $k=$_POST['misol'];
         
            if($value[1]==$_POST['fan']): 
            $savol_count=count($savol);
            $savol_n=[];
            $qwer=count($savol_n);

            while($son != $qwer){
                $p=array_rand($savol,1);
                $qw=$savol[$p];
                if(!in_array($qw,$savol_n)){
                    $savol_n[]=$qw;

                }
                $qwer=count($savol_n);

            }
           

            ?>
                
            <?php
            endif;
        ?>
        
        <form action="natija.php" method="POST">
<?php for($x=0; $x<=$son-1; $x++){  ?>
            <input type="hidden" name="savollarsoni" value="<?= $son ?>">
            <div class="col-md-4">
            <label for="va" class="form-label"><?= $x+1 ?> - savol</label>
            <input type="text" name="<?= $x+1 ?>" class="form-control" id="va" value="<?= $savol_n[$x]['savol'] ?>" required>
            
            </div><br>

            <?php 
            $jav=[
                'A'=>$savol_n[$x]['A'],
                'B'=>$savol_n[$x]['B'],
                'C'=>$savol_n[$x]['C'],
                'D'=>$savol_n[$x]['D'],
            ];
            $lenth_arr = count($jav);
            $new_arr = [];
            $lenth_new_arr = count($new_arr);

            while($lenth_arr != $lenth_new_arr){

                $w = array_rand($jav,1);
                $as=$jav[$w];
                if(!in_array($as,$new_arr)){
                    $new_arr[] = $as;
                }
            
                $lenth_new_arr = count($new_arr);
            }

             ?>

            <div class="input-group">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="<?= $x+$son+1 ?>" value="<?= $new_arr[0] ?>" required>
                </div>
                
                <div class="input-group-text">A</div>
                <input type="text" name="A" class="form-control" value="<?= $new_arr[0] ?>" id="validationCustom02va<?= 1 ?>"  required>
            </div><br>


            <div class="input-group">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="<?= $x+$son+1 ?>" value="<?= $new_arr[1] ?>" required>
                </div>
                
                <div class="input-group-text">B</div>
                <input type="text" name="B" class="form-control" value="<?= $new_arr[1] ?>" id="validationCustom02va<?= 1 ?>"  required>
            </div><br>

            <div class="input-group"> 
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="<?= $x+$son+1 ?>" value="<?= $new_arr[2] ?>" required>
                </div>
               
                <div class="input-group-text">C</div>
                <input type="text" name="C" class="form-control" value="<?= $new_arr[2] ?>" id="validationCustom02va<?= 1 ?>"  required>
            </div><br>

            <div class="input-group">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="<?= $x+$son+1 ?>" value="<?= $new_arr[3] ?>" required>
                </div>
            
                <div class="input-group-text">D</div>
                <input type="text" name="D" class="form-control" value="<?= $new_arr[3] ?>" id="validationCustom02va<?= 1 ?>"  required>
            </div><br>

            <?php } ?>
            <input type="hidden" name="sonnn" value="<?= $son ?>">
            <input type="hidden" name="fannn" value="<?= $fannn ?>">
            <center><input type="submit" value="Testni yakunlash" class="btn btn-primary"></center><br><br><br><br>
            
            
            </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>