<div class="contenidoform" id="container">
    <br>
    <br>
    <h2>Actualizar Registro</h2>
    <?php
    include 'conexion.php';
    $id_registro = $_POST['id_registro'];
    $query = "SELECT * FROM registro WHERE id_registro='" . $id_registro . "'";
    $ejecutar = $conexion->query($query);
    while ($result = $ejecutar->fetch_array()) {
    ?>
        <form id="frmclientes" name="frmclientes">
            <br>
            <div class="form-outline mb-4">
                <label class="form-label" for="vehiculos">Vehiculos</label>
                <input  class="form-control" name="vehiculos" id="vehiculos" value="<?php echo
                                                                                                    $result['id_vehiculo']; ?>">
            </div>
            <div class="form-outline mb-4">
                <label class="form-label" for="cajon">Cajón</label>
                <input  class="form-control" name="cajon" id="cajon" value="<?php echo
                                                                                            $result['id_cajon']; ?>">
            </div>
            <div class="form-outline mb-4">
                <label class="form-label" for="tarifa">Tarifa</label>
                <input  class="form-control" name="tarifa" id="tarifa" value="<?php echo
                                                                                            $result['id_tarifa']; ?>">
            </div>

            <div class="text-center pt-1 mb-5 pb-1">
                <input type="button" class="btn btn-primary btn-block fa-lg gradien-custom-2 mb-3" onclick="cancelar();" value="Cancelar">
                <input type="button" class="btn btn-primary btn-block fa-lg gradien-custom-2 mb-3" onclick="actualizarRegistro(<?php echo $id_registro; ?>);" value="Actualizar">

            </div>
        </form>
</div>
<?php
    }
?>