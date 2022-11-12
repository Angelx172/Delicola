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
        include "header.html"
    ?>
    <div class="container col-6" style="margin-top: 3vh; text-align: center;">
        <h3>Novedades</h3>
    </div>
    <div class="container col-6" style="margin-top: 3vh; text-align: center; margin-right: 25vh;">
        <div class="card" style="width: 18rem; border: solid 10px; border-color: #f753a4; border-radius: 5%;">
                <img src="sabor1.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Nuevo Sabor</h5>
                <p class="card-text">Refresco de Cola con gusto a Vainilla</p>
                <a href="#" class="btn btn-primary">Ordenar</a>
            </div>
        </div>
        
    </div>
    <br><br>
    <?php
        include "footer.html"
    ?>
</body>
</html>