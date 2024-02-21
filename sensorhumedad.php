<div class="contenidoform">
    <br>
    <br>
    <form id="frmclientes" name="frmclientes">
        <h3>Registrar Sensor Humedad</h3>
        <br>
        <div class="form-outline mb-4">
            <label class="form-label" for="humedad">Humedad</label>
            <input type="number" class="form-control" name="humedad" id="humedad">
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="temperatura">Temperatura</label>
            <input type="numbre" class="form-control" name="temperatura" id="temperatura">
        </div>

        <div class="text-center pt-1 mb-5 pb-1">
            <input type="button" class="btn btn-primary btn-block fa-lg gradien-custom-2 mb-3" onclick="registrarSensor();" value="Registrar">

        </div>
    </form>
</div>
<div class="container" id="result">
    <?php
    include 'consultarsensor.php';
    ?>
</div>