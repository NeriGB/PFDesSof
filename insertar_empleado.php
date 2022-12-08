<?php
    require 'db.php';
    $estatus = "SELECT * FROM Trabajo AS Tr 
                INNER JOIN LugarTrabajo AS LT ON Tr.IdLugarTrabajo = LT.IdLugarTrabajo
                INNER JOIN Usuarios AS Us ON Tr.IdUsuario = Us.IdUsuario
                INNER JOIN Estatus AS Es ON Tr.IdEstatus = Es.IdEstatus";

    $usuario = $_POST["Usuario"];
    $nombre = $_POST["Nombre"];
    $apellidop = $_POST["ApellidoP"];
    $apellidom = $_POST["ApellidoM"];
    $contraseña = $_POST["Contraseña"];
    $idpuesto = $_POST["IdPuesto"];

    $insertar ="INSERT INTO `Usuarios` (`IdUsuario`, `Usuario`, `Nombre`, `ApellidoM`, `ApellidoP`, `Contraseña`, `IdPuesto`)
                VALUES (NULL, '$usuario', '$nombre', '$apellidom', '$apellidop', '$contraseña', '$idpuesto')";


    $resultado = mysqli_query($con, $insertar);

    if($resultado === TRUE)
    {
        header("location:mostrar_empleados.php");
    }
    else
    {
        echo "DATOS NO INGRESADOS";
    }

    mysqli_free_result($resultado);
?>