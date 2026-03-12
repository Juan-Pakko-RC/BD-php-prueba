<h1> Modulo de Creación de Usuarios </h1>

<form action="" method="post">

    <label for="">Cédula</label><br>
    <input type="text" name="cedula" required><br>
    
    <label for="">Nombres</label><br>
    <input type="text" name="nombres" required><br>

    <label for="">Apellidos</label><br>
    <input type="text" name="apellidos" required><br>

    <label for="">Usuario</label><br>
    <input type="text" name="usuario" required><br>

    <label for="">Password</label><br>
    <input type="text" name="password" required><br>

    <input type="submit" name="enviar" value="Registrar">

</form>

<?php

    $controlador=new ControladorUsuarios();
    if (isset ($_POST["enviar"])) {
        $resultado=$controlador->crear($_POST["cedula"], $_POST["nombres"], $_POST["apellidos"], $_POST["usuario"], $_POST["password"]);

        if ($resultado) {
            echo "Registro agregado exitosamente";
        } else {
            echo "Registro fallido, cédula ya registrada";
        }
    }

?>