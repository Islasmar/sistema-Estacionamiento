<?php 
include'conexion.php';
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$sql = "INSERT INTO encargado (nombre, direccion, telefono, correo,usuario,contrasena)  VALUES('" . $nombre . "','" . $direccion . "','" . $telefono . "','" . $correo . "','" . $usuario . "','" . $contrasena . "')";

if($datos = mysqli_query($conexion, $sql)){
    echo "Datos guardados correctamente";
}else{
    echo "Error: no se guardó correctamente";
}
?>