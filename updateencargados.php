<?php 
include'conexion.php';
$id_encargado = $_POST['id_encargado'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];


$sql = "UPDATE encargado SET nombre='" . $nombre . "', direccion='" . $direccion . "', telefono='" . $telefono . "', correo='" . $correo . "', usuario='".$usuario."', WHERE id_encargado='" . $id_encargado . "'";

if($datos = mysqli_query($conexion, $sql)){
    echo "Datos actualizados correctamente";
}else{
    echo "Error al actualizar";
}
?>