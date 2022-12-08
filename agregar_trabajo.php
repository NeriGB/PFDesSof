<?php
    require 'db.php';
    //include("db.php");
    $estatus = "SELECT * FROM Trabajo AS Tr 
                INNER JOIN LugarTrabajo AS LT ON LT.IdLugarTrabajo = Tr.IdLugarTrabajo
                INNER JOIN Usuarios AS Us ON Tr.IdUsuario = Us.IdUsuario
                INNER JOIN Estatus AS Es ON Tr.IdEstatus = Es.IdEstatus";
    $estatus1 ="SELECT * FROM Estatus";
    $trabajador ="SELECT * FROM Usuarios";
    $lugar ="SELECT * FROM LugarTrabajo";
    
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
    
    <title>PF</title>

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
                <h1 class="card-title">AGREGAR TRABAJO</h1>
            </div>
                    <div class="card-body">
                            <form action="./insertar_trabajo.php" method="POST">
                                <div class="input-group p-2">
                                    <span class="input-group-text p-2">Nombre : </span>
                                    <input name="NombreTrabajo" type="text" class="form-control">
                                </div>
                                <div class="input-group p-2">
                                    <span class="input-group-text p-2">Descripcion : </span>
                                    <input name="Descripcion" type="text" class="form-control">
                                </div>
                                <div class=" input-group p-2">
                                    <label class="input-group-text p-2">Lugar : </label>
                                    <select name="IdLugarTrabajo" class="form-select">
                                    <option>Seleccionar...</option>
                                    <?php $resultado1 = mysqli_query($con, $lugar);
                                    while($row = mysqli_fetch_assoc($resultado1)) { ?>
                                        <option value="<?php echo $row['IdLugarTrabajo'];?>"><?php echo $row['NombreLugarTrabajo'];?></option>
                                    <?php } mysqli_free_result($resultado1); ?>
                                    </select>
                                </div>
                                <div class=" input-group p-2">
                                    <label class="input-group-text p-2">Trabajador : </label>
                                    <select name="IdUsuario" class="form-select">
                                    <option>Seleccionar...</option>
                                    <?php $resultado2 = mysqli_query($con, $trabajador);
                                    while($row = mysqli_fetch_assoc($resultado2)) { ?>
                                        <option value="<?php echo $row['IdUsuario'];?>"><?php echo $row['Nombre'];?></option>
                                    <?php } mysqli_free_result($resultado2); ?>
                                    </select>
                                </div>
                                <div class=" input-group p-2">
                                    <label class="input-group-text p-2">Estatus : </label>
                                    <select name="IdEstatus" class="form-select">
                                    <option>Seleccionar...</option>
                                    <?php $resultado3 = mysqli_query($con, $estatus1);
                                    while($row = mysqli_fetch_assoc($resultado3)) { ?>
                                        <option value="<?php echo $row['IdEstatus']?>"><?php echo $row['Estatus']?></option>
                                    <?php } mysqli_free_result($resultado3); ?>
                                    </select>
                                </div>
                                <div class="container p-2 top-100 start-100">
                                    <a class="btn btn-dark btn-lg" href="mostrar_empleados.php">ATRAS</a>
                                    <button type="submit" class="btn btn-dark btn-lg">REGISTRAR</button>
                                </div>
                            </form>
                    </div>
        </div>
        </div>
</body>
</html>