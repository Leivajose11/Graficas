<?php

$host_conexion = "localhost";
$data_base_conexion = "estadisticas_db";
$user_conexion = "root";
$pass_conexion = "";

try{
$db = new PDO('mysql:host='.$host_conexion.';dbname='.$data_base_conexion.'', $user_conexion, $pass_conexion);
} catch (PDOException $e) {
    echo 'Falló la conexión: RRHH conexion'; // . $e->getMessage();
}
?>

 