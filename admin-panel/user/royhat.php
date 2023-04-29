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
          <a class="nav-link" href="#">Talabalar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../admin/panel/fan-test//fan-update.php">Fanlar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page"  href="../admin/panel/fan-test/testlar.php">Testt qo'shish</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../panel/testni-korish/test.php">Testlarni ko'rish</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Ro'yhatdn o'tkazish</a>
        </li>
      </ul>
    </div>
  </div>
</nav><br>


    <a href="../admin/panel/index.php">
<button type="button" class="btn btn-danger">ORTGA</button>
</a><br><br>

    <form action="royhat-saqlash.php" method="POST" class="was-validated">
  
  <div class="mb-3">
    <label for="validationTextar" class="form-label">Email</label>
    <input type="text" name="email" class="form-control" id="validationTextar" required> 
  </div>

  <div class="mb-3">
    <label for="validationTextarea" class="form-label">Isim</label>
    <input type="text" name="name" class="form-control" id="validationTextar" required>  
  </div>
  
  <div class="mb-3">
    <label for="validationTextarea" class="form-label">Parol</label>
    <input type="password" name="kod" class="form-control" id="validationTextar" required>  
  </div>
  

  <div class="mb-3">
    <button class="btn btn-primary" type="submit" >Saqlash</button>
  </div>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>