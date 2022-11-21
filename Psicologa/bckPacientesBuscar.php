<?php
    session_start();
    if (!isset($_SESSION["id"])){
        http_response_code(401);
        exit("No tienes permiso de estar aqui");
    }
    require('../vendor/autoload.php');
    require_once("./privado/config.php");

    use Rakit\Validation\Validator;
    $validator = new Validator;
    $validation = $validator->validate($_POST, [
        'consulta'                  => 'required|min:2|max:50',
    ]);
    if(!$validation->fails()){
        $consulta = $_POST['consulta'];
        $consulta = $db->real_escape_string($consulta);

        $query = "SELECT `id`, `numero_control`, CONCAT(nombres, ' ', apellidos) AS nombre_completo, `curp`, `peso`, `estatura`, `fecha_alta`, `tipo_sangre`, `id_psicologa` FROM `alumnos` WHERE id_psicologa = $_SESSION[id] AND( CONCAT(`nombres`, ' ', `apellidos`) LIKE '%$consulta%' OR numero_control LIKE '$consulta%')";
        
        $resUsuarios = $db->query($query);
        if($resUsuarios){
            if($resUsuarios->num_rows >= 0){
                $res = array();
                foreach ($resUsuarios->fetch_all(MYSQLI_ASSOC) as $key => $value) {
                    // Aqui se agregar cada uno de los renglos de resultado a un arreglo que se transformara a JSON
                    $res[] = $value;
                }
                echo(json_encode($res));
            }
            else{
                http_response_code(204);
            }
        }
        else {
            http_response_code(500);
            echo "Error en consulta";
        }
        $resUsuarios->free_result();
        $db->close();
    }
    else {
        http_response_code(400);
        echo "Parametros incompletos!";
    }
?>