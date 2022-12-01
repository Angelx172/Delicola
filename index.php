<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos.css">
    
    <title>Document</title>
</head>
<body>
    <?php
        include "header.php"
    ?>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" >
  <div class="carousel-inner" style="max-height: 66vh;">
    <div class="carousel-item active"">
      <img src="70.jpg" class="d-block w-100" style="height: 66vh; alt="...">
    </div>
    <div class="carousel-item">
      <img src="colas.jpeg" class="d-block w-100" style="height: 66vh; alt="...">
    </div>
    <div class="carousel-item">
      <img src="hold.jpg" class="d-block w-100" style="height: 80vh; alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <?php
        include "footer.php"
    ?>
</body>
</html>