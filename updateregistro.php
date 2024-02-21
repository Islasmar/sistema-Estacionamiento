<?php 
include'conexion.php';
$id_vehiculo = $_POST['id_vehiculo'];
$id_cajon = $_POST['id_cajon'];
$id_tarifa = $_POST['id_tarifa'];

$sql = "UPDATE registro SET id_vehiculo='".$id_vehiculo."', id_cajon='".$id_cajon."', id_tarifa='".$id_tarifa."'";

if ($datos = mysqli_query($conexion, $sql)){
    echo "Registro actualizados correctamente",$sql;
}else {
    echo "Error no se actualizó el registro correctamente";
}

?>