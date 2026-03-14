<h1> Modulo de Edición de Usuarios </h1>

<?php
    $controlador = new ControladorUsuarios();

    if (isset($_GET["id"])) {

        $registro=$controlador->ctrConsultar($_GET["id"]);
    }

?>

<form action="" method="post">

    <label for="">Nombres</label><br>
    <input type="text" name="nombres" value="<?php echo $registro['nombres']; ?>"><br>

    <label for="">Apellidos</label><br>
    <input type="text" name="apellidos" value="<?php echo $registro['apellidos']; ?>"><br>
    
    <label for="">Cédula</label><br>
    <input type="text" name="cedula" value="<?php echo $registro['cedula']; ?>"><br>

    <label for="">Usuario</label><br>
    <input type="text" name="usuario" value="<?php echo $registro['usuario']; ?>"><br>

    <label for="">Password</label><br>
    <input type="text" name="password" value="<?php echo $registro['password']; ?>"><br>

    <input type="submit" name="editar" value="Editar Usuario">

</form>

<?php

    $controlador=new ControladorUsuarios();

    if (isset ($_POST["editar"])) {
        $controlador->ctrEditar($_GET["id"], $_POST["nombres"], $_POST["apellidos"], $_POST["cedula"], $_POST["usuario"], $_POST["password"]);
        //header('location:index.php');

        if (true) {
            echo "Usuario editado exitosamente";
        } else {
            echo "Actualzación de datos fallida";
        }
    }

?>