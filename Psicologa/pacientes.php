<?php 
session_start();
if(!isset($_SESSION['id'])){
    header("location: ./index.php");
    exit();
}
require_once("./privado/config.php");
require_once('./privado/componentes/pacientes-paciente.php');
$query = "SELECT `id`, `numero_control`, CONCAT(nombres, ' ', apellidos) as nombre_completo FROM `alumnos` WHERE id_psicologa = $_SESSION[id] ORDER BY apellidos ASC";
$alumnos = $db->query($query);


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
        <div class="Rectan">
            <a href="./Pacientes_new.php" class="Agregar-paciente">Agregar paciente</a>
        </div>
        <div class="contenedor-buscar">
            <input id="buscador" type="text" class="buscar" placeholder="Buscar paciente">
        </div>
        <div class="contenedor-pacientes" id="contenedor-pacientes">
            <?php
                foreach ($alumnos as $key => $alumno) {
                    # code...
                    componentePaciente($alumno['nombre_completo'], $alumno['id']);
                }
                $alumnos->free_result();
                $db->close();
            ?>
        </div>
    </div>
    <script src="./Recursos/js/buscador.js"></script>
</body>
</html> 