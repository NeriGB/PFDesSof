<?php
    require 'db.php';
    //include("db.php");
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
                <div class="container-fluid justify-content-start">
                    <a class="navbar-brand" href="index.php">CEBAYP</a>
                </div>
            </nav>
        </div>
    </div>
    <div class="container">
        <div class="card border-5 border-dark m-5">
            <div class="card-header text-center">
                <i class="fa-solid fa-circle-user fa-4x"></i>
                <h1 class="card-title">INGRESAR</h1>
            </div>
            <div class="card-body">
                <form action="validacion.php" method="POST">
                    <div class="input-group p-2">
                        <span class="input-group-text p-2">Usuario : </span>
                        <input type="number" name="Usuario" class="form-control">
                    </div>
                    <div class=" input-group p-2">
                        <label class="input-group-text p-2">Contraseña : </label>
                        <input type="password" name="Contraseña" class="form-control">
                    </div>
                    <div class="container p-2 top-100 start-100">
                        <button type="submit" class="btn btn-dark">ACCEDER</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
