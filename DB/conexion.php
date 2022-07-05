<!-- Inicializamos un archivo de php -->
<?php
$mysqli = new mysqli("127.0.0.1", "root", "root", "integrador2022", 8889);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "\n";
/* Consultas de selección que devuelven un conjunto de resultados */
if ($resultado = $mysqli->query("SELECT nombre FROM diplomas LIMIT 10")) {
  printf("La selección devolvió %d filas.\n", $resultado->num_rows);
   
  /* liberar el conjunto de resultados */
  $resultado->close();
}



   
$mysqli->close();

?>
