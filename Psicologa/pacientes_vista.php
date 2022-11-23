<?php 
session_start();
if(!isset($_SESSION['id'])){
    header("location: ./index.php");
    exit();
}
require("../vendor/autoload.php");
require_once("./privado/config.php");

use Rakit\Validation\Validator;
$validator = new Validator;
$validation = $validator->validate($_GET , [
    'alumno'                  => 'required|numeric',
]);

if($validation -> fails()){
    http_response_code(400);
    header("location: ./citas.php");
    exit();
}
try {
    //code...
    $alumno = filter_input(INPUT_GET, 'alumno');
    $query = "SELECT alumnos.id, `numero_control`, CONCAT(`nombres`, ' ', `apellidos`) AS nombre_completo, `curp`, `peso`, `estatura`, `fecha_alta`, tipos_sangre.nombre AS tipo_sangre FROM `alumnos` INNER JOIN tipos_sangre ON tipos_sangre.id = alumnos.tipo_sangre WHERE alumnos.id = $alumno AND alumnos.id_psicologa = $_SESSION[id]";
    $peticion = $db->query($query);
} catch (\Throwable $th) {
    //throw $th;
    http_response_code(500);
    header("location: ./citas.php");
    exit();
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
        <div class="Rectangle-31">

            <?php 
                if ($peticion->num_rows == 1) {
                    $datos = $peticion->fetch_assoc();
                } else {
                    echo "Usuario no encontrado";
                }
                
            ?>
            <div class="contenedor">
            <!-- <div class="Ellipse-7">
                <span class="ini">YC</span>
            </div> -->
            <span class="Nombre-pa"><?= $datos['nombre_completo'] ?></span>
            <span class="label1">Número de control</span>
            <br>
            <span class="nc"><?= $datos['numero_control'] ?> </span>
            <br>
            <!-- <span class="label2">Edad</span>
            <br>
            <span class="edad">21 años</span>
            <br>
            <span class="label3">Fecha de nacimiento</span>
            <br>
            <span class="fn">3 de marzo de 2001</span>
            <br> -->
            <span class="label4">Sexo</span>
            <br>
            <span class="s"><?= $retVal = (substr($datos['curp'], 10, 1) == 'H') ? "Masculino" : "Femenino" ; ?></span>
            <br>
            <!-- <span class="label5">Número de teléfono</span>
            <br>
            <span class="telefono">625212603</span>
            <br> -->
            <span class="label6">Fecha de ingreso</span>
            <br>
            <span class="fi"><?= $datos['fecha_alta'] ?></span>
            <br>
            <br>
            <button class="b1 boton botonPrimario">Agregar anotación</button>
            <br>
            <button class="b1 boton botonSecundarios" id="mostrar" >Crear cita</button>
            <!-- <button class="b2">Editar paciente</button> -->

            <form action="post" hidden id="formulario">
                <input class="entradasTexto" type="datetime" name="fecha" id="">
                <input type="hidden" name="alumno" value="<?= $_GET['alumno'] ?>">
                <input class="entradasTexto" type="submit" value="Crear cita">
            </form>
            </div>

        </div>
    </div>
    <?php 
        $peticion->free_result();
        $db->close();
    ?>
    <script src="./Recursos/js/alumno.js"></script>
</body>
</html>