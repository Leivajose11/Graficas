<?php

// define constant variables
define('data_base_conexion', 'estadisticas_db');
define('user_conexion', 'root');
define('pass_conexion', '');
define('host_conexion', 'localhost');

try{

    // connection variable
    $con = new mysqli(host_conexion, user_conexion, pass_conexion, data_base_conexion);

    // encoded language
    mysqli_set_charset($con, 'utf8');


}catch (Exception $ex){
    print "An Exception occurred. Message: " . $ex->getMessage();
} catch (Error $e){
    print "The system is busy please try later";
}