<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Nuevo Cliente</title>
</head>
<body>
    <?php 
        require_once ("layout/menu.php");
    ?>
    <div class="container">
        <div class="card col-lg-8 col-md-10 col-xs-12 mx-auto">
            <div class="card-header">
                Registrar Cliente
            </div>
            <div class="card-body">
                <form action="save_cliente.php" method="post">
                
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-xs-12">   
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input class="form-control" type="text" name="nombre" placeholder="Ingresa el nombre" required>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-xs-12">   
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input class="form-control" type="text" name="apellido" placeholder="Ingresa el apellido" required>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-xs-12">   
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input class="form-control" type="text" name="telefono" placeholder="Ingresa el teléfono">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Dirección</label>
                            <textarea class="form-control" name="direccion" rows="3" placeholder="Ingresa la dirección"></textarea>
                          </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>

                    <input type="hidden" name="guardar">
                </form>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>