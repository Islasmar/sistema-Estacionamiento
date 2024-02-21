<?php 
include 'conexion.php';
$humedad = $_POST['humedad'];
$temperatura = $_POST['temperatura'];
date_default_timezone_set("America/Mexico_city");
$fecha_registro = date("Y-m-d");


$sql = "INSERT INTO sensor_humedad(humedad, temperatura, fecha_registro)VALUES('". $humedad . "', '".$temperatura."','".$fecha_registro."')";

if ($datos = mysqli_query($conexion, $sql)){
    echo "Datos guardados correctamente";
}else {
    echo "Error no se guardo correctamente";
}

?>