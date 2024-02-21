<?php
include 'conexion.php';

$id_cajon = $_POST['id_cajon'];

$query = "UPDATE cajon SET status = 0, ocupado = 0  WHERE id_cajon = '$id_cajon'";
if ($datos = mysqli_query($conexion, $query)) {
    date_default_timezone_set("America/Mexico_City");
    $fechaSalida = date("Y-m-d");
    $horaSalida = date("H:i:s");
    
    $query2 = "UPDATE registro SET fechaSalida = '$fechaSalida', horaSalida = '$horaSalida' WHERE id_cajon = '$id_cajon' AND fechaSalida IS NULL";
    
    if ($datos2 = mysqli_query($conexion, $query2)) {
        echo "Datos actualizados correctamente";
    } else {
        echo "Error al actualizar";
    }
} else {
    echo "Error al actualizar";
}
?>
