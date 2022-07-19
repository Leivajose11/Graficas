<?php

$error = array();

// Validaciones para los campos en el registro
$username = validate_input_text($_POST['username']);
if (empty($username)){
    $error[] = "Olvidaste ingresar el usuario";
}

$password = validate_input_text($_POST['password']);
if (empty($password)){
    $error[] = "Olvidaste ingresar la contraseña";
}

if(empty($error)){
    // Consulta sql
    $query = "SELECT userID, username, usertype, email, password, profileImage FROM user WHERE username=?";
    $q = mysqli_stmt_init($con);
    mysqli_stmt_prepare($q, $query);

  // variables Bind para prevenir una inyección de código SQL.
    mysqli_stmt_bind_param($q, 's', $username);
    //ejecucion del query
    mysqli_stmt_execute($q);

    $result = mysqli_stmt_get_result($q);

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    // Validacion que la contraseña coincida
    if (!empty($row)){
        // verify password
        if(password_verify($password, $row['password'])){
           if($row["usertype"]=="it")// validacion de tipo de usuario
    {   

        $_SESSION["username"]=$username;

        header("location:../index.php");
    }

    elseif($row["usertype"]=="supervisor")// validacion de tipo de usuario
    {

        $_SESSION["username"]=$username;
        
        header("location:../index.php");
    }
    elseif($row["usertype"]=="operador")// validacion de tipo de usuario
    {

        $_SESSION["username"]=$username;
        
        header("location:../indexuser.php");
    }
        }
    }else{
        print "Usted no esta registrado o no tiene permisos para acceder a esta pagina!";
    }

}else{
    echo "Por favor ingrese su correo y contraseña para ingresar!";
}



