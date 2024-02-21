<?php 
include"conexion.php";
$id_proximidad = $_POST['id_proximidad'];

$sql = "DELETE FROM sensor_proximidad WHERE id_proximidad='". $id_proximidad ."'";


if($datos = mysqli_query($conexion, $sql)){
    echo "Sensor Proximidad eliminado correctamente";
}else{
    echo "Error: no se elimino el registro de Proximidad";
}

?>