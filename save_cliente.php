<?php
    if (isset($_POST["guardar"])) {
        unset($_POST["guardar"]); //eliminamos la variable
        require_once ("controllers/ClienteController.php");
        $control = new ClienteController();
        $control->SaveCliente();
    }else {
        header("Location: index.htm");
    }
?>