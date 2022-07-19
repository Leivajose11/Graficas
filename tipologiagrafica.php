<?php 
 session_start();


if(!isset($_SESSION["username"]))
{
    header("location:login.php");
}

include("datosconexion.php");


 $conexion=mysqli_connect($host_conexion,$user_conexion,$pass_conexion);// estamos estableciendo conexion con la base de datos temenos qu etener cuiadado con la instruccion mysqli_connect tenemos que agreagr el i.

 if (mysqli_connect_errno()){

      echo "Fallo al conectar con la BBDD";

       exit();

     }
    mysqli_select_db($conexion,$data_base_conexion) or die ("No se encuentra la base de datos");
    mysqli_set_charset($conexion,"utf8");
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon"  href="img/logo911.png">
    <title>Graficas Tipologias </title>
    <link rel="icon"  href="img/logo911.png">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css" >

         <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">


    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    </head>

    <body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    
                </div>
                <img src="img/logo911.png" width="70" height="70" alt=""> 
                
            </a>

             <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <span style="font-size: 12px; ">SISTEMA NACIONAL DE EMERGENCIAS 911</span></a>
            </li>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-home"></i>
                    <span>INICIO</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="views/datos.php">
                    <i class="fas fa-plus"></i>
                    <span>NUEVO INCIDENTE</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="views/buscar.php">
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
                       <a class="collapse-item" href="views/tipologia/tipologiagrafica.php">Tipologias</a>
                        <a class="collapse-item" href="views/subtipologiagrafica.php">Subtipologias</a>
                        <a class="collapse-item" href="views/departamentografica.php">Departamentos</a>
                        <a class="collapse-item" href="views/municipiografica.php">Municipios</a>
                        <a class="collapse-item" href="views/despachografica.php">Despachos</a>
                        <a class="collapse-item" href="views/generografica.php">Genero</a>
                        <a class="collapse-item" href="views/armagrafica.php">Arma</a>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small "style="font-size: 16px;"><?php echo "" . $_SESSION["username"] . "";?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
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

    <body>
    <div class="column">
        <h2 class="text-center mt-4 mb-3">Estadisticas</a></h2>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card mt-4">
                        <div class="card-header">Grafico Circular</div>
                        <div class="card-body">
                            <div class="chart-container pie-chart">
                                <canvas id="pie_chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mt-4">
                        <div class="card-header">Grafico de Dona</div>
                        <div class="card-body">
                            <div class="chart-container pie-chart">
                                <canvas id="doughnut_chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mt-4 mb-4">
                        <div class="card-header">Grafico de Barras</div>
                        <div class="card-body">
                            <div class="chart-container pie-chart">
                                <canvas id="bar_chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<script>
    
$(document).ready(function(){

    $('#submit_data').click(function(){

        

        $.ajax({
            url:"datatipologia.php",
            method:"POST",
        });

    });

    makechart();

    function makechart()
    {
        $.ajax({
            url:"datatipologia.php",
            method:"POST",
            data:{action:'fetch'},
            dataType:"JSON",
            success:function(data)
            {
                var incidentetipologia = [];
                var total = [];
                var color = [];

                for(var count = 0; count < data.length; count++)
                {
                    incidentetipologia.push(data[count].incidentetipologia);
                    total.push(data[count].total);
                    color.push(data[count].color);
                }

                var chart_data = {
                    labels:incidentetipologia,
                    datasets:[
                        {
                            label:'Vote',
                            backgroundColor:color,
                            color:'#fff',
                            data:total
                        }
                    ]
                };

                var options = {
                    responsive:true,
                    scales:{
                        yAxes:[{
                            ticks:{
                                min:0
                            }
                        }]
                    }
                };

                var group_chart1 = $('#pie_chart');

                var graph1 = new Chart(group_chart1, {
                    type:"pie",
                    data:chart_data
                });

                var group_chart2 = $('#doughnut_chart');

                var graph2 = new Chart(group_chart2, {
                    type:"doughnut",
                    data:chart_data
                });

                var group_chart3 = $('#bar_chart');

                var graph3 = new Chart(group_chart3, {
                    type:'bar',
                    data:chart_data,
                    options:options
                });
            }
        })
    }

});

</script>
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
                    <a class="btn btn-primary" href="logout.php">Cerrar sesion</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>