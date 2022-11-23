<?php 
session_start();
if(!isset($_SESSION['id'])){
    header("location: ./index.php");
    exit();
}
require_once('./privado/config.php');
require('./privado/componentes/citas-pacientes.php');
$query = "SELECT consultas.id, DATE(`fecha`) AS fecha, fecha AS fecha_hora, `asistio`, alumno AS id_alumno, CONCAT( alumnos.nombres, ' ', alumnos.apellidos ) AS alumno FROM `consultas` INNER JOIN alumnos ON alumnos.id = consultas.alumno WHERE consultas.fecha >= NOW() AND id_usuario = $_SESSION[id] ORDER BY fecha ASC";

$res = $db->query($query);

$lista = [];

if ($res->num_rows > 0) {
    # code...
    foreach ($res->fetch_all(MYSQLI_ASSOC) as $key => $value) {
        if (!array_key_exists($value['fecha'], $lista)) {
            $lista[$value['fecha']][] = $value;
        } else {
            array_push($lista[$value['fecha']], $value);
            // print_r($lista[$value['fecha']]);
        }
        # code...
    }
}
$fechas = array_keys($lista);
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
        <!-- <div class="Rectangle"> -->
            <!-- <a href="./citas_new.php" class=" boton botonPrimario">Agregar cita</a> -->
        <!-- </div> -->
        <?php
            foreach ($lista as $key => $fechaArreglo) { 
        ?>
                <span class="Dia "><?= $key  ?></span>
                <div class="contenedorHorizontal">
                    <?php
                        foreach ($fechaArreglo as $key2 => $info) {
                            componenteCita($info['alumno'], 22, $info['fecha_hora']);
                        }
                    ?>
                </div> 
        <?php
            }    
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/luxon@3.1.0/build/global/luxon.min.js"></script>
    <script src="./Recursos/js/citas.js"></script>
</body>
</html>