<?php 
session_start();
if(isset($_SESSION['id'])){
    exit("sesion ya inciada");
}
require('../vendor/autoload.php');
require_once('./privado/config.php');

use Rakit\Validation\Validator;
$validator = new Validator;
$validation = $validator->validate($_POST , [
    'usuario'                  => 'required|min:3|max:25',
    'nombre'                  => 'required|min:5|max:100',
    'pass'                  => 'required|min:8|max:50',
]);

if (!$validation->fails()){
    $usuario = filter_input(INPUT_POST, 'usuario');
    $nombre = filter_input(INPUT_POST, 'nombre');
    $pass = $_POST['pass'];
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
    http_response_code(400);
    echo "Error al introducir parametros";
}

?>