<?php
    require 'db.php';

    

    $id = $_POST['id'];
    $nombre = $_POST["Nombre"];
    $apellidop = $_POST["ApellidoP"];
    $apellidom = $_POST["ApellidoM"];
    $usuario = $_POST["Usuario"];
    $idpuesto = $_POST["IdPuesto"];
    

    $editarE = "UPDATE Usuarios SET Nombre='$nombre', ApellidoP='$apellidop', ApellidoM='$apellidom', Usuario='$usuario', IdPuesto='$idpuesto' WHERE IdUsuario='$id'";
    $resultado = mysqli_query($con, $editarE);

    if($resultado === TRUE)
    {
        header("location:mostrar_empleados.php");
    }
    else
    {
        echo "EMPLEADO NO ACTUALIZADO";
    };

    $row = mysqli_fetch_assoc($resultado);
?>