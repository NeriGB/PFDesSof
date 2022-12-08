<?php
    require 'db.php';
    //include("db.php");
    $usuarios = "SELECT * FROM Usuarios AS Us 
                INNER JOIN Puestos AS Pu ON Us.IdPuesto = Pu.IdPuesto";

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
                    <h1 class="text-center">EMPLEADOS</h1>
                </div>
                <div class="row">
                    <table class="table table-bordered border-dark m-2">
                        <thead>
                            <tr>
                                <th scope="col">Usuario</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido Paterno</th>
                                <th scope="col">Apellido Materno</th>
                                <th scope="col">Puesto</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php $resultado = mysqli_query($con, $usuarios);
                                while($row = mysqli_fetch_assoc($resultado)) { ?>
                                <tr>
                                    <th scope="row"><?php echo $row["Usuario"]; ?></th>
                                    <th scope="row"><?php echo $row["Nombre"]; ?></th>
                                    <th scope="row"><?php echo $row["ApellidoP"]; ?></th>
                                    <th scope="row"><?php echo $row["ApellidoM"]; ?></th>
                                    <th scope="row"><?php echo $row["NombrePue"]; ?></th>
                                    <th>
                                        <a href="editar_empleado.php?id=<?php echo $row['IdUsuario'] ?>" class="btn btn-primary">Editar</a>
                                        <a href="eliminar_empleado.php?id=<?php echo $row['IdUsuario'] ?>" class="btn btn-danger">Eliminar</a>
                                    </th>
                                </tr>
                                
                                <?php } mysqli_free_result($resultado); ?>
                        </tbody>
                    </table>
                </div>
                <div class="row-4 text-center">
                    <a href="./agregar_empleado.php" class="btn btn-dark btn-lg">Agregar Empleado</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>