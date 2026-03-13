<h1> Modulo de Eliminación de Usuarios </h1>

<?php
    $controlador = new ControladorUsuarios();

    if (isset($_GET["id"])) {

        $registro=$controlador->consultar($_GET["id"]);
    }

?>

<form action="" method="post">

    <p>ID: <?php echo $registro["idusuarios"]; ?></p>
    <p>Cédula: <?php echo $registro["cedula"]; ?></p>
    <p>Nombres: <?php echo $registro["nombres"]; ?></p>
    <p>Apellidos: <?php echo $registro["apellidos"]; ?></p>
    <p>Usuario: <?php echo $registro["usuario"]; ?></p>
    <p>Password: <?php echo $registro["password"]; ?></p>

    <input type="submit" name="eliminar" value="Eliminar Ususario">

</form>

<?php

    if (isset ($_POST["eliminar"])) {
        $controlador->eliminar($_GET["id"]);
        header('location:home.php');
    }

?>