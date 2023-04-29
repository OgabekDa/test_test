<?php
require_once '../../../controller/connect.php';

$sql = "SELECT * FROM `kitob`";
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
          <a class="nav-link active" href="#">Fanlar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="testlar.php">Testt qo'shish</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../testni-korish/test.php">Testlarni ko'rish</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../../user/royhat.php">Ro'yhatdn o'tkazish</a>
        </li>
      </ul>
    </div>
  </div>
</nav><br>
<center>
    <h1>Kitoblar bazasi</h1>
  </center>
    <!----------qo'shsish--------->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exa">
  Yangi kitob qo'shish
</button>

<!-- Modal -->
<div class="modal fade" id="exa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Kitob nomini kiriting</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="update.php" method="POST">
            <input type="text" name="kitob" class="form-control">
            
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Qo'shish">
      </div>
      </form>
    </div>
  </div>
</div>

  

    <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">O'chirish</th>
    </tr>
  </thead>
  <tbody>
    <?php $k=0;
    foreach($data as $key=>$value):
        if($value[5]==0):  ?>
    <tr>
      <th scope="row"><?= ++$k; ?></th>
      <td><?= $value[1] ?></td>
      <td>
        <!-- Deletede -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exa<?php echo $key; ?>">
  O'chirish
</button>

<!-- Modal -->
<div class="modal fade" id="exa<?php echo $key; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">O'chirish</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="delete.php" method="POST">
            <input type="hidden" name="id" value="<?= $value[0]; ?>">
            <h2>Ishonchingiz komilmi?</h2>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="HA">
      </div>
      </form>
    </div>
  </div>
</div>
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