<?php
    $controlador = new Controlador();
    $resultado = $controlador -> index();

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
        <tr> <!--USUARIO 1-->
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
        <tr> <!--USUARIO 2-->
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
        </tr>
    </tbody>
</table>
</body>