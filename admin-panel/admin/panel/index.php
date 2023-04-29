<?php
require_once '../../controller/connect.php';

$sql = "SELECT * FROM `admin`";
$data = mysqli_query($connect, $sql);
$data = mysqli_fetch_all($data);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin-paneli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div clss="container">
        <center>
    <h1>Assalomu aleyku <?= $data[0][1] ?></h1><br>
    <a href="../../../index.php">
            <button type="button" class="btn btn-danger">ORTGA</button>
    </a>
        </center>
        
        
        <a href="loginni-almashtirish/login.php">
            <button type="button" class="btn btn-rgb">...</button>
        </a><br>
        
<center>
        <a href="fan-test/fan-update.php">
            <button type="button" class="btn btn-success"><h3>Fanlar</h3></button>
        </a>
        <a href="fan-test/testlar.php">
            <button type="button" class="btn btn-primary"><h3>Test qo'shish</h3></button>
        </a>    
        <a href="testni-korish/test.php">
            <button type="button" class="btn btn-primary"><h3>Testlarni ko'rish</h3></button>
        </a>     
</center> 
<br><br>
<center>
        <a href="../../user/royhat.php">
          <button type="button" class="btn btn-primary"><h3>Royhatdan otkazish</h3></button>
        </a>
</center>        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>