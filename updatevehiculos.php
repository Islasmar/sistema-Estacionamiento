<?php 
include'conexion.php';
$id_vehiculo = $_POST['id_vehiculo'];
$matricula = $_POST['matricula'];
$modelo = $_POST['modelo'];
$tipo = $_POST['tipo'];


$sql = "UPDATE vehiculo SET matricula='" . $matricula . "',modelo='" . $modelo . "',tipo='" . $tipo . "' WHERE id_vehiculo='$id_vehiculo'" ;

if($datos = mysqli_query($conexion, $sql)){
    echo "Datos actualizados correctamente";
}else{
    echo "Error al actualizar",$sql;
}
?>
