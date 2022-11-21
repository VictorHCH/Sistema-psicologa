<?php 
session_start();
if(!isset($_SESSION['id'])){
    echo "No tienes permiso de estar aqui";
    http_response_code(401);
}
require('../vendor/autoload.php');
require_once('./privado/config.php');

use Rakit\Validation\Validator;
$validator = new Validator;
$validation = $validator->validate($_POST , [
    'numero_control'                  => 'required|min:8|max:8',
    'nombres'                  => 'required|min:3|max:50',
    'apellidos'                  => 'required|min:5|max:60',
    'curp'                  => 'required|min:18|max:18',
    'peso'                  => 'required|min:1|max:7',
    'estatura'                  => 'required|min:1|max:7',
    'fecha_alta'                  => 'required|date',
    'tipo_sangre'                  => 'required|digits_between:1,8',
]);

if( !$validation->fails() ){

    $numero_control = filter_input(INPUT_POST, 'numero_control');
    $nombres = filter_input(INPUT_POST, 'nombres');
    $apellidos = filter_input(INPUT_POST, 'apellidos');
    $curp = filter_input(INPUT_POST, 'curp');
    $peso = filter_input(INPUT_POST, 'peso');
    $estatura = filter_input(INPUT_POST, 'estatura');
    $fecha_alta = filter_input(INPUT_POST, 'fecha_alta');
    $tipo_sangre = filter_input(INPUT_POST, 'tipo_sangre');

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
    http_response_code(400);
    echo "error al enviar los datos";
}





?>