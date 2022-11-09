<?php
    session_start();
    if (isset($_SESSION["id"])){
        header("location: index.php");
        exit("IDK");
    }
    require_once("./privado/config.php");
    $usuario = filter_input(INPUT_POST, "usuario");
    $pass = $_POST['pass'];

    if(strlen($usuario) > 2 && strlen($pass) > 7){
        $usuario = $db->real_escape_string($usuario);
        $query = "SELECT * FROM `usuarios` WHERE `usuario` = '$usuario'";
        $resUsuario = $db->query($query);
        if($resUsuario){
            if($resUsuario->num_rows == 1){
                $info = $resUsuario->fetch_assoc();
                if ($info["puede_entrar"] == 0){
                    echo "Este usuario no tiene permiso de accesar";
                }
                else if(password_verify($pass, $info["pass"])){
                    echo "Sesion iniciada";
                    $_SESSION["id"] = $info["id"];
                    // header("location: index.php");
                }
                else {
                    echo "Contraseña incorrecta!";
                }
            }
            else{
                echo "Este usuario no existe!";
            }
        }
        else {
            echo "Error en consulta";
        }
        $resUsuario->free_result();
        $db->close();
    }
    else {
        echo "Parametros incompletos!";
    }
?>