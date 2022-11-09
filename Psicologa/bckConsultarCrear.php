<?php 
if(!isset($_SESSION['id'])){
    echo "No tienes permiso de estar aqui";
    exit(401); //No estoy seguro de utilizar este codigo xD
}
require_once('./privado/config.php');
$fecha = filter_input(INPUT_POST, 'fecha');
$alumno = filter_input(INPUT_POST, 'alumno');


if( strlen($fecha) == 10 && is_numeric($alumno) ){

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
    echo "error al enviar los datos";
}





?>