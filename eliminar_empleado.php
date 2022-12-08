<?php
    require 'db.php';
    $id = $_REQUEST['id'];

    $eliminar = "DELETE FROM Usuarios WHERE IdUsuario = '$id'";
    $resultado = mysqli_query($con, $eliminar);

    if($resultado === TRUE)
    {
        header("location:mostrar_empleados.php");
    }
    else
    {
        echo "TRABAJADOR NO ELIMINADO";
    }

    $row = mysqli_fetch_assoc($resultado);
?>