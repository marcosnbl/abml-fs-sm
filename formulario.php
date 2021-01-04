<?php
session_start();
?>

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
                <form action="save-data.php" method="POST">
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
    </div>
</div>
