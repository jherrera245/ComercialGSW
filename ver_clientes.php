<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Lista de Clientes</title>
</head>

<body>
    <?php 
        require_once("layout/menu.php")
    ?>
    <div class="container">
        <h4>Lista de Clientes</h4>
        <?php 
            require_once ("controllers/ClienteController.php");
            $control = new ClienteController();
        ?>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Dirección</th>
                        <th>Telefono</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $control->ShowCliente();
                ?>
                </tbody>
            </table>
        </div>
        <?php
            require_once("pagination.php");
        ?>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>