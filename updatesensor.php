<?php 
include'conexion.php';
$id_sensor = $_POST['id_sensor'];
$humedad = $_POST['humedad'];
$temperatura = $_POST['temperatura'];


$sql = "UPDATE sensor_humedad SET humedad='" . $humedad . "', temperatura='" . $temperatura . "' WHERE id_sensor = '$id_sensor'";

if($datos = mysqli_query($conexion, $sql)){
    echo "Datos actualizados correctamente";
}else{
    echo "Error al actualizar";
}
?>
