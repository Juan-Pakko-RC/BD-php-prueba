<?php
    include_once("controladores/controlador.php");
    include_once("controladores/enrutador.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
</head>
<body>
    <h1>CRUD CON PHP Y POO EN MVC</h1>
    <nav>
        <ul>
            <!--<li><a href="index.php">index</a></li>-->
            <li><a href="?cargar=home">Home</a></li>
            <li><a href="?cargar=crear">Registrar</a></li>
            <li><a href="?cargar=editar">Editar</a></li>
            <li><a href="?cargar=consultar">Consultar</a></li>
            <li><a href="?cargar=eliminar">Eliminar</a></li>
        </ul>
    </nav>
    <?php
        if (!isset($_GET['cargar'])){
            $_GET['cargar']="";
        }

        $enrutador = new Enrutador();
        if ($enrutador->validarVista($_GET['cargar'])) {
            $enrutador->cargarVista($_GET['cargar']);
        }
    ?>
</body>
</html>