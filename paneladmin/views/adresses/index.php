<!-- inlcude config.php que tiene la base url -->
<?php
include_once ('../../../Config.php');
include_once ('../../../test.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wapizima Online</title>

    <!-- Custom fonts for this template-->
    <link href="<?=$h->get['base_url'].'vendor/fontawesome-free/css/all.min.css'?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=$h->get['base_url'].'/paneladmin/assets/styles/sb-admin-2.min.css'?>" rel="stylesheet">
    <!-- Scrip Font Awesome icons -->
    <script src="https://kit.fontawesome.com/7a66a4eab9.js" crossorigin="anonymous"></script>
        <!-- Custom styles for this page datables -->
        <link href="<?=$h->get['base_url'].'vendor/datatables/dataTables.bootstrap4.min.css'?>" rel="stylesheet">

</head>

<body id="page-top">

    <!-- start incluimos menu desde nuestro layout -->
  <?php
  include '../../layouts/menu.php';
  include '../../Controller/adressesController.php';
  ?>

    <!-- Content page  -->
    
    
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Direcciones Escolares</h1>
                        <a href="<?=$h->get['base_url'].'/paneladmin/views/adresses/add.php'?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Agregar</a>
                    </div>

          

                    <!-- Content Row -->
                    <div class="row">

                        <!--  Formulario Direcciones -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Lista De Direcciones</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Foremulario Direcciones -->
                                <div class="card-body">
                                <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Namedede</th>
                                            <th>Description</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Ndededeame</th>
                                            <th>Description</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                               <?php
                                        include ('../../class/AdresesClass.php');
                                            if ($resultado = $conexion->query($consulta)) {

                                                /* obtener el array de objetos */
                                                while ($obj = $resultado->fetch_object()) {
                                                  /*  printf ("%s (%s)\n", $obj->name, $obj->description);*/
                                            
                                                    ?> */
                                                    /*
   <tr>
                                        <td> <?= $obj->name ?></td>
                                        <td> <?= $obj->description ?></td>
                                        </tr> 
                                        <?php

                                           /* liberar el conjunto de resultados 
                                           $resultado->close();*/
                                        }
                                    }
                                
                                        ?> 
                                        

*/
                                     
                                            
                                    </tbody>
                                </table>
                            </div>
                                </div>
                            </div>
                        </div>

                  
                    </div>

                 
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

    <!-- End Content page  -->



  <!-- start incluimos footer desde nuestro layout -->
  <?php
  include '../../layouts/footer.php'
  ?>



            


 

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

    <!-- End incluimos menu desde nuestro layout -->

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
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=$h->get['base_url'].'/paneladmin/assets/vendor/jquery/jquery.min.js'?>"></script>
    <script src="<?=$h->get['base_url'].'/paneladmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>
  
    <!-- Page level custom scripts -->
    <script src=""></script>

    <script src="<?=$h->get['base_url'].'/paneladmin/assets/js/demo/chart-pie-demo.js'?>"></script>
   
    <!-- Core plugin JavaScript-->
    <script src="<?=$h->get['base_url'].'/paneladmin/assets/vendor/jquery-easing/jquery.easing.min.js'?>"></script>

 
       <!-- Custom scripts for all pages-->
       <script src=    "<?=$h->get['base_url'].'/paneladmin/assets/js/sb-admin-2.min.js'?>"></script>

    <!-- Page level plugins -->
    <script src="<?=$h->get['base_url'].'/paneladmin/assets/vendor/chart.js/Chart.min.js'?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?=$h->get['base_url'].'/paneladmin/assets/js/demo/chart-area-demo.js'?>"></script>
    <script src=<?=$h->get['base_url'].'/paneladmin/assets/js/demo/chart-pie-demo.js'?>"></script>

</body>

</html>