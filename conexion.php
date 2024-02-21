<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'estacionamiento';

$conexion = mysqli_connect($DATABASE_HOST,$DATABASE_USER,$DATABASE_PASS,$DATABASE_NAME);

if(mysqli_connect_error()){
    //Si se encuentra error en la conexión.
    exit('Fallo en la conexión de MySQL:' . mysqli_connect_error());
}else{
    //mensaje de exito
  //  echo 'Conexión exitosa';
}

?>