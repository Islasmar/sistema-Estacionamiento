<div class="contenidoform">
    <br>
    <br>
    <form id="frmclientes" name="frmclientes">
        <h3>Registrar Cajones</h3>
        <br>
        <div class="form-outline mb-4">
            <label class="form-label" for="numero">Número</label>
            <input type="number" class="form-control" name="numero" id="numero">
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="status">Estatus</label>
            <input type="boolean" class="form-control" name="status" id="status">
        </div>

        <div class="text-center pt-1 mb-5 pb-1">
            <input type="button" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" onclick="registrarCajon();" value="Registrar">

        </div>
    </form>
    <div class="container" id="result">
        <?php
        include 'consultarcajones.php';
        ?>

    </div>