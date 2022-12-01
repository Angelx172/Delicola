<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos.css">
    <title>Promociones</title>
</head>
<body>
    <?php 
        include "header.php";
        require_once("clases/clase_producto.php");

        $clase=new Producto();
        $registros=$clase->mostrar();
    ?>
    <br>
 
 <div class="container">

 		<?php 
 			while ($fila=mysqli_fetch_array($registros)) {
 		?>
 			<div class="card">
 		 		<div><img src="img/<?=$fila["imagen"]?>"></div><br>
 		 		<div class=""><label for=""><?=$fila["nombre"]?></label></div>
                <div class=""><label for=""><?=$fila["descripcion"]?></label></div>
                <br>
 		 	</div>
 		<?php 
			}
 		?>
 </div><br>

 <?php
        include "footer.php"
 ?>
</body>
</html>
