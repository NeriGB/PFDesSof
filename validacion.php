<?php

require 'db.php';
    
$usuario=$_POST['Usuario'];
$contraseña=$_POST['Contraseña'];
session_start();
$_SESSION['Usuario']=$usuario;


$consulta="SELECT * FROM Usuarios where Usuario='$usuario' and Contraseña='$contraseña'";
$resultado=mysqli_query($con,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:mostrar_trabajos.php");
}else{
    header("location:index.php");
}
mysqli_free_result($resultado);
mysqli_close($con);
