
<?php
/*  Mandamos a llamar  nuestra conexion de php  con require */
require ('./DB/conexion.php'); 
function  index(){

    $adresses =  "SELECT * FROM `diplomas`;";
    $result = mysqli_query($conexion, $sql);


}
?>