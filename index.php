<?php 

/*echo "Test de funcionamineto de php";
include 'login.php';
include 'pie.php';
$nombre = 'Carlos';
echo $nombre;
echo '<br>';
$Nombre = 'Jose';
echo "$nombre, $Nombre";
echo "<br>Mi nombre es: $nombre";

$valor1 = 20;
$valor2 = 30;
echo '<br>';
echo $valor1 + $valor2;

$val3 = 34.5;
$val4 = 2.5;

echo "<br>".$val3 * $val4;

$mayorEdad = true;

function suma($valor1, $valor2) {

    $res=$valor1+ $valor2;
    echo "El resultado de la suma es: $res";
    return $res;

}

function resta() {

}
function multiplicacion() {

}
suma(12, 56);
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet " href="css/estilos.css">
</head>
<body>
<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="imagenes/logo.png"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Bienvenido al Sistema</h4>
                </div>

                <form action="login.php" method="post">
                  <p>Ingresa a tu Cuenta</p>

                  <div class="form-outline mb-4">
                    <input type="text" id="usuario" name="usuario" class="form-control"
                      placeholder="Numero de télefono o email" />
                    <label class="form-label" for="form2Example11">Nombre de Usuario</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="contrasena" name="contrasena" class="form-control" />
                    <label class="form-label" for="form2Example22">Contraseña</label>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log
                      in</button>
                    <a class="text-muted" href="#!">Olvidaste tu password?</a>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">No tienes cuenta?</p>
                    <button type="button" class="btn btn-outline-danger">Crea una cuenta</button>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a company</h4>
                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <script src="scripts/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
