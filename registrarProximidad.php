<?php 
include'conexion.php';
$distancia = $_POST['distancia'];
$status = $_POST['status'];
date_default_timezone_set("America/Mexico_city");
$fechaRegistro = date("Y-m-d");
$horaRegistro = date("H:i:s");


$sql = "INSERT INTO sensor_proximidad(distancia, status, fechaRegistro,horaRegistro)VALUES('". $distancia . "', '".$status."','".$fechaRegistro."','".$horaRegistro."')";

if ($datos = mysqli_query($conexion, $sql)){
    echo "Datos guardados correctamente";
}else {
    echo "Error no se guardo correctamente";
}

?>