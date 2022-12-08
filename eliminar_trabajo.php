<?php
    require 'db.php';
    $id = $_REQUEST['id'];

    $eliminar = "DELETE FROM Trabajo WHERE IdTrabajo = '$id'";
    $resultado = mysqli_query($con, $eliminar);

    if($resultado === TRUE)
    {
        header("location:mostrar_trabajos.php");
    }
    else
    {
        echo "TRABAJO NO ELIMINADO";
    }

    $row = mysqli_fetch_assoc($resultado);
?>