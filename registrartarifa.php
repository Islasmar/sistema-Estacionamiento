<?php 
include 'conexion.php';
$tarifa = $_POST['tarifa'];
$monto = $_POST['monto'];

$sql = "INSERT INTO tarifas (tarifa,monto)  VALUES('" . $tarifa . "','" . $monto . "')";

if($datos = mysqli_query($conexion, $sql)){
    echo "Datos guardados correctamente";
}else{
    echo "Error: no se guardó correctamente";
}
?>