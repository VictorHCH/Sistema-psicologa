<?php 
session_start();
if(isset($_SESSION['id'])){
    header("location: ./citas.php");
}
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
    <div class="Vec">
        <img src="Recursos/Onda2.png">
        <span class="TecPsi2">TecPsi</span>
        <div class="Rectangle-1">
            <form action="./bckLogin.php" id="form-login">
                <label>Usuario</label>
                <br>
                <input class="entradasTexto marginLabel" type="text" id="usuario">
                <br>
                <label>Contraseña</label>
                <br>
                <input class="entradasTexto marginLabel" type="password" id="pass">
                <br>
                <input class="boton botonPrimario" type="submit" value="Iniciar sesión">
            </form>
        </div>
    </div>

    <script src="./Recursos/js/login.js"></script>
</body>
</html>