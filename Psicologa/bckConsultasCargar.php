<?php 
if(isset($_SESSION['id'])){
    echo "No tienes permiso de estar aqui";
    exit(401); //No estoy seguro de utilizar este codigo xD
}
require_once('./privado/config.php');

// NOTA: agregar a consulta que se ordene por fecha ascendente

// $query = "SELECT consultas.id, DATE(`fecha`) AS fecha, fecha AS fecha_hora, `asistio`, alumno AS id_alumno, CONCAT(alumnos.nombres, ' ', alumnos.apellidos) AS alumno FROM `consultas` INNER JOIN alumnos ON alumnos.id = consultas.alumno WHERE consultas.fecha <= NOW() AND id_usuario = 24;"
$query = "SELECT consultas.id, DATE(`fecha`) AS fecha, fecha AS fecha_hora, `asistio`, alumno AS id_alumno, CONCAT(alumnos.nombres, ' ', alumnos.apellidos) AS alumno FROM `consultas` INNER JOIN alumnos ON alumnos.id = consultas.alumno WHERE consultas.fecha <= NOW() ";


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
echo "<br><br><br>";
print_r(array_keys($lista));


?>