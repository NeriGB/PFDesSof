<?php
    require 'db.php';

    

    $id = $_POST['id'];
    $nombre = $_POST["NombreTrabajo"];
    $descripcion = $_POST["Descripcion"];
    $idlugartrabajo = $_POST["IdLugarTrabajo"];
    $idusuario = $_POST["IdUsuario"];
    $idestatus = $_POST["IdEstatus"];
    

    $editarE = "UPDATE Trabajo SET NombreTrabajo='$nombre', Descripcion='$descripcion', 
                IdLugarTrabajo='$idlugartrabajo', IdUsuario='$idusuario', IdEstatus='$idestatus' WHERE IdTrabajo='$id'";
    $resultado = mysqli_query($con, $editarE);

    if($resultado === TRUE)
    {
        header("location:mostrar_trabajos.php");
    }
    else
    {
        echo "EMPLEADO NO ACTUALIZADO";
    };

    //$row = mysqli_fetch_assoc($resultado);
?>