</br>
<div class="col-md-10">
    <table class="table table-bordered">
        <thead>
          <tr>
            <th>Alumnos</th>
            <th>DNI</th>
            <th>Correo Electronico</th>
            <th>Curso</th>
            <th>Fecha de Suscripción</th>
            <th>Editar- Eliminar</th>
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
