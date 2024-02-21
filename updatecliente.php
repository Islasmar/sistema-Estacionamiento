<?php 
include'conexion.php';
$id_cliente = $_POST['id_cliente'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

$sql = "UPDATE cliente SET nombre='" . $nombre . "', direccion='" . $direccion . "', telefono='" . $telefono . "', correo='" . $correo . "' WHERE id_cliente='" . $id_cliente . "'";

if($datos = mysqli_query($conexion, $sql)){
    echo "Datos actualizados correctamente";
}else{
    echo "Error al actualizar";
}
?>

