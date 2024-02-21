<div class="contenidoform" id="container">
    <br>
    <br>
    <h2>Actualizar Vehiculo</h2>
    <?php
    include 'conexion.php';
    $id_vehiculo = $_POST['id_vehiculo'];
    $query = "SELECT * FROM vehiculo WHERE id_vehiculo='" . $id_vehiculo . "'";
    $ejecutar = $conexion->query($query);
    while ($result = $ejecutar->fetch_array()) {
    ?>
        <form id="frmvehiculos" name="frmvehiculos">
            <br>
                <br>
                <div class="form-outline mb-4">
                    <label class="form-label" for="matricula">Matricula</label>
                    <input type="text" class="form-control" name="matricula" id="matricula" value="<?php echo
                                                                                                    $result['matricula']; ?>">
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="modelo">Modelo</label>
                    <input type="text" class="form-control" name="modelo" id="modelo" value="<?php echo
                                                                                                $result['modelo']; ?>">
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="tipo">Tipo</label>
                    <input type="phone" class="form-control" name="tipo" id="tipo" value="<?php echo
                                                                                            $result['tipo']; ?>">
                </div>

                <div class="text-center pt-1 mb-5 pb-1">
                    <input type="button" class="btn btn-primary btn-block fa-lg gradien-custom-2 mb-3" onclick="cancelar();" value="Cancelar">
                    <input type="button" class="btn btn-primary btn-block fa-lg gradien-custom-2 mb-3" onclick="actualizarVehiculo(<?php echo $id_vehiculo; ?>);" value="Actualizar">
                </div>
        </form>
</div>
<?php
    }
?>