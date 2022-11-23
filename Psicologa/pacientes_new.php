<?php 
session_start();
if(!isset($_SESSION['id'])){
    header("location: ./index.php");
    exit();
}
require_once("./privado/config.php");
require_once('./privado/componentes/cabecera.php');
$query = "SELECT `id`, `nombre` FROM `tipos_sangre`";
$tipos_sangre = $db->query($query);
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
    <?php cabecera(); ?>
    <div class="Agenda">
        <div class="Rectangle-123" style="display: flex; justify-content: center ;">
            <form action="" id="formulario">
                <label>Nombre(s)</label>
                <br>
                <input requiered class="entradasTexto marginLabel" name="nombres" type="text">
                <br>
                <label>Apellido(s)</label>
                <br>
                <input requiered class="entradasTexto marginLabel" name="apellidos" type="text">
                <br>
                <label>Número de control</label>
                <br>
                <input requiered class="entradasTexto marginLabel" name="numero_control" type="text">
                <br>
                <label>Curp</label>
                <br>
                <input requiered class="entradasTexto marginLabel" name="curp" type="text">
                <br>
                <label>Peso</label>
                <br>
                <input requiered class="entradasTexto marginLabel" name="peso" type="text">
                <br>
                <label>Estatura</label>
                <br>
                <input requiered class="entradasTexto marginLabel" name="estatura" type="text">
                <br>
                <label>Tipo sangre</label>
                <br>
                <select required class="entradasTexto marginLabel" name="tipo_sangre" type="number">
                    <?php 
                        foreach ($tipos_sangre as $key => $value) {
                            # code...
                            echo "<option value='$value[id]'>$value[nombre]</option>";
                        }
                        $tipos_sangre->free_result();
                        $db->close();
                    ?>
                </select>
                <br>
                <label>Fecha de ingreso</label>
                <br>
                <input requiered class="entradasTexto marginLabel" type="date" name="fecha_alta" >
                <br>
                <input class="boton botonPrimario" type="submit" value="Agregar paciente">
            </form>
        </div>
    </div>
    <datalist id="sexo">
        <option value="Masculino"></option>
        <option value="Femenino"></option>
    </datalist>
    <script src="./Recursos/js/nuevoPaciente.js"></script>
</body>
</html>