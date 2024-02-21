<div class="contenidoform">
    <br>
    <br>
    <form id="frmclientes" name="frmclientes">
        <h3>Registrar Encargado</h3>
        <br>
        <div class="form-outline mb-4">
            <label class="form-label" for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre">
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="direccion">Dirección</label>
            <input type="text" class="form-control" name="direccion" id="direccion">
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="telefono">Teléfono</label>
            <input type="phone" class="form-control" name="telefono" id="telefono">
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="correo">Correo electrónico</label>
            <input type="email" class="form-control" name="correo" id="correo">
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="telefono">Usuario</label>
            <input type="text" class="form-control" name="usuario" id="usuario">
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="correo">Contraseña</label>
            <input type="password" class="form-control" name="contrasena" id="contrasena">
        </div>

        <div class="text-center pt-1 mb-5 pb-1">
            <input type="button" class="btn btn-primary btn-block fa-lg gradien-custom-2 mb-3" onclick="registrarEncargados();" value="Registrar">
        </div>
    </form>
    <div class="container" id="result">
        <?php
        include 'consultarencargados.php';
        ?>

    </div>