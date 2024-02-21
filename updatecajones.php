<?php 
include'conexion.php';
$id_cajon = $_POST['id_cajon'];
$numero = $_POST['numero'];
$status = $_POST['status'];


$sql = "UPDATE cajon SET numero='" . $numero . "', status='" . $status . "'";

if($datos = mysqli_query($conexion, $sql)){
    echo "Datos actualizados correctamente";
}else{
    echo "Error al actualizar";
}
?>
