<?php
    session_start();
    if (!isset($_SESSION["id"])){
        header("location: index.php");
        exit("IDK");
    }
    require('../vendor/autoload.php');
    require_once("./privado/config.php");

    use Rakit\Validation\Validator;
    $validator = new Validator;
    $validation = $validator->validate($_GET, [
        'alumno'                  => 'required|numeric',
    ]);
    if(!$validation->fails()){
        $alumno = $_GET['alumno'];
        $alumno = $db->real_escape_string($alumno);
        $query = "SELECT `id`, `numero_control`, `nombres`, `apellidos`, `curp`, `peso`, `estatura`, `fecha_alta`, `tipo_sangre` FROM `alumnos` WHERE alumnos.id = $alumno AND alumnos.id_psicologa = $_SESSION[id]";
        $resUsuario = $db->query($query);
        if($resUsuario){
            if($resUsuario->num_rows == 1){
                print_r($resUsuario->fetch_assoc());
            }
            else{
                echo "Usuario no encontrado";
            }
        }
        else {
            echo "Error en consulta";
        }
        $resUsuario->free_result();
        $db->close();
    }
    else {
        http_response_code(400);
        echo "Parametros incompletos!";
    }
?>