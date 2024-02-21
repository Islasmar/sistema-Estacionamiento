<?php 
include"conexion.php";
$id_encargado = $_POST['id_encargado'];

$sql = "DELETE FROM encargado WHERE id_encargado='". $id_encargado ."'";


if($datos = mysqli_query($conexion, $sql)){
    echo "Encargado eliminado correctamente";
}else{
    echo "Error: no se elimino el encargado";
}

?>