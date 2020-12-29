<?php

include('db.php');

if (isset($_POST['save-data'])){
    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $edad = $_POST['Edad'];
    $email = $_POST['Email'];
    $curso = $_POST['Curso'];

    
    $query = "INSERT INTO datos(Nombre, Apellido, Edad, Email, Curso) VALUES ('$nombre', '$apellido','$edad', '$email', '$curso')";
    $resultado = mysqli_query($conexion, $query);
    if(!$resultado) {
        die("Consulta Fallida.");
      }

    $_SESSION['mensaje'] = 'Suscripción realizada.';
    $_SESSION['mensaje'] = 'blue';
    header('Location: index.php');
}


?>