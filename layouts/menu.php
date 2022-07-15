<?php
/* importamos los archivos de base url */
include ('../Config.php');
include('../test.php');

?>
<nav>
   <input type="checkbox" id="check">
   <label for="check" class="checkbtn">
       <i class="fas fa-bars"></i>
   </label>
   <a href="#" class="enlace">
       <img src="https://test.wapizima.com.mx/img/WAPIZIMAONLINEBLANCO.png" alt="" class="logo img-fluid" width="300">
   </a>
   <ul>
       <li><a class="active" href="<?=$h->get['base_url']?>">Inicio</a></li>
       <li><a href="<?=$h->get['base_url'].'./views/categories.php'?>">Categorias</a></li>
       <li><a href="<?=$h->get['base_url'].'./views/diplomas.php'?>">Diplomas</a></li>
       <li><a href="<?=$h->get['base_url'].'./views/reconocimientos.php'?>">Reconocimientos</a></li>
       <li><a href="<?=$h->get['base_url'].'./views/login.php'?>">Iniciar Session</a></li>
       <li><a href="<?=$h->get['base_url'].'./views/register.php'?>">Registrarme</a></li>
   </ul>
</nav>
