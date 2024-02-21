<?php 
include"conexion.php";
$id_sensor = $_POST['id_sensor'];

$sql = "DELETE FROM sensor_humedad WHERE id_sensor='". $id_sensor ."'";


if($datos = mysqli_query($conexion, $sql)){
    echo "Registros de sensor eliminado correctamente";
}else{
    echo "Error: no se elimino el Registro";
}

?>