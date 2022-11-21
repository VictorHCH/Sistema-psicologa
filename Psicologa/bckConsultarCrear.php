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
    'fecha'                  => 'required|date',
    'alumno'                  => 'required|numeric',
]);



if( !$validation->fails() ){

    $fecha = filter_input(INPUT_POST, 'fecha');
    $alumno = filter_input(INPUT_POST, 'alumno');

    $fecha = $db->real_escape_string($fecha);
    $alumno = $db->real_escape_string($alumno);
    
    $query = "INSERT INTO `consultas`(`fecha`, `alumno`, `id_usuario`) VALUES
    ('$fecha','$alumno','$_SESSION[id]')";

    try {
        $res = $db->query($query);
        if ($res){
            echo "Consulta registrada correctamente";
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