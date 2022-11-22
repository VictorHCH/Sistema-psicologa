<?php
    session_start();
    if (isset($_SESSION["id"])){
        header("location: index.php");
        exit("IDK");
    }
    require('../vendor/autoload.php');
    require_once("./privado/config.php");

    use Rakit\Validation\Validator;
    $validator = new Validator;
    $validation = $validator->validate($_POST , [
        'usuario'                  => 'required|min:3|max:20',
        'pass'                  => 'required|min:8|max:50',
    ]);
    if(!$validation->fails()){
        $usuario = filter_input(INPUT_POST, "usuario");
        $pass = $_POST['pass'];
        $usuario = $db->real_escape_string($usuario);
        $query = "SELECT * FROM `usuarios` WHERE `usuario` = '$usuario'";
        $resUsuario = $db->query($query);
        if($resUsuario){
            if($resUsuario->num_rows == 1){
                $info = $resUsuario->fetch_assoc();
                if ($info["puede_entrar"] == 0){
                    http_response_code(401);
                    echo "Este usuario no tiene permiso de accesar";
                }
                else if(password_verify($pass, $info["pass"])){
                    echo "Sesion iniciada";
                    $_SESSION["id"] = $info["id"];
                    header("location: citas.html");
                }
                else {
                    http_response_code(403);
                    echo "Contraseña incorrecta!";
                }
            }
            else{
                http_response_code(403);
                echo "Este usuario no existe!";
            }
        }
        else {
            http_response_code(500);
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