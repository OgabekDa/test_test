<?php 
require_once("../../../controller/connect.php");

$sql="SELECT * FROM `kitob`";
$data=mysqli_query($connect, $sql);
$data=mysqli_fetch_all($data);


$sql1="SELECT * FROM `test`";
$data1=mysqli_query($connect, $sql1);
$data1=mysqli_fetch_all($data1);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body><br><br>
   <?php

   foreach($data as $val):
   if($val[0]==$_POST['fan']):
   $n=$val[1];
 
?>
<div class="container">
    <center>
        <h2><?= $val[1] ?></h2><br>
        <a href="../index.php">
            <button type="button" class="btn btn-danger">ORTGA</button>
        </a><br><br>
    </center>
    <?php endif;
    endforeach; ?>
<table class="table">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">fan</th>
      <th scope="col">Savol</th>
      <th scope="col">A</th>
      <th scope="col">B</th>
      <th scope="col">C</th>
      <th scope="col">D</th>
      <th scope="col">Javob</th>
      <th scope="col">O'zgartirish</th>
      <th scope="col">O'chirish</th>
    </tr>
  </thead>
  <tbody>
    <?php $k=0;
    foreach($data1 as $value):
    if($value[1]==$n): 
     ?>
    <tr>
      <th scope="row"><?php echo ++$k; ?></th>
      <td><?= $value[1] ?></td>
      <td><?= $value[2] ?></td>
      <td><?= $value[3] ?></td>
      <td><?= $value[4] ?></td>
      <td><?= $value[5] ?></td>
      <td><?= $value[6] ?></td>
      <td><?= $value[7] ?></td>
      <td>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exa<?php echo $key; ?>">
  Update
</button>

<!-- Modal -->
<div class="modal fade" id="exa<?php echo $key; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?= $value[0]; ?>">
            <input type="hidden" name="test" value="2">
            <label for="fan">Fan</label>
            <input type="text" class="form-control" id="fan" name="fan" value="<?= $value[1]; ?>">
            <label for="savol">Savol</label>
            <input type="text" class="form-control" id="savol" name="savol" value="<?= $value[2]; ?>">
            <label for="A">A</label>
            <input type="text" class="form-control" id="A" name="A" value="<?= $value[3]; ?>">
            <label for="B">B</label>
            <input type="text" class="form-control" id="B" name="B" value="<?= $value[4]; ?>">
            <label for="C">C</label>
            <input type="text" class="form-control" id="C" name="C" value="<?= $value[5]; ?>">
            <label for="D">D</label>
            <input type="text" class="form-control" id="D" name="D" value="<?= $value[6]; ?>">
            <label for="javob">Togri javob</label>
            <input type="text" class="form-control" id="javob" name="javob" value="<?= $value[7]; ?>">
        
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Saqlash">
      </div>
      </form>
    </div>
  </div>
</div>
      </td>
      <td>
      <form action="delete.php" method="POST">
        <input type="hidden" name="ids" value="<?= $value[0] ?>">
        <input type="hidden" name="test" value="2">
        <input type="submit"class="btn btn-danger btn-danger-rgb" value="O'chirish">
        </form>
      </td>
    </tr>
    <?php endif;
endforeach; ?>
  </tbody>
</table>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>

