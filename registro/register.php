<?php
    // header.php
    include ('header.php');
?>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            require ('register-process.php');
        }
    ?>
  <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=ISO-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon"  href="img/logo911.png">
    <title>Registro</title>


    <!-- registration area -->
    <section id="register">
        <div class="row m-0">
            <div class="col-lg-8 offset-lg-2">
                <div class="text-center pb-5">
                    <h1 class="login-title text-dark">Registrarse</h1>
                </div>
                <div class="upload-profile-image d-flex justify-content-center pb-5">
                    <div class="text-center">
                        <div class="d-flex justify-content-center">
                            <img class="camera-icon" src="./assets/camera-solid.svg" alt="camera">
                        </div>
                        <img src="./assets/profile/beard.png" style="width: 200px; height: 200px" class="img rounded-circle" alt="profile">
                        <small class="form-text text-black-50">Elegir Imagen</small>
                        <input type="file" form="reg-form" class="form-control-file" name="profileUpload" id="upload-profile">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <form action="register.php" method="post" enctype="multipart/form-data" id="reg-form" >
                        <div class="form-row">
                            <div class="col">
                                <input type="text" value="<?php if(isset($_POST['username'])) echo $_POST['username'];  ?>" name="username" id="username" class="form-control" placeholder="Usuario">
                            </div>

                            <div class="col">

                                <select type="text" value="<?php if(isset($_POST['usertype'])) echo $_POST['usertype'];  ?>" name="usertype" id="usertype" class="form-control" placeholder="Tipo de usuario">> 
                                    <option value="">Tipo de Usuario</option>
                                 <option value="it ">It </option>
                                  <option value="supervisor">Supervisor</option>
                                  <option value="operador">Operador</option>
                                    </select>
                                     
                            </div>
                        </div>

                        <div class="form-row my-4">
                            <div class="col">
                                <input type="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];  ?>" required name="email" id="email" class="form-control" placeholder="Email*">
                            </div>
                        </div>

                        <div class="form-row my-4">
                            <div class="col">
                                <input type="password" required name="password" id="password" class="form-control" placeholder="Contrasena*">
                            </div>
                        </div>

                        <div class="form-row my-4">
                            <div class="col">
                                <input type="password" required name="confirm_pwd" id="confirm_pwd" class="form-control" placeholder="Confirmar Contrasena*">
                                <small id="confirm_error" class="text-danger"></small>
                            </div>
                        </div>


                        <div class="submit-btn text-center my-5">
                            <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">Registrarse</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- #registration area -->


<?php
    // footer.php
    include ('footer.php');
?>