<?php

include('db.php');

if (isset($_POST['save-data'])){
    $dni = $_POST['DNI'];
    $nombre = $_POST['Nombre'];
    $edad = $_POST['Edad'];
    $email = $_POST['Email'];
    $curso = $_POST['Curso'];

    
    $query = "INSERT INTO datos(DNI, Nombre, Edad, Email, Curso) VALUES ('$dni', '$nombre','$edad', '$email', '$curso')";
    $resultado = mysqli_query($conexion, $query);
    if(!$resultado) {
        die("Consulta Fallida.");
      }

    $_SESSION['mensaje'] = 'Suscripción realizada.';
    $_SESSION['mensaje'] = 'blue';
    header('Location: index.php');
}


?>