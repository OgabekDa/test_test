
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

    <a href="../../index.php">
      <button type="button" class="btn btn-danger">ORTGA</button>
    </a><br><br>

    <form action="kirish-saqlash.php" method="POST" class="was-validated">
  
  <div class="mb-3">
    <label for="validationTextar" class="form-label">Email</label>
    <input type="text" name="email" class="form-control" id="validationTextar" required>
    
  </div>


  <div class="mb-3">
    <label for="validationTextarea" class="form-label">Password</label>
    <input type="password" name="kod" class="form-control" id="validationTextar" required>
    
  </div>
  

  <div class="mb-3">
    <button class="btn btn-primary" type="submit" >Saqlash</button>
  </div>
  
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>