<?php
include_once('conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CRUD CON VISTA/CSS/style.css">
    <title>CRUD libros</title>
</head>
<body>
    <table>
        <tr>
            <th>ISBN</th>
            <th>TITULO</th>
            <th>GENERO</th>
            <th>CODIGO AUTOR</th>
            <th></th>
        </tr>
        <?php
        $sql = "SELECT * FROM libros";
        $sel = $conexion ->query($sql);
        while ($fila = $sel ->fetch_assoc()){?>
            <tr>
                <td><?php echo $fila['isbn'] ?></td>
                <td><?php echo $fila['titulo'] ?></td>
                <td><?php echo $fila['genero'] ?></td>
                <td><?php echo $fila['cod_autor'] ?></td>
                <td><a href="editar.php?isbn=<?php echo $fila['isbn'] ?>">Editar</a></td>
                <td><a href="eliminar.php?isbn=<?php echo $fila['isbn'] ?>">Eliminar</a></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>