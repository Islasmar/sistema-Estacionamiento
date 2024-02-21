<?php 
include 'conexion.php';
$idvehiculo = $_POST['id_vehiculo'];
$idcajon = $_POST['id_cajon'];
$idtarifa = $_POST['id_tarifa'];
date_default_timezone_set("America/Mexico_city");
$fechaini = date("Y-m-d");
$horaini = date("H:i:s");

$sql = "INSERT INTO registro(id_vehiculo, id_cajon, fechaIngreso,horaIngreso,id_tarifa)VALUES('". $idvehiculo . "', '".$idcajon."','".$fechaini."','".$horaini."','".$idtarifa."')";

if ($datos = mysqli_query($conexion, $sql)){
    $query = "UPDATE cajon SET ocupado = 1 , status= 1 WHERE id_cajon = '$idcajon'";
    if ($datos = mysqli_query($conexion, $query)) {
        echo 'Datos Registrados con Éxito';
    } else {
        echo 'Error al actualizar el estado del cajón';
    }
}else {
    echo "Error no se guardo correctamente";
}

?>