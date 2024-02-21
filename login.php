<?php
//echo "<h1> Control de Accesso</h1>";
include 'conexion.php';
session_start();
//echo $_POST['usuario'];

if (!isset($_POST['usuario'], $_POST['contrsena'])) {
    header('Location: index.php');
}
//Evitar conexión SQL.
if ($stmt = $conexion->prepare('SELECT id_encargado,correo,usuario,contrasena FROM encargado WHERE usuario = ?')) {
    //parámetros de enlace de la cadena s
    $stmt->bind_param('s', $_POST['usuario']);
    $stmt->execute();
}
//acá se valida si lo ingresado coincide con la base de datos.
$stmt->store_result();
if ($stmt->num_rows > 0) {
    $stmt->bind_result($id_encargado,$correo,$usuario, $contrasena);
    $stmt->fetch();
    if ($_POST['contrasena'] === $contrasena) {
        session_regenerate_id();
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['name'] = $_POST['usuario'];
        $_SESSION['correo'] = $correo;
        $_SESSION['id'] = $id_encargado;
        header('Location:menu.php');
    } else {
        echo "<script language='javascript'>alert('Tu contrseña es incorrecta'); location.href='index.php';</script>";
    }
} else {
    echo "<script language='javascript'>alert('Tu contrseña es incorrecta'); location.href='index.php';</script>";
}
?>
