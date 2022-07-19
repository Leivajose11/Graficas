<?php
   


date_default_timezone_set ( 'America/Tegucigalpa' ) ;

$unidaddepartamento=$_POST['unidaddepartamento'];
$unidad=$_POST['unidad'];
$id_incidente = $_POST['Id_Incidente'];
$unidadnota = $_POST['unidadnota'];



    include("datosconexion.php");


  $conexion=mysqli_connect($host_conexion,$user_conexion,$pass_conexion);// estamos estableciendo conexion con la base de datos temenos qu etener cuiadado con la instruccion mysqli_connect tenemos que agreagr el i.

if (mysqli_connect_errno()){

      echo "Fallo al conectar con la BBDD";

       exit();

     }
    mysqli_select_db($conexion,$data_base_conexion) or die ("No se encuentra la base de datos");
    mysqli_set_charset($conexion,"utf8");

     $sql= "INSERT INTO unidad (unidadnombre,unidaddepartamento,ID_INCIDENTE,unidadnota) VALUES ('$unidad','$unidaddepartamento','$id_incidente','$unidadnota')";
     
     //$sql="INSERT INTO `actividades`(`ID`, `HORA`, `DACTIVIDAD`, `FECHA`, `ID_USUARIO_PASS`) VALUES (3,'12','estamos','2020',2)"; 




    $resultado=mysqli_query($conexion, $sql);

  //  $resultadoID=mysqli_query($conexion,$sql2);

     mysqli_close($conexion);

     if ($resultadoID==true) {
       echo "Exito en la consulta";
     }

     if ($resultado==false) {
       echo "Error en la consulta";


     }


      header("Location: views/datos.php#seccion2");





 ?>