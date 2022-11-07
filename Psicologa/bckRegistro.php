<?php 
session_start();
if(isset($_SESSION['id'])){
    exit("sesion ya inciada");
}
require_once('./privado/config.php');
$usuario = filter_input(INPUT_POST, 'usuario');
$nombre = filter_input(INPUT_POST, 'nombre');
$pass = $_POST['pass'];

if (strlen($usuario) > 2 && strlen($nombre > 4) && strlen($pass) > 7){
    $usuario = $db->real_escape_string($usuario);
    $nombre = $db->real_escape_string($nombre);
    $pass = password_hash($pass, PASSWORD_BCRYPT);
    $query = "INSERT INTO `usuarios`(`usuario`, `pass`, `nombre`) VALUES ('$usuario','$pass','$nombre')";
    try{
        $res = $db->query($query);
        if($res == true){
            echo "Usuario registrado";
        }
    }
    catch (\mysqli_sql_exception $th) {
        //throw $th;
        if($th->getCode() == 1062){
            echo "Este usuario ya esta registrado";
        }
        else {
            echo "Ocurrio un error inesperado";
        }
        
    }
    $db->close();
}
else{
    echo "Error al introducir parametros";
}

?>