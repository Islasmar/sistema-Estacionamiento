<?php 
include"conexion.php";
$id_vehiculo = $_POST['id_vehiculo'];

$sql = "DELETE FROM vehiculo WHERE id_vehiculo='". $id_vehiculo ."'";


if($datos = mysqli_query($conexion, $sql)){
    echo "Vehiculo eliminado correctamente";
}else{
    echo "Error: no se elimino el vehiculo";
}

?>