<?php
    require 'db.php';
    //include("db.php");
    $usuarios = "SELECT * FROM Trabajo AS Tr 
                INNER JOIN LugarTrabajo AS LT ON Tr.IdLugarTrabajo = LT.IdLugarTrabajo
                INNER JOIN Usuarios AS Us ON Tr.IdUsuario = Us.IdUsuario
                INNER JOIN Estatus AS Es ON Tr.IdEstatus = Es.IdEstatus";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <title>CEBAYP</title>

</head>
<body>
    <div class="container-fluid bg-dark">
        <div class="row bg-dark">
            <nav class="navbar navbar-dark bg-dark">
                <div class="container-fluid">
                    <div class="col col-11 justify-content-start">
                        <a class="btn btn-dark btn-lg" href="mostrar_trabajos.php" role="button">Trabajos</a>
                        <a class="btn btn-dark btn-lg" href="mostrar_empleados.php" role="button">Empleados</a>
                        <a class="btn btn-dark btn-lg" href="index.php" role="button">Inventario</a>
                    </div>
                    <div class="col col-1 justify-content-end">
                        <a class="btn btn-dark btn-sm" href="index.php" role="button">Cerrar Sesion</a>
                    </div>
                    
                    
                </div>
            </nav>
        </div>
    </div>
    <div class="container bg-white">
        <div class="row bg-white">
            <div class="col-12 bg-white">
                <div class="row">
                    <h1 class="text-center">TRABAJOS</h1>
                </div>
                <div class="row">
                    <table class="table table-bordered border-dark m-2">
                        <thead>
                            <tr>
                                <th scope="col">Trabajo</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Ubicacion</th>
                                <th scope="col">Trabajador</th>
                                <th scope="col">Estatus</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php $resultado = mysqli_query($con, $usuarios);
                                while($row = mysqli_fetch_assoc($resultado)) { ?>
                                <tr>
                                    <th scope="row"><?php echo $row["NombreTrabajo"]; ?></th>
                                    <th scope="row"><?php echo $row["Descripcion"]; ?></th>
                                    <th scope="row"><?php echo $row["NombreLugarTrabajo"]; ?></th>
                                    <th scope="row"><?php echo $row["Nombre"]; ?></th>
                                    <th scope="row"><?php echo $row["Estatus"]; ?></th>
                                    <th>
                                        <a href="editar_trabajo.php?id=<?php echo $row['IdTrabajo'] ?>" class="btn btn-primary">Editar</a>
                                        <a href="eliminar_trabajo.php?id=<?php echo $row['IdTrabajo'] ?>" class="btn btn-danger">Eliminar</a>
                                    </th>
                                </tr>
                                
                                <?php } mysqli_free_result($resultado); ?>
                        </tbody>
                    </table>
                </div>
                <div class="row-4 text-center">
                    <a href="./agregar_trabajo.php" class="btn btn-dark btn-lg">Agregar Trabajo</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>