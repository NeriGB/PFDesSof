<?php
    require 'db.php';
    $id = $_REQUEST['id'];

    $usuarios = "SELECT * FROM Usuarios AS Us 
                INNER JOIN Puestos AS Pu ON Us.IdPuesto = Pu.IdPuesto";
    $puesto ="SELECT * FROM Puestos";
    $editar = "SELECT * FROM Usuarios AS Us INNER JOIN Puestos AS Pu ON Us.IdPuesto = Pu.IdPuesto WHERE IdUsuario = '$id'";
    $resultado = mysqli_query($con, $editar);

    $row = mysqli_fetch_assoc($resultado);
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
    <div class="container">
        <div class="card border-5 border-dark m-5">
            <div class="card-header text-center">
                <i class="fa-solid fa-circle-user fa-4x"></i>
                <h1 class="card-title">EDITAR EMPLEADO</h1>
            </div>
                    <div class="card-body">
                            <form action="./editarE.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $row["IdUsuario"]; ?>">
                                <div class="input-group p-2">
                                    <span class="input-group-text p-2">Nombre(s) : </span>
                                    <input name="Nombre" type="text" class="form-control" value="<?php echo $row["Nombre"]; ?>">
                                </div>
                                <div class="input-group p-2">
                                    <span class="input-group-text p-2">Apellido Paterno : </span>
                                    <input name="ApellidoP" type="text" class="form-control" value="<?php echo $row["ApellidoP"]; ?>">
                                </div>
                                <div class="input-group p-2">
                                    <span class="input-group-text p-2">Apellido Materno : </span>
                                    <input name="ApellidoM" type="text" class="form-control" value="<?php echo $row["ApellidoM"]; ?>">
                                </div>
                                <div class="input-group p-2">
                                    <span class="input-group-text p-2">Usuario : </span>
                                    <input name="Usuario" type="number" class="form-control" value="<?php echo $row["Usuario"]; ?>">
                                </div>
                                <div class=" input-group p-2">
                                    <label class="input-group-text p-2">Puesto : </label>
                                    <select name="IdPuesto" class="form-select" >
                                    
                                    <?php $resultado = mysqli_query($con, $puesto);
                                    while($row = mysqli_fetch_assoc($resultado)) { ?>
                                        <option name="IdPuesto" value="<?php echo $row['IdPuesto'];?>"><?php echo $row['NombrePue'];?></option>
                                    <?php } mysqli_free_result($resultado); ?>
                                    </select>
                                </div>
                                <div class="container p-2 top-100 start-100">
                                    <a class="btn btn-dark btn-lg" href="mostrar_empleados.php">ATRAS</a>
                                    <button type="submit" class="btn btn-dark btn-lg">EDITAR</button>
                                </div>
                            </form>
                    </div>
        </div>
        </div>
</body>
</html>