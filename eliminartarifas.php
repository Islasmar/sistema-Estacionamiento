<?php 
include"conexion.php";
$id_tarifa = $_POST['Id_tarifa'];

$sql = "DELETE FROM tarifas WHERE Id_tarifa='". $id_tarifa ."'";


if($datos = mysqli_query($conexion, $sql)){
    echo "Tarifa eliminado correctamente";
}else{
    echo "Error: no se elimino la Tarifa";
}

?>