<?php

session_start();//Reaunudamos la session que se creo para el usuario que es lo primero que reanuda el navegador
   if(!isset($_SESSION["username"])){

    header("location:login2.php");//tenemos que redirigir nuevamnete a la pagina de login.
  }
date_default_timezone_set ( 'America/Tegucigalpa' ) ;

$fecha=$_POST['fecha'];
$agente=$_POST['agente'];
$hora=date("h:i:s");
$Ticket=$_POST['incidentenumeroticket'];
$Fecha_Incidente=$_POST['Fecha_Incidente'];
$genero=$_POST['Sexo'];
$arma=$_POST['Arma'];
$incidentepuntoreferencia=$_POST['incidentepuntoreferencia'];
$incidentedescripciondireccion=$_POST['incidentedescripciondireccion'];
$incidentedescripcioncomplementaria=$_POST['incidentedescripcioncomplementaria'];
$incidentenotarespaldo=$_POST['incidentenotarespaldo'];
$incidenteobservacion=$_POST['incidenteobservacion'];

$incidentetipologia=$_POST['Tipo_Incidente'];
$incidentesubtipologia=$_POST['Sub_Tipo_Incidente'];
$incidentedepartamento=$_POST['Departamento'];
$incidentemunicipio=$_POST['Municipio'];
$incidetealdea=$_POST['Aldea_Cacerio'];
$incidentebarrio=$_POST['Barrio'];


     include("datosconexion.php");


  $conexion=mysqli_connect($host_conexion,$user_conexion,$pass_conexion);// estamos estableciendo conexion con la base de datos temenos qu etener cuiadado con la instruccion mysqli_connect tenemos que agreagr el i.

  if (mysqli_connect_errno()){

      echo "Fallo al conectar con la BBDD";

       exit();

     }
    mysqli_select_db($conexion,$data_base_conexion) or die ("No se encuentra la base de datos");
    mysqli_set_charset($conexion,"utf8");

     $sql= "INSERT INTO incidente ( incidentehoracreacion, incidentefechacreacion,  incidenteagente,incidentefechasuceso, incidentetipologia, incidentesubtipologia, incidentedepartamento, incidentemunicipio, incidetealdea, incidentebarrio, incidentenumeroticket, incidentegenero, incidentearma, incidentepuntoreferencia,  incidentedescripciondireccion,  incidentedescripcioncomplementaria,incidentenotarespaldo, incidenteobservacion) VALUES ('$hora' ,'$fecha', '$agente' , '$Fecha_Incidente',  
      '$incidentetipologia',  '$incidentesubtipologia', '$incidentedepartamento', '$incidentemunicipio', '$incidetealdea',  '$incidentebarrio', '$Ticket','$genero','$arma','$incidentepuntoreferencia','$incidentedescripciondireccion','$incidentedescripcioncomplementaria','$incidentenotarespaldo','$incidenteobservacion')"; 




    $resultado=mysqli_query($conexion, $sql);

    $_SESSION['id_incidente'] = mysqli_insert_id($conexion);
  

   // $resultadoID=mysqli_query($conexion,$sql2);

     mysqli_close($conexion);

    // if ($resultadoID==true) {
      // echo "Exito en la consulta";
    // }

    if ($resultado==false) {
       echo "Error en la consulta";


     }
      header("Location: views/datos.php#seccion2");





 ?>