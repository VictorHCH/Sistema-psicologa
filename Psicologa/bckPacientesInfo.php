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
        'usuario'                  => 'required|min:3|max:20',
    ]);
    if(!$validation->fails()){
        $usuario = $_POST['usuario'];
        $usuario = $db->real_escape_string($usuario);
        $query = "SELECT `id`, `numero_control`, `nombres`, `apellidos`, `curp`, `peso`, `estatura`, `fecha_alta`, `tipo_sangre` FROM `alumnos` WHERE alumnos.id = $usuario AND alumnos.id_psicologa = $_SESSION[id]";
        $resUsuario = $db->query($query);
        if($resUsuario){
            if($resUsuario->num_rows == 1){
                print_r($resUsuario);
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