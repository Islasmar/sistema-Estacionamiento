<?php 
include"conexion.php";
$id_cliente = $_POST['id_cliente'];

$sql = "DELETE FROM cliente WHERE id_cliente='". $id_cliente ."'";


if($datos = mysqli_query($conexion, $sql)){
    echo "Cliente eliminado correctamente";
}else{
    echo "Error: no se elimino el cliente";
}

?>