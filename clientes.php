<div class="contenidoform">
    <br>
    <br>
    <form id="frmclientes" name="frmclientes">
        <h3>Registrar Clientes</h3>
        <br>
        <div class="form-outline mb-4">
            <label class="form-label" for="nombre">Nombre Completo</label>
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

        <div class="text-center pt-1 mb-5 pb-1">
            <input type="button" class="btn btn-primary btn-block fa-lg gradien-custom-2 mb-3" onclick="registrarCliente();" value="Registrar">

        </div>
    </form>
</div>
<div class="container" id="result">
    <?php
    include 'consultarcliente.php';
    ?>
</div>