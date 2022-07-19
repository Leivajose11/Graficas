<link rel="stylesheet" href="css/master.css?n=1">
<?php

require ('helper.php');
// Variable que regrese un error
$error = array();

// Validaciones para los campos en el registro
$username = validate_input_text($_POST['username']);
if (empty($username)){
    $error[] = "Olvidaste ingresar tu nombre de usuario";
}

$usertype = validate_input_text($_POST['usertype']);
if (empty($usertype)){
    $error[] = "Olvidaste ingresar el tipo de usuario";
}

$password = validate_input_text($_POST['password']);
if (empty($password)){
    $error[] = "Olvidaste ingresar tu contraseña";
}

$confirm_pwd = validate_input_text($_POST['confirm_pwd']); 
if (empty($confirm_pwd)){
    $error[] = "Olvidaste confirmar tu contraseña";
}


if(empty($error)){
    // registrar un nuevo usuario 
    $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
    require ('mysqli_connect.php'); // conexion con la BD

    // Query de insersion 
    $query = "INSERT INTO user (userID, username, usertype, password, registerDate )";
    $query .= "VALUES(' ', ?, ?, ?, NOW())";

    // Iniciar una declaracion
    $q = mysqli_stmt_init($con);

    // Preparar una declaracion 
    mysqli_stmt_prepare($q, $query);

    // variables Bind para prevenir una inyección de código SQL.
    mysqli_stmt_bind_param($q, 'sss', $username, $usertype, $hashed_pass);

    // Se ejecuta la declaracion
    mysqli_stmt_execute($q);

    if(mysqli_stmt_affected_rows($q) == 1){

        // Se inicia la nueva sesion
        session_start();

        // se crea la variable de sesion con el id
        $_SESSION['userID'] = mysqli_insert_id($con);

        header('location: login.php'); // Redirige a esta ubicacion
        exit();
    }else{
        print "Error en el registro...!"; // Mensaje de error a la hora del registro
    }

}else{
    echo 'No valido';
}