
<!-- Page Wrapper -->
<div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">UTVT Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Inicio</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

  
    <!-- Nav Item - Pages Collapse Menu Direcciones -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Direcciones</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">SubMenu:</h6>
                <a class="collapse-item" href="<?=$h->get['base_url'].'/paneladmin/views/adresses/index.php'?>">Lista De Direcciones</a>
                <a class="collapse-item" href="<?=$h->get['base_url'].'/paneladmin/views/adresses/add.php'?>">Agregar  Direcciones</a>
          
            </div>
        </div>
    </li>
<!-- En Direcciones -->
    <!-- Grupos -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities1"
            aria-expanded="true" aria-controls="collapseUtilities1">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Grupos</span>
        </a>
        <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">SubMenu:</h6>
                <a class="collapse-item" href="<?=$h->get['base_url'].'/paneladmin/views/groups/index.php'?>">Lista De Grupos</a>
                <a class="collapse-item" href="<?=$h->get['base_url'].'/paneladmin/views/groups/add.php'?>">Agregar  Grupo</a>
         
            </div>
        </div>
        <!-- End Grupos -->
    <!-- Asignatura -->
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities2"
            aria-expanded="true" aria-controls="collapseUtilities2">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Asignaturas</span>
        </a>
        <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?=$h->get['base_url'].'/paneladmin/views/subject/index.php'?>">Lista De Asignaturas</a>
            <a class="collapse-item" href="<?=$h->get['base_url'].'/paneladmin/views/subject/add.php'?>">Agregar  Asignatura</a>

            </div>
        </div>
    </li>
    <!-- End Asignatura -->
    <!-- Laboratories -->
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities3"
            aria-expanded="true" aria-controls="collapseUtilities3">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Laboratories</span>
        </a>
        <div id="collapseUtilities3" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?=$h->get['base_url'].'/paneladmin/views/laboratories/index.php'?>">Lista De Laboratorios</a>
            <a class="collapse-item" href="<?=$h->get['base_url'].'/paneladmin/views/laboratories/add.php'?>">Agregar  Laboratorio</a>

            </div>
        </div>
    </li>
    <!-- End Laboratories -->
    <!-- Start Usuer -->
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities4"
            aria-expanded="true" aria-controls="collapseUtilities4">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Usuarios</span>
        </a>
        <div id="collapseUtilities4" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?=$h->get['base_url'].'/paneladmin/views/users/index.php'?>">Lista De Usuarios</a>
            <a class="collapse-item" href="<?=$h->get['base_url'].'/paneladmin/views/users/add.php'?>">Agregar  Usuarios</a>

            </div>
        </div>
    </li>
    <!-- End Users -->
</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">



    <!-- start incluimos nav desde nuestro layout -->
    <?php
  include('nav.php');
  ?>

  