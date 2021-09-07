<?php
    $pagina = $_REQUEST["pagina"];
    $paginas = $_REQUEST["paginas"];
?>
<ul class="pagination">
    <!-- Si la página actual es mayor a uno, mostramos el botón para ir una página atrás -->
    <?php if ($pagina > 1) { ?>
    <li class="page-item">
        <a class="page-link" href="?pagina=<?php echo $pagina - 1 ?>">
            <span aria-hidden="true">&laquo;</span>
        </a>
    </li>
    <?php } ?>

    <!-- Mostramos enlaces para ir a todas las páginas. Es un simple ciclo for-->
    <?php for ($x = 1; $x <= $paginas; $x++) { ?>
    <li class="page-item <?php if ($x == $pagina) echo " active" ?>">
        <a class="page-link" href="?pagina=<?php echo $x ?>">
            <?php echo $x ?>
        </a>
    </li>
    <?php } ?>
    <!-- Si la página actual es menor al total de páginas, mostramos un botón para ir una página adelante -->
    <?php if ($pagina < $paginas) { ?>
    <li class="page-item">
        <a class="page-link" href="?pagina=<?php echo $pagina + 1 ?>">
            <span aria-hidden="true">&raquo;</span>
        </a>
    </li>
    <?php } ?>
</ul>