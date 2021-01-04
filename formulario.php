
<div class="container p-4">
    <div class="row">
        <div class="col-md-8">
            <?php if (isset($_SESSION['mensaje'])) { ?>
                <div class="alert alert-<?= $_SESSION['tipo_de_mensaje']?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['mensaje']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            <?php session_unset(); } ?>

            <div class="card card-body">
                <form action = "save-data.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder = "Nombre y Apellido" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="dni" class="form-control" placeholder = "DNI" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder = "Correo Electronico" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="curso" class="form-control" placeholder = "Curso al que se inscribe" autofocus>
                    </div>
                    
                    <input type="submit" name="save-data" class="btn btn-success btn-block" value="Guardar datos">
                </form>
            </div>

        </div>

        <div class="col-md-10">
        <table class="table table-bordered">
        <thead>
          <tr>
            <th>Alumnos</th>
            <th>DNI</th>
            <th>Correo Electronico</th>
            <th>Curso</th>
            <th>Fecha de Suscripción</th>
            <th>Agregar -Editar- Eliminar</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM alumnos";
          $alumnos = mysqli_query($conexion, $query);    

          while($row = mysqli_fetch_assoc($alumnos)) { ?>
          <tr>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['dni']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['curso']; ?></td>
            <td><?php echo $row['fecha_creacion']; ?></td>
            <td>
              <a href="edit-data.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete-data.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

        </div>

    </div>
</div>
