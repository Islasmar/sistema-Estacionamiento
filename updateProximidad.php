<?php 
include'conexion.php';
$id_proximidad = $_POST['id_proximidad'];
$distancia = $_POST['distancia'];
$status = $_POST['status'];


$sql = "UPDATE sensor_proximidad SET distancia='" . $distancia . "', status='" . $status . "' WHERE id_proximidad = '$id_proximidad'";

if($datos = mysqli_query($conexion, $sql)){
    echo "Datos actualizados correctamente";
}else{
    echo "Error al actualizar";
}
?>