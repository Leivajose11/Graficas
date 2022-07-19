<?php 
 session_start();


if(!isset($_SESSION["username"]))
{
    header("location:../login.php");
}

include("../datosconexion.php"); 


 $conexion=mysqli_connect($host_conexion,$user_conexion,$pass_conexion);// estamos estableciendo conexion con la base de datos temenos qu etener cuiadado con la instruccion mysqli_connect tenemos que agreagr el i.

 if (mysqli_connect_errno()){

      echo "Fallo al conectar con la BBDD";

       exit();

     }
    mysqli_select_db($conexion,$data_base_conexion) or die ("No se encuentra la base de datos");
    mysqli_set_charset($conexion,"utf8");


 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <link rel="icon"  href="../img/logo911.png">
    <title>Busqueda de Incidente</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">


    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    
                </div>
                <img src="../img/logo911.png" width="70" height="70" alt=""> 
                
            </a>

            <!-- Divider -->
            

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="../index.php">
                    <span style="font-size: 12px; ">SISTEMA NACIONAL DE EMERGENCIAS 911</span></a>
            </li>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="../index.php">
                    <i class="fas fa-home"></i>
                    <span>INICIO</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="datos.php">
                    <i class="fas fa-plus"></i>
                    <span>NUEVO INCIDENTE</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="buscar.php">
                    <i class="fas fa-search"></i>
                    <span>BUSCAR</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>ESTADISTICAS</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="tipologia/tipologiagrafica.php">Tipologias</a>
                        <a class="collapse-item" href="subtipologia/subtipologiagrafica.php">Subtipologias</a>
                        <a class="collapse-item" href="departamento/departamentografica.php">Departamentos</a>
                        <h6 class="collapse-header">Municipios:</h6>
                        <a class="collapse-item" href="municipio/copangrafica.php">Copan</a>
                         <a class="collapse-item" href="municipio/ocotepequegrafica.php">Ocotepeque</a>
                          <a class="collapse-item" href="municipio/lempiragrafica.php">Lempira</a>
                           <hr class="sidebar-divider">
                        <a class="collapse-item" href="despacho/despachografica.php">Despachos</a>
                        <a class="collapse-item" href="genero/generografica.php">Genero</a>
                        <a class="collapse-item" href="arma/armagrafica.php">Arma</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
        

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small "style="font-size: 16px;"> <?php echo "" . $_SESSION["username"] . "";?></span>
                                <img class="img-profile rounded-circle"
                                    src="../img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                               
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar Sesion
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                       
                    </div>

                    
                   <div>
                    <script type="text/javascript">
    function Ventanas() {
      window.open("../cierra_session2.php");
      }

  </script>
  
   
</head>
<div>
 
 <?php
    $Buscar=$_GET["Buscar"];// captura el nombre seleccionado en esta variable.
    $fecha_desde=$_GET["fecha_desde"]; // captura la primera fecha seleccionada en esta variable.
    $fecha_hasta=$_GET['fecha_hasta']; // captura la segunda fecha seleccionada en esta variable.

    include("../datosconexion.php"); //conexion con BD


   $conexion=mysqli_connect($host_conexion,$user_conexion,$pass_conexion,$data_base_conexion);// estamos estableciendo conexion con la base de datos temenos qu etener cuiadado con la instruccion mysqli_connect tenemos que agreagr el i.

    mysqli_set_charset($conexion, "utf8");//para que nos reconosca las tildes.

    
//COnsulta sql   
  $consulta="
 SELECT  * FROM incidente, unidad  
  WHERE (incidentetipologia ='$Buscar' AND incidentefechasuceso BETWEEN '$fecha_desde' AND '$fecha_hasta') ORDER BY ID DESC  ";

    $resultados=mysqli_query($conexion, $consulta);//con esta variable estamos llamando las dos variables la consulta y la conexion.


   ?>

    <!-- Tabla que muestra los datos -->

   <div class="col-sm-40">
  <table class="table table-hover table-bordered">
    
    <thead>
      <tr>
        <th></th>
        <th>Fecha Incidente</th>
        <th>No. Ticket</th>
        <th>Tipologia</th>
        <th>Sub tipologia</th>
        <th>Departamento</th>
        <th>Municipio</th>
        <th>Barrio</th>
         

      </tr>
    </thead>

    <tbody>
      <?php
      $cont=0;  
      foreach ($resultados as $row) { ?>
      <tr>
              <td><?php echo ++$cont; ?></td> 
          <td> <?php echo $row['incidentefechasuceso'];  ?> </td>
          <td> <?php echo $row['incidentenumeroticket'];  ?> </td>
          <td> <?php echo $row['incidentetipologia'];  ?> </td>
          <td> <?php echo $row['incidentesubtipologia']; ?> </td>
          <td> <?php echo $row['incidentedepartamento'];  ?> </td>
          <td> <?php echo $row['incidentemunicipio']; ?> </td>
           <td> <?php echo $row['incidentebarrio']; ?> </td>
           
          
             
      </tr>

    </tbody>


<?php
}  
?>
</table>
</div>
</div>
 </br>



            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Sistema Nacional de Emergencias 911 &copy;</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Cerrar Sesion?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione cerrar sesion para finalizar su sesion</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="../registro/logout.php">Cerrar sesion</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>
    <script type="text/javascript" src="../js/cargarmunicipios.js"></script>

</body>

</html>