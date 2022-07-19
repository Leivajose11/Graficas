<?php  
     
$unidad=$_GET["ID_UNIDAD"];



//------------------conexion------------------//

include("datosconexion.php");


  $conexion=mysqli_connect($host_conexion,$user_conexion,$pass_conexion);// estamos estableciendo conexion con la base de datos temenos qu etener cuiadado con la instruccion mysqli_connect tenemos que agreagr el i.

 if (mysqli_connect_errno()){

      echo "Fallo al conectar con la BBDD";

       exit();

     }
    mysqli_select_db($conexion,$data_base_conexion) or die ("No se encuentra la base de datos");
    mysqli_set_charset($conexion,"utf8");

     
     
    $sql= "DELETE FROM unidad WHERE ID_UNIDAD='$unidad'";

    $resultado=mysqli_query($conexion, $sql);

     

     if ($resultado==false) {
       echo "Error en la consulta";

     }else{

     //echo "<br/> Se a eliminado el regsitro con exito <br/><br/>";

     //echo mysqli_affected_rows($conexion);

        if (mysqli_affected_rows($conexion)==0){

       echo "No hay registros que eliminar";

       }else{

        echo "Se han eliminado " . mysqli_affected_rows($conexion) . "  Registros";


       }
  
   


   }

   header("Location: views/datos.php#seccion2");

mysqli_close($conexion);
    
  
  

 ?>


  
