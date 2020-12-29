<div class="container p-4">
    <div class="row">
        <div class="col-md-8">
        
            <div class="card card-body">
                <form action = "save-data.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="DNI" class="form-control" placeholder = "DNI" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="Nombre" class="form-control" placeholder = "Nombre" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="Edad" class="form-control" placeholder = "Edad" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="Email" class="form-control" placeholder = "Correo Electronico" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="Curso" class="form-control" placeholder = "Curso" autofocus>
                    </div>
                    
                    <input type="submit" name="save-data" class="btn btn-success btn-block" value="Guardar datos">
                </form>
            </div>

        </div>
        <div class="col-md-8">


        </div>

    </div>
</div>
