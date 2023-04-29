<?php
require_once '../../../controller/connect.php';

$sql = "SELECT * FROM `admin`";
$data = mysqli_query($connect, $sql);
$data = mysqli_fetch_all($data);

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
  <center>
    <h1>Loginni almashtirish markazi</h1>
  </center>
    <div class="container">
    <a href="../index.php">
            <button type="button" class="btn btn-danger">ORTGA</button>
    </a><br>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ism</th>
      <th scope="col">Login</th>
      <th scope="col">Parol</th>
      <th scope="col">O'zgartirish</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php $k=0;
        foreach($data as $key=>$value):
        ?>
      <th scope="row"><?php echo ++$k; ?></th>
      <td><?= $value[1]; ?></td>
      <td><?= $value[2]; ?></td>
      <td><?= $value[3]; ?></td>
      <td>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exa<?php echo $key; ?>">
  O'zgartirish
</button>

<!-- Modal -->
<div class="modal fade" id="exa<?php echo $key; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Ishonchingiz komilmi</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?= $value[0]; ?>">
            <input type="numebr" name="name" class="form-control" value="<?= $value[1]; ?>"><br>
            <input type="numebr" name="log" class="form-control" value="<?= $value[2]; ?>"><br>
            <input type="numebr" name="kod" class="form-control" value="<?= $value[3]; ?>"><br>
        
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Saqlash">
      </div>
      </form>
    </div>
  </div>
</div>
      </td>
      <?php endforeach; ?>
    </tr>
  </tbody>
</table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>