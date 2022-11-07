<?php
$usuario = "root";
$pass = "";
$host = "127.0.0.1";
$base = "piscologa";

    //code...
    $db = new \MySqli($host, $usuario, $pass, $base);
    // $db = new mysqli($host, $usuario, $pass, $base );

if ($db->connect_error){
    echo "error :c";
}
?>
