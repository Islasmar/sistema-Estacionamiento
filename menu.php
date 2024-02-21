<?php  
session_start();
$idusuarioM=$_SESSION['id'];
$correoM=$_SESSION['correo'];

if (!isset($_SESSION['loggedin'])){
    echo '<script language ="javascript">alert("Tienes que acceder con tu usario y contraseña");location.href="index.php";</script>';
    exit;
}else{
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Control de IoT</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="scripts/js/jquery.min.js"></script>
    <link rel=" stylesheet" href="css/estilos.css">
</head>

<body>
    <div class="sidenav">
        <a href="#" onclick="cargarDiv('#contenido','inicio.php');">Inicio</a>
        <a href="#" onclick="cargarDiv('#contenido','registrar.php');">Registro</a>
        <a href="#" onclick="cargarDiv('#contenido','cajones.php');">Cajones</a>
        <a href="#" onclick="cargarDiv('#contenido','clientes.php');">Clientes</a>
        <a href="#" onclick="cargarDiv('#contenido','vehiculo.php');">Vehículos</a>
        <a href="#" onclick="cargarDiv('#contenido','tarifas.php');">Tarifas</a>
        <a href="#" onclick="cargarDiv('#contenido','encargados.php');">Encargados</a>
        <a href="#" onclick="cargarDiv('#contenido','sensorhumedad.php');">Sensor de Humedad</a>
        <a href="#" onclick="cargarDiv('#contenido','sensorproximidad.php');">Sensor de Proximidad</a>
        <a href="#">Reportes</a>
        <a href="#" onclick="salir();"><span class="material-symbols-outlined"></span>Salir</a>
    </div>
    <div class="main">
        <center ><h2 class="titulo">Bienvenido al sistema de Estacionamiento</h2>
        <h4>Bienvenido <?php echo $correoM?></h4></center>
        <div class="w3-container" id="contenido">
        <?php
        include 'inicio.php'
        ?>
        </div>

    </div>
    <script src="scripts/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="scripts/js/funciones.js"></script>
</body>
</html>
<?php
}
?>