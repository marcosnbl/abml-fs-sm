<?php
session_start();

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM alumnos WHERE id = $id";
  $resultado = mysqli_query($conexion, $query);
  if(!$resultado) {
    die("Consulta Fallida.");
  }

  $_SESSION['mensaje'] = 'Eliminado satisfactoriamente.';
  $_SESSION['tipo_de_mensaje'] = 'danger';
  header('Location: index.php');
}

?>