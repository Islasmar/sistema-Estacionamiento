<?php 
include 'conexion.php';
$numero = $_POST['numero'];
$status = $_POST['status'];

$sql = "INSERT INTO cajon (numero,status)  VALUES('" . $numero . "','" . $status . "')";

if($datos = mysqli_query($conexion, $sql)){
    echo "Datos guardados correctamente";
}else{
    echo "Error: no se guardó correctamente";
}
?>

