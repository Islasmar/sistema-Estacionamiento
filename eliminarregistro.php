<?php 
include"conexion.php";
$id_registro = $_POST['id_registro'];

$sql = "DELETE FROM registro WHERE id_registro='". $id_registro ."'";


if($datos = mysqli_query($conexion, $sql)){
    echo "Registro eliminado correctamente";
}else{
    echo "Error: no se elimino el Registro";
}

?>