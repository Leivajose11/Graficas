<?php 

 
// session_start();
 // if (!isset($_SESSION["usuario"])) {
 //   header("location:login2.php");
 // }

  $usuario = $_SESSION["username"];
  $id_incidente=$_SESSION["id_incidente"];


include("datosconexion.php");


  $conexion=mysqli_connect($host_conexion,$user_conexion,$pass_conexion);// estamos estableciendo conexion con la base de datos temenos qu etener cuiadado con la instruccion mysqli_connect tenemos que agreagr el i.

if (mysqli_connect_errno()){

      echo "Fallo al conectar con la BBDD";

       exit();

     }
    mysqli_select_db($conexion,$data_base_conexion) or die ("No se encuentra la base de datos");
    mysqli_set_charset($conexion,"utf8");



 


   $por_pagina=200;

  if(isset($_GET['pagina'])){

    $pagina= $_GET['pagina'];


  }else{

   $pagina=1;

  }


  //la pagina inicia en 0 y se multipllica  $por_pagina

  $empieza=($pagina-1) * $por_pagina;

 $consulta = "SELECT * FROM unidad WHERE ID_INCIDENTE = '$id_incidente'  ORDER BY ID_UNIDAD DESC LIMIT $empieza, $por_pagina ";


  //Seleccionamos los registros de la tabla bitacora

 //$consulta="SELECT * FROM unidad where AGENTE = '$usuario' AND fecha = (select MAX(fecha) from camaras) ORDER BY ID_UNIDAD DESC LIMIT $empieza, $por_pagina";

  //$consulta= "SELECT CURDATE()";

  //$consulta="SELECT * FROM  actividades  ORDER BY  FECHA DESC";//Esto nos sirve para ordenar las fechas

 // $resultado=mysqli_query($conexion, $consulta2);

 // $consulta= "SELECT HORA,DACTIVIDAD FROM actividades WHERE FECHA='2020-01-23' AND ID_USUARIO=1";


 


     //$consulta = "SELECT * FROM actividades";
     $query = mysqli_query($conexion, $consulta);
     $array = mysqli_fetch_array($query);




 ?>