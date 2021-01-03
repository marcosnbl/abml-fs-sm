<?php
include("db.php");
$nombre = '';
$dni= '';
$email='';
$curso= '';


if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM alumnos WHERE id=$id";
  $resultado = mysqli_query($conexion, $query);
  if (mysqli_num_rows($resultado) == 1) {
    $row = mysqli_fetch_array($resultado);
    $nombre = $row['nombre'];
    $dni = $row['dni'];
    $email = $row['email'];
    $curso = $row['curso'];
    $fecha_creacion = $row['fecha_creacion'];
  }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $nombre= $_POST['nombre'];
    $dni = $_POST['dni'];
    $email = $_POST['email'];
    $curso = $_POST['curso'];

    echo $id;
    echo $nombre;
    echo $dni;
    echo $email;
    echo $curso; 

    $query = "UPDATE alumnos set nombre = curso = '$curso', '$nombre', email = '$email', dni = '$dni',  WHERE id=$id";
    mysqli_query($conexion, $query);
    /// $_SESSION['mensaje'] = 'Actualizado correctamente.';
    /// $_SESSION['tipo_de_mensaje'] = 'warning';
    header('Location: edit-data.php');
}

?>
<?php include('header.php'); ?>
<div class="container p-8">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit-data.php?id=<?php echo $_GET['id']; ?> "method="POST">
        <div class="form-group">
          <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Actualizar Nombre">
        </div>
        <div class="form-group">
          <input name="dni" type="text" class="form-control" value="<?php echo $dni; ?>" placeholder="Actualizar DNI">
        </div>
        <div class="form-group">
          <input name="email" type="text" class="form-control" value="<?php echo $email; ?>" placeholder="Actualizar Correo Electronico">
        </div>
        <div class="form-group">
          <input name="curso" type="text" class="form-control" value="<?php echo $curso; ?>" placeholder="Actualizar Curso">
        </div>
        <button class="btn-success" name="update">
          Actualizar
        </button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>