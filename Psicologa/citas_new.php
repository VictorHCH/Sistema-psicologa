<?php 
session_start();
if(!isset($_SESSION['id'])){
    header("location: ./index.php");
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
<body class="c">
    <div class="Vector">
        <img src="Recursos/Onda3.png">
        <span class="TecPsi3">TecPsi</span>
        <span class="Citas">Citas</span>
        <span class="Pacientes">Pacientes</span>
        <div class="Cerrar"><img src="Recursos/Cerrar sesión.png"></div>
    </div>
    <div class="Agenda">
        <div class="Rectangle-12">
            <form action="">
                <label>Paciente</label>
                <br>
                <input class="entradasTexto marginLabel" list="pac">
                <br>
                <label>Fecha</label>
                <br>
                <input class="entradasTexto marginLabel" type="date">
                <br>
                <label>Hora</label>
                <br>
                <input class="entradasTexto marginLabel" type="time">
                <br>
                <input class="boton botonPrimario" type="submit" value="Agregar cita">
            </form>
        </div>
    </div>
    <datalist id="pac">
        <option value="1"></option>
        <option value="2"></option>
    </datalist>
</body>
</html>