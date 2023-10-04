<?php
include_once('conexion.php');

$isbn = $_GET['isbn'] ?? null;
$titulo = $_POST['titulo'] ?? null;

// ALTA PROBABILIDAD DE INJECCION SQL
if($isbn && $titulo){
    $sql = "UPDATE libros SET titulo='$titulo' WHERE isbn = '$isbn'";
    $resultado = $conexion->query($sql);
    if($resultado){
    echo "Se Modifico Correctamente";
    }else{
        echo "Intentelo Nuevamente";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Editar</title>
</head>
<body>
    <form action="editar.php" method="get">

        <label for="tit">TITULO</label>
        <input type="text" name="titulo" placeholder="Ingrese Titulo" id="tit"><br>

        <!-- <label for="gen">GENERO</label>
        <input type="text" name="genero" placeholder="Ingrese genero" id="gen"><br> -->
        <input type="submit" name="submit" value="Editar">
    </form>
</body>
</html>