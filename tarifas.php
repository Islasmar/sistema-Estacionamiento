<div class="contenidoform">
    <br>
    <br>
    <form id="frmclientes" name="frmclientes">
        <h3>Registrar Tarifas</h3>
        <br>
        <div class="form-outline mb-4">
            <label class="form-label" for="nombre">Tarifa</label>
            <input type="text" class="form-control" name="tarifa" id="tarifa">
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="direccion">Monto</label>
            <input type="number" class="form-control" name="monto" id="monto">
        </div>

        <div class="text-center pt-1 mb-5 pb-1">
            <input type="button" class="btn btn-primary btn-block fa-lg gradien-custom-2 mb-3" onclick="registrarTarifa();" value="Registrar">
        </div>
    </form>
    <div class="container" id="result">
        <?php
        include 'consultartarifas.php';
        ?>

</div>