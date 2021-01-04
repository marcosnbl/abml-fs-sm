<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>ABML Full Stack Silicon Misiones</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  </head>

    <nav class="navbar navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="index.php">ABML Full Stack Silicon Misiones</a>
      </div>
    </nav>



<div class="container p-4">
    <div class="row">
        <div class="col-md-8">
            

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
                    <a href="index.php?" class="">
                        <input type="cancel" name="cancel" class="btn btn-danger btn-block" value="Cancelar">
                    </a> 
                </form>
            </div>
        </div>  
    </div>
</div>
