<div class="contenidoform" id="container">
    <br>
    <br>
    <h2>Actualizar Tarifas</h2>
    <?php
    include 'conexion.php';
    $Id_tarifa = $_POST['Id_tarifa'];
    $query = "SELECT * FROM tarifas WHERE Id_tarifa='" . $Id_tarifa . "'";
    $ejecutar = $conexion->query($query);
    while ($result = $ejecutar->fetch_array()) {
    ?>
<form id="frmclientes" name="frmclientes">
        <br>
        <div class="form-outline mb-4">
            <label class="form-label" for="nombre">Tarifa</label>
            <input type="text" class="form-control" name="tarifa" id="tarifa" value="<?php echo
                                                                                            $result['tarifa']; ?>">
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="direccion">Monto</label>
            <input type="number" class="form-control" name="monto" id="monto" value="<?php echo
                                                                                            $result['monto']; ?>">
        </div>

        <div class="text-center pt-1 mb-5 pb-1">
                <input type="button" class="btn btn-primary btn-block fa-lg gradien-custom-2 mb-3" onclick="cancelar();" value="Cancelar">
                <input type="button" class="btn btn-primary btn-block fa-lg gradien-custom-2 mb-3" onclick="actualizarTarifa(<?php echo $Id_tarifa; ?>);" value="Actualizar">

            </div>
    </form>
    </div>
<?php
    }
?>