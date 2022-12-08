<?php
    
    $server = 'db';
    $username = 'root';
    $password = 'aaaa';
    $database = 'TALLER';
    /*
    $server = '35.173.140.192';
    $username = 'admin';
    $password = '123456789';
    $database = 'TALLER';
    */
    $con=new mysqli($server,$username,$password,$database);

    if($con->conect_errno){
        die('CONECCION FALLIDA'.$con->connect_error);
    }
    //echo "CONECION EXITOSA";
?>
