<?php
require_once("../../../controller/connect.php");

$sql="SELECT * FROM `kitob`";
$data=mysqli_query($connect, $sql);
$data=mysqli_fetch_all($data);
$q=0;

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
    <a class="navbar-brand" href="../../../index.php">Bosh sahifa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../royhatdan_otganlar.php">Talabalar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="fan-update.php">Fanlar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page"  href="#">Testt qo'shish</a>
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
    <h1>Test Qo'shish</h1><br>
</center>  
        <form action="test-saqlash.php" method="POST">
        <select class="form-select form-select-lg mb-3" name="fan" aria-label=".form-select-lg example" required>
            <option selected>Fanni tanlang</option>
            <?php
            foreach($data as $key=>$value):
             ?>
            <option value="<?= $value[0] ?>"><?= $value[1] ?></option>
            <?php endforeach; ?>
        </select>
        
        <hr><br>
        
        
        
        
        <div class="col-md-4">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Savolni kiriting</label>
                <textarea class="form-control" name="savol" id="exampleFormControlTextarea1" rows="3" required></textarea>
            </div>
            <div class="input-group">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="AJ">
                </div>
                <div class="input-group-text">A</div>
                <input type="text" name="A" class="form-control" id="validationCustom02"  required>
            </div><br>
            <div class="input-group">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="BJ">
                </div>
                <div class="input-group-text">B</div>
                <input type="text" name="B" class="form-control" id="validationCustom02"  required>
            </div><br>
            <div class="input-group">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="CJ">
                </div>
                <div class="input-group-text">C</div>
                <input type="text" name="C" class="form-control" id="validationCustom02"  required>
            </div><br>
            <div class="input-group">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="DJ">
                </div>
                <div class="input-group-text">D</div>
                <input type="text" name="D" class="form-control" id="validationCustom02"  required>
            </div>
        </div><br>
        
        
        <input type="submit" class="btn btn-success" value="Bazaga saqlash">
        </form>
    
        
        <!-- <form action="testlar.php"; method="method">
            <input type="hidden" name="son" value='1'>
            <h2><input type="submit" class="btn btn-primary" value=" + "><h2>
        </form> -->
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>


