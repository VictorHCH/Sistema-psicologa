<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="estilo.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="Vector">
        <img src="Recursos/Onda.png">
        <span class="TecPsi">TecPsi</span>
        <?php 
            if (!isset($_SESSION["id"])) {
                ?>
                <a href="./inicio_sesion.php" class="Iniciar-sesin">Iniciar sesión</a>
                <?php
            } else {
                ?>
                <a href="./citas.php" class="Iniciar-sesin">Continuar</a>
                <?php
            }
            
        ?>
        
    </div>
    <span class="Bienvenido">¡Bienvenido!</span>
    <div class="Imagen"><img src="Recursos/Imagen.png"></div>
</body>
</html>