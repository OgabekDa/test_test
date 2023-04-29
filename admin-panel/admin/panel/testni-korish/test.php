<?php

require_once("../../../controller/connect.php");
$sql="SELECT * FROM `test`";
$data=mysqli_query($connect, $sql);
$data =mysqli_fetch_all($data);

$sql1="SELECT * FROM `kitob`";
$data1=mysqli_query($connect, $sql1);
$data1 =mysqli_fetch_all($data1);


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
   <div class="container">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="../../../../index.php">Bosh sahifa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../royhatdan_otganlar.php">Talabalar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../fan-test/fan-update.php">Fanlar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../fan-test/testlar.php">Testt qo'shish</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../testni-korish/test.php">Testlarni ko'rish</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../../user/royhat.php">Ro'yhatdn o'tkazish</a>
        </li>
      </ul>
    </div>
  </div>
</nav><br>
  <table class="table">
  <center>
    <h1>Testlar bazasi</h1><br>
    </center>
    <form action="test-t.php" method="POST">
        <select class="form-select form-select-lg mb-3" name="fan" aria-label=".form-select-lg example" required>
            <option selected>Fanni boyicha korish</option>
            <?php
            foreach($data1 as $key=>$value):
             ?>
            <option value="<?= $value[0] ?>"><?= $value[1] ?></option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="Fan boyicha ko'rish" class="btn btn-primary">
    </form>

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Fan</th>
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
    foreach($data as $key=>$value): ?>
    <tr>
      <th scope="row"><?php echo ++$k; ?></th>
      <td><?= $value[1] ?></td>
      <td><?= $value[2] ?></td>
      <td><?= $value[3] ?></td>
      <td><?= $value[4] ?></td>
      <td><?= $value[5] ?></td>
      <td><?= $value[6] ?></td>
      <td><?= $value[7] ?></td>
      <td> <!-- Button trigger modal -->
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
            <input type="hidden" name="test" value="1">
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
</div> </td>
      <td>
      <form action="delete.php" method="POST">
        <input type="hidden" name="ids" value="<?= $value[0] ?>">
        <input type="hidden" name="test" value="1">
        <input type="submit"class="btn btn-danger btn-danger-rgb" value="O'chirish">
        </form>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>