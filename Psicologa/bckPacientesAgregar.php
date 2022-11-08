<?php 
if(!isset($_SESSION['id'])){
    echo "No tienes permiso de estar aqui";
    exit(401); //No estoy seguro de utilizar este codigo xD
}
require_once('./privado/config.php');
$numero_control = filter_input(INPUT_POST, 'numero_control');
$nombres = filter_input(INPUT_POST, 'nombres');
$apellidos = filter_input(INPUT_POST, 'apellidos');
$curp = filter_input(INPUT_POST, 'curp');
$peso = filter_input(INPUT_POST, 'peso');
$estatura = filter_input(INPUT_POST, 'estatura');
$fecha_alta = filter_input(INPUT_POST, 'fecha_alta');
$tipo_sangre = filter_input(INPUT_POST, 'tipo_sangre');

if( strlen($numero_control) == 8 && strlen($nombres) > 3 && strlen($apellidos) > 3 &&
strlen($curp) == 18 && strlen($peso) > 1 && strlen($estatura) > 1 && strlen($tipo_sangre) == 1 ){

    $numero_control = $db->real_escape_string($numero_control);
    $nombres = $db->real_escape_string($nombres);
    $apellidos = $db->real_escape_string($apellidos);
    $curp = $db->real_escape_string($curp);
    $peso = $db->real_escape_string($peso);
    $estatura = $db->real_escape_string($estatura);
    $fecha_alta = $db->real_escape_string($fecha_alta);
    $tipo_sangre = $db->real_escape_string($tipo_sangre);

    
    $query = "INSERT INTO `alumnos`( `numero_control`, `nombres`, `apellidos`, `curp`, `peso`, `estatura`, `fecha_alta`, `tipo_sangre`) VALUES
    ('$numero_control','$nombres','$apellidos','$curp','$peso','$estatura','$fecha_alta','$tipo_sangre')";

    try {
        $res = $db->query($query);
        if ($res){
            echo "usuario agregado correctamente";
        }
        //code...
    } catch (\Throwable $th) {
        //throw $th;
        echo "ocurrio un error";
    }
    
    $db->close();
}
else {
    echo "error al enviar los datos";
}





?>