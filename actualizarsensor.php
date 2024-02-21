<div class="contenidoform" id="container">
    <br>
    <br>
    <h2>Actualizar Sensor</h2>
    <?php
    include 'conexion.php';
    $id_sensor = $_POST['id_sensor'];
    $query = "SELECT * FROM sensor_humedad WHERE id_sensor='" . $id_sensor . "'";
    $ejecutar = $conexion->query($query);
    while ($result = $ejecutar->fetch_array()) {
    ?>
        <form id="frmclientes" name="frmclientes">
            <br>

            <div class="form-outline mb-4">
                <label class="form-label" for="humedad">Humedad</label>
                <input type="number" class="form-control" name="humedad" id="humedad" value="<?php echo
                                                                                                $result['humedad']; ?>">
            </div>
            <div class=" form-outline mb-4">
                <label class="form-label" for="temperatura">Temperatura</label>
                <input type="numbre" class="form-control" name="temperatura" id="temperatura" value="<?php echo
                                                                                                        $result['temperatura']; ?>">
            </div>

            <div class=" text-center pt-1 mb-5 pb-1">
                <input type="button" class="btn btn-primary btn-block fa-lg gradien-custom-2 mb-3" onclick="cancelar();" value="Cancelar">
                <input type="button" class="btn btn-primary btn-block fa-lg gradien-custom-2 mb-3" onclick="actualizarSensor(<?php echo $id_sensor; ?>);" value="Actualizar">

            </div>
        </form>
</div>
<?php
    }
?>