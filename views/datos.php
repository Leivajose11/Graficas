<?php 
session_start();


if(!isset($_SESSION["username"]))
{
  header("location:../registro/login.php");
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
    <title>Sistema Nacional de Emergencias 911</title>

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
    

  </script>
  
  </div>
</div>

  <body >
     
      <div class="column">

   
   <div>   
       <center>  <h1 id="seccion1" >Ingreso de Datos</h1></center>
        

      <form name="f1" method="POST" action="../insertarincidente.php">

        <div  class="form-group text-center" name="Grid1">
        </div>
      
    <center>  <div class="card col-sm-4" name="" >
        <label>Agente:</label>

       
        <input  type="text" name="agente" class="form-control" readonly = "readonly" value=" <?php echo "" . $_SESSION["username"] . "";?>">
         </div>  
         <br>
       <div class="card col-sm-4" >
       <label>Fecha Creacion del Reporte:</label>
       <input type="date" name="fecha" class="form-control" readonly="readonly" value="<?php date_default_timezone_set ( 'America/Tegucigalpa' ) ; echo date("Y-m-d");?>" >
       </div>
       <br>

       <div class="card col-sm-4" class="card col-sm-5" >
        <label>Numero ticket:</label>
        <input  type="text" name="incidentenumeroticket" class="form-control">
        </div>
        <br>
        
       <div class="card col-sm-4" >
        <label>Fecha del Incidente:</label>
        <input  type="date" name="Fecha_Incidente" class="form-control" required="true "></div>
        <br>
         <div class="card col-sm-4" >
    <label>Tipologia:</label>
    <select id="ddl" onchange="configureDropDownLists(this,document.getElementById('ddl2'))" name="Tipo_Incidente">
    <option value=""></option>
    <option value="accidentesdetransito">Accidentes de Tránsito</option>
    <option value="asistencia">Asistencia</option>
    <option value="casosalcaldia">Casos de Alcaldía</option>
    <option value="delitoscomunes">Delitos comunes</option>
    <option value="delitoscontralamujeruhombre">Delitos contra la Mujer u Hombre</option>
    <option value="delitoscontralaninezyadolescencia">Delitos contra la Niñez y Adolescencia</option>
    <option value="delitoscontralapropiedad">Delitos contra la Propiedad</option>
    <option value="delitoscontralavida">Delitos Contra la Vida</option>
    <option value="otrascausasdemuerte">Otras Causas de Muerte</option>
    <option value="desastresnaturales">Desastres Naturales</option>
    <option value="emergenciamedica">Emergencias Médicas</option>
    <option value="incendio">Incendio</option>
    <option value="investigacion">Investigación</option>
    <option value="reportesrecibidos">Reportes Recibidos</option>
    </select></div><br>
   
   <div class="card col-sm-4" s>
   <label>SubTipologia:</label>
   
   <select id="ddl2" name="Sub_Tipo_Incidente" >
   <option value=""></option>
   </select>
   <script  src="../js/script.js"></script> </div>

    <br>

     <div  class="card col-sm-4" >
       <label>Departamento:</label>
    <select name="Departamento" id="departamentos" onchange="cambia_departamento()" >
    <option value="0">Departamento</option>
    <option value="COPAN ">COPAN </option>
    <option value="LEMPIRA">LEMPIRA</option>
    <option value="OCOTEPEQUE">OCOTEPEQUE</option>
    
   
   </select>
    </div>
    <br>
          <div  class="card col-sm-4" >
             <label>Municipios:</label>
         <select name="Municipio" id="minucipios" >

         <option value="0">Municipios</option>

         </select>
         </div>

         <br>

        <div class="card col-sm-4" >
        <label>Aldea/Cacerio:</label>
        <input type="text" name="Aldea_Cacerio" class="form-control">
        </div>
        <br>
    

        <div class="card col-sm-4" >
        <label>Barrio:</label>
        <input  type="text" name="Barrio" class="form-control">
        </div>
        <br>


        <div class="card col-sm-4" >
         <label>Sexo:</label>
         <select   name="Sexo" id="Sexo" >
            <option value=""></option>
            <option value="Indeterminado">Indeterminado</option>
        <option value="Hombre">Hombre</option>
         <option value="Mujer">Mujer</option>
         <option value="Niño">Niño</option>
         </select>
         </div>
         <br>

         <div class="card col-sm-4" class="card col-sm-5" >
        <label>Arma:</label>
        <select   name="Arma" id="Arma" >
            <option value=""></option>
            <option value="Indeterminado">Indeterminado</option>
        <option value="Fuego">Fuego</option>
         <option value="Blanca">Blanca</option>
         </select>
         </div>
        <br>

        <div class="card col-sm-4" class="card col-sm-5" >
        <label>Punto de referencia:</label>
        <textarea  type="text" name="incidentepuntoreferencia" class="form-control"></textarea>
        </div>
        <br>

        <div class="card col-sm-4" class="card col-sm-5" >
        <label>Descripcion verbal de la direccion:</label>
        <textarea type="text" name="incidentedescripciondireccion" class="form-control"></textarea>
        </div>
        <br>

        <div class="card col-sm-4" class="card col-sm-5" >
        <label>Descripcion complementaria:</label>
       <textarea  type="text" name="incidentedescripcioncomplementaria" class="form-control"></textarea>
        </div>
        <br>

        <div class="card col-sm-4" class="card col-sm-5" >
        <label>Nota de respaldo:</label>
        <textarea  type="text" name="incidentenotarespaldo" class="form-control"></textarea>
        </div>
        <br>

         <div class="card col-sm-4" class="card col-sm-5" >
        <label>Observacion:</label>
        <textarea  type="text" name="incidenteobservacion" class="form-control"></textarea>
        </div>
        <br>

  <input  type="submit" name="enviar" id="enviar" value="Enviar" class="btn btn-info">
    <br>
    <br>
</div>

</div>
</div>
</form>

<center>

  <div class="row">
  <div class="column"  >

<?php 
include '../consultaunidad.php'
 ?>



 
  
  <div class="d-flex ">
  <div>
  <div class="card-body" >

     <form  name="form1" method="POST" action="../insertarunidad.php">


          </div>

 </div>
     </div>

 </div>

</div>

    <center> <center><h1 id="seccion2">UNIDADES ASIGNADAS</h1></center>   
      <div class="card col-sm-4" >  
         <label>Unidad:</label>
         <select  name="unidad" id="Turno"  >
           <option value=""></option>
           <option value="No se Presento">No se Presento</option>
       <option value="Escuadron de Transito">Escuadron de Transito</option>
         <option value="Policia Nacional">Policia Nacional</option>
         <option value="Copeco">Copeco</option>
         <option value="Bomberos">Bomberos</option>
         <option value="Cruz Roja">Cruz Roja</option>
         <option value="SIAT(Tránsito)">SIAT(Transito)</option>
         <option value="Urpa">Urpa</option>
         <option value="Abuso de Autoridad">Abuso de Autoridad</option>
          <option value="Supervisor Confidencial">Supervisor Confidencial</option>
           <option value="Asistencia">Asistencia</option>
            <option value="Dinaf">Dinaf</option>
             <option value="Migracion">Migracion</option>
             <option value="Centros Penales">Centros Penales</option>
             <option value="Incompletas">Incompletas</option>
             <option value="Molestar">Molestar</option>
             <option value="Psicologa">Psicologa</option>
             <option value="DIPOL">Alcaldía</option>
             <option value="DPI">DPI</option>

         </select>      
           </div>
<br>

       <div class="card col-sm-4">
    <label>Unidad Departamento  :</label>
    <select name="unidaddepartamento" id="unidaddepartamento"  >
    <option value=""></option>
    <option value="COPAN ">COPAN </option>
    <option value="LEMPIRA">LEMPIRA</option>
    <option value="OCOTEPEQUE">OCOTEPEQUE</option>
   </select>
   <br>

   

 </div>

 <div class="card col-sm-4" class="card col-sm-5" >
        <label>Nota Unidad:</label>
        <textarea  type="text" name="unidadnota" class="form-control"></textarea>
        </div></center>


       <div >

        <input  type="hidden" type="number_format(number)" name="Id_Incidente" class="form-control"  readonly="readonly" value="<?php  
        echo $_SESSION['id_incidente']?>" required></input></div>
        <br>
        <div>
        <input  type="submit" name="enviar" id="enviar" value="Agregar" class="btn btn-info">
        
        </div>

</form>

 <table class="table table-hover" >

    <thead>
      <tr>
        <th>UNIDAD</th>
          <th>UNIDAD DEPARTAMENTO</th>
          <th>NOTA UNIDAD</th>
     </tr>
    </thead>

    
   <?php
   foreach ($query as $row) { ?>
      <tr>
        
        
        <td> <?php echo $row['unidadnombre'];  ?> </td>
        <td> <?php echo $row['unidaddepartamento'];  ?> </td>
        <td> <?php echo $row['unidadnota'];  ?> </td>
        
         <td> <?php echo "<a href='../eliminarunidad.php?ID_UNIDAD=".$row['ID_UNIDAD']."''><button type='button' class = ' btn btn-danger '>Eliminar</button></a></td>"?>
       
        
         
        
      </tr>
  
   

<?php
}  
?>
</table>
</center>
<br>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Sistema Nacional de Emergencias 911 &copy;</span>
                    </div>
                </div>
            </footer>


    
         

      </div>


 </div>

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