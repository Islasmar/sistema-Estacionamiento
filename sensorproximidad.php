<div class="contenidoform">
    <br>
    <br>
    <form id="frmclientes" name="frmclientes">
        <h3>Registrar Sensor de Proximidad</h3>
        <br>
        <div class="form-outline mb-4">
            <label class="form-label" for="numero">Distancia</label>
            <input type="number" class="form-control" name="distancia" id="distancia">
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="status">Status</label>
            <input type="boolean" class="form-control" name="status" id="status">
        </div>

        <div class="text-center pt-1 mb-5 pb-1">
            <input type="button" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" onclick="registrarProximidad();" value="Registrar">

        </div>
    </form>
    <div class="container" id="result">
        <?php
        include 'consultarProximidad.php';
        ?>

    </div>