<?php 
session_start();
if(!isset($_SESSION['id'])){
    echo "No tienes permiso de estar aqui";
    http_response_code(401);
}
require_once('./privado/config.php');


$query = "SELECT consultas.id, DATE(`fecha`) AS fecha, fecha AS fecha_hora, `asistio`, alumno AS id_alumno, CONCAT( alumnos.nombres, ' ', alumnos.apellidos ) AS alumno FROM `consultas` INNER JOIN alumnos ON alumnos.id = consultas.alumno WHERE consultas.fecha >= NOW() AND id_usuario = 24 ORDER BY fecha ASC;";


$res = $db->query($query);

$lista = [];

try {
    //code...
    foreach ($res->fetch_all(MYSQLI_ASSOC) as $key => $value) {
        if (!array_key_exists($value['fecha'], $lista)) {
            $lista[$value['fecha']][] = $value;
        } else {
            array_push($lista[$value['fecha']], $value);
            // print_r($lista[$value['fecha']]);
        }
        # code...
    }
} catch (\Throwable $th) {
    //throw $th;
    echo $th->getMessage();
}
print_r($lista);
$res->free_result();
$db->close();


?>