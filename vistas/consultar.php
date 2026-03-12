<h1> Modulo de Consulta de Usuarios </h1>

<?php
    $controlador = new ControladorUsuarios();

    if (isset($_GET["id"])) {

        $registro=$controlador->consultar($_GET["id"]);
    }

?>

<div border="1">
    <p>ID: <?php echo $registro["idusuarios"]; ?></p>
    <p>Cédula: <?php echo $registro["cedula"]; ?></p>
    <p>Nombres: <?php echo $registro["nombres"]; ?></p>
    <p>Apellidos: <?php echo $registro["apellidos"]; ?></p>
    <p>Usuario: <?php echo $registro["usuario"]; ?></p>
    <p>Password: <?php echo $registro["password"]; ?></p>
</div>