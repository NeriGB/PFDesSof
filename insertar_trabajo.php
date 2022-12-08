<?php
    require 'db.php';
    $estatus = "SELECT * FROM Trabajo AS Tr 
                INNER JOIN LugarTrabajo AS LT ON Tr.IdLugarTrabajo = LT.IdLugarTrabajo
                INNER JOIN Usuarios AS Us ON Tr.IdUsuario = Us.IdUsuario
                INNER JOIN Estatus AS Es ON Tr.IdEstatus = Es.IdEstatus";

    $nombretrabajo = $_POST["NombreTrabajo"];
    $descripcion = $_POST["Descripcion"];
    $nombrelugartrabajo = $_POST["IdLugarTrabajo"];
    $nombre = $_POST["IdUsuario"];
    $estatus = $_POST["IdEstatus"];

    $insertar = "INSERT INTO `Trabajo` (`IdTrabajo`, `NombreTrabajo`, `Descripcion`, `IdLugarTrabajo`, `IdUsuario`, `IdEstatus`) 
                VALUES (NULL, '$nombretrabajo', '$descripcion', '$nombrelugartrabajo', '$nombre', '$estatus')";

    $resultado = mysqli_query($con, $insertar);

    if($resultado === TRUE)
    {
        header("location:mostrar_trabajos.php");
    }
    else
    {
        echo "DATOS NO INGRESADOS";
    }

    //mysqli_free_result($resultado);
?>