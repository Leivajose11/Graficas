<?php

require ('helper.php');
// error variable.
$error = array();

$username = validate_input_text($_POST['username']);
if (empty($username)){
    $error[] = "Debe ingresar un nombre de usuario";
}


$email = validate_input_email($_POST['email']);
if (empty($email)){
    $error[] = "Debe ingresar su correo";
}


$password = validate_input_text($_POST['password']);
if (empty($password)){
    $error[] = "Debe ingresar una contraseña valida";
}

$confirm_pwd = validate_input_text($_POST['confirm_pwd']);
if (empty($confirm_pwd)){
    $error[] = "Las contraseñas no son iguales";
}

$usertype = validate_input_text($_POST['usertype']);
if (empty($usertype)){
    $error[] = "Seleccione un rol para el usuario";
}

$files = $_FILES['loginimagen'];
$loginimagen = upload_profile('./img/profile/', $files);

if(empty($error)){
    // register a new user
    $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
    require ('mysqli_connect.php');

    // make a query
    $query = "INSERT INTO login (id, username, email, password, usertype, loginimagen, loginfecha )";
    $query .= "VALUES(' ', ?, ?, ?, ?, ?, NOW())";

    // initialize a statement
    $q = mysqli_stmt_init($con);

    // prepare sql statement
    mysqli_stmt_prepare($q, $query);

    // bind values
    mysqli_stmt_bind_param($q, 'sssss', $username, $email, $hashed_pass, $usertype, $loginimagen);

    // execute statement
    mysqli_stmt_execute($q);

    if(mysqli_stmt_affected_rows($q) == 1){

        // start a new session
        session_start();

        // create session variable
        $_SESSION['userID'] = mysqli_insert_id($con);

        header('location: login.php');
        exit();
    }else{
        print "Error en el registro!";
    }

}else{
    echo 'not validate';
}


















