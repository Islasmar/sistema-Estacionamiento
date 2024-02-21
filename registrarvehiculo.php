<?php 
include'conexion.php';
$id_cliente = $_POST['id_cliente'];
$matricula = $_POST['matricula'];
$modelo = $_POST['modelo'];
$tipo = $_POST['tipo'];


$sql = "INSERT INTO vehiculo (id_cliente,matricula, modelo, tipo)  VALUES('" . $id_cliente . "','" . $matricula . "','" . $modelo . "','" . $tipo . "')";

if($datos = mysqli_query($conexion, $sql)){
    echo "Datos guardados correctamente".$sql;
}else{
    echo "Error: no se guardó correctamente";
}
?>

