<?php
include_once("conexion.php");

$isbn = $_GET['isbn'] ?? null;

// ALTA PROBABILIDAD DE INJECCION SQL
if($isbn){
    $sql = "DELETE FROM libros WHERE isbn = $isbn";
    $resultado = $conexion->query($sql);
    if($resultado){
    echo "Se Elimino Correctamente";
    }else{
        echo "Intentelo Nuevamente";
    }
}
?>
