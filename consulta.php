

<?php
/*  Mandamos a llamar  nuestra conexion de php  con require */
require ('./DB/conexion.php');
/* Declaramos una variable y dentro de ella asignamos una consulta */
  $sql = "SELECT * FROM `diplomas`;";

  $result = mysqli_query($conexion, $sql);
  
  $diplomas = array();
  while ($fila = mysqli_fetch_array($result)) {
    array_push($diplomas, $fila);
  }
  
  echo json_encode($diplomas);

  mysqli_free_result($result);
  mysqli_close($conexion);
  

?>