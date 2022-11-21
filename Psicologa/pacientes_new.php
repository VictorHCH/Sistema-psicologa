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
        <div class="Rectangle-123">
            <form action="">
                <label>Nombre</label>
                <br>
                <input type="text">
                <br>
                <label>Número de control</label>
                <br>
                <input type="number">
                <br>
                <label>Edad</label>
                <br>
                <input type="number">
                <br>
                <label>Fecha de nacimiento</label>
                <br>
                <input type="date">
                <br>
                <label>Sexo</label>
                <br>
                <input list="sexo">
                <br>
                <label>Número de teléfono</label>
                <br>
                <input type="number">
                <br>
                <label>Fecha de ingreso</label>
                <br>
                <input type="date">
                <br>
                <label>Motivo de consulta</label>
                <br>
                <input type="text">
                <br>
                <input type="submit" value="Agregar paciente">
            </form>
        </div>
    </div>
    <datalist id="sexo">
        <option value="Masculino"></option>
        <option value="Femenino"></option>
    </datalist>
</body>
</html>