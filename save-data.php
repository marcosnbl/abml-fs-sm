<?php

include('db.php');

if (isset($_POST['save-data'])){
    $nombre = $_POST['nombre'];
    $dni = $_POST['dni'];
    $email = $_POST['email'];
    $curso = $_POST['curso'];

    
    $query = "INSERT INTO alumnos (nombre,dni, email, curso) VALUES ('$nombre','$dni', '$email', '$curso')";
    $resultado = mysqli_query($conexion, $query);
    if(!$resultado) {
        die("Consulta Fallida.");
      }

    $_SESSION['mensaje'] = 'Suscripción realizada.';
    $_SESSION['mensaje'] = 'blue';
    header('Location: index.php');
}


?>