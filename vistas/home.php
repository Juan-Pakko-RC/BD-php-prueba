<?php
    $controlador = new ControladorUsuarios();
    $resultado = $controlador->listar();
?>

<h1> Modulo Home </h1>
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuarios</title>
</head>
<body>

<h2>Listado de Usuarios</h2>

<table border ="1">
    <thead>
        <tr> <!--CABECERA DE LA TABLA-->
            <th>ID</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Cédula</th>
            <th>Usuario</th>
            <th>Password</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody> <!--CUERPO DE LA TABLA-->
        <?php
        
            while($fila = mysqli_fetch_array($resultado)){
                echo "<tr>";
                echo "<td>".$fila["idusuarios"]."</td>";
                echo "<td>".$fila["nombres"]."</td>";
                echo "<td>".$fila["apellidos"]."</td>";
                echo "<td>".$fila["cedula"]."</td>";
                echo "<td>".$fila["usuario"]."</td>";
                echo "<td>".$fila["password"]."</td>";
                echo "<td> <a href='?cargar=consultar&id=".$fila["idusuarios"]."'>Consultar</a> 
                    <a href='?cargar=editar&id=".$fila["idusuarios"]."'>Editar</a> 
                    <a href='?cargar=eliminar&id=".$fila["idusuarios"]."'>Eliminar</a>";
                echo "</tr>";
            }
        
        ?>
        <!-- <tr>
            <td>1</td>
            <td>Juan</td>
            <td>Pérez</td>
            <td>12345678</td>
            <td>jperez</td>
            <td>123456789</td>
            <td>
                <a href="?cargar=consultar">Consultar</a>
                <a href="?cargar=editar">Editar</a>
                <a href="?cargar=eliminar">Eliminar</a>
            </td>
        </tr>
        <tr> 
            <td>2</td>
            <td>María</td>
            <td>Gómez</td>
            <td>87654321</td>
            <td>mgomez</td>
            <td>123456789</td>
            <td>
                <a href="?cargar=consultar">Consultar</a>
                <a href="?cargar=editar">Editar</a>
                <a href="?cargar=eliminar">Eliminar</a>
            </td>
        </tr> -->
    </tbody>
</table>
</body>