<div class="contenidoform" id="container">
    <br>
    <br>
    <h2>Actualizar Sensor</h2>
    <?php
    include 'conexion.php';
    $id_proximidad = $_POST['id_proximidad'];
    $query = "SELECT * FROM sensor_proximidad WHERE id_proximidad='" . $id_proximidad . "'";
    $ejecutar = $conexion->query($query);
    while ($result = $ejecutar->fetch_array()) {
    ?>
        <form id="frmclientes" name="frmclientes">
            <br>
            <div class="form-outline mb-4">
            <label class="form-label" for="numero">Distancia</label>
            <input type="number" class="form-control" name="distancia" id="distancia" value="<?php echo
                                                                                            $result['distancia']; ?>">
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="status">Status</label>
            <input type="boolean" class="form-control" name="status" id="status" value="<?php echo
                                                                                            $result['status']; ?>">
        </div>

            <div class="text-center pt-1 mb-5 pb-1">
                <input type="button" class="btn btn-primary btn-block fa-lg gradien-custom-2 mb-3" onclick="cancelar();" value="Cancelar">
                <input type="button" class="btn btn-primary btn-block fa-lg gradien-custom-2 mb-3" onclick="actualizarProximidad(<?php echo $id_proximidad; ?>);" value="Actualizar">

            </div>
        </form>
</div>
<?php
    }
?>