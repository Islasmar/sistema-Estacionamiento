<div class="contenidoform" id="container">
    <br>
    <br>
    <h2>Actualizar Cajon</h2>
    <?php
    include 'conexion.php';
    $id_cajon = $_POST['id_cajon'];
    $query = "SELECT * FROM cajon WHERE id_cajon='" . $id_cajon . "'";
    $ejecutar = $conexion->query($query);
    while ($result = $ejecutar->fetch_array()) {
    ?>
    <form id="frmclientes" name="frmclientes">
        <br>
        <div class="form-outline mb-4">
            <label class="form-label" for="numero">Número</label>
            <input type="number" class="form-control" name="numero" id="numero" value="<?php echo
                                                                                            $result['numero']; ?>">
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="status">Estatus</label>
            <input type="text" class="form-control" name="status" id="status" value="<?php echo
                                                                                            $result['status']; ?>">
        </div>

        <div class="text-center pt-1 mb-5 pb-1">
                <input type="button" class="btn btn-primary btn-block fa-lg gradien-custom-2 mb-3" onclick="cancelar();" value="Cancelar">
                <input type="button" class="btn btn-primary btn-block fa-lg gradien-custom-2 mb-3" onclick="actualizarCajon(<?php echo $id_cajon; ?>);" value="Actualizar">

            </div>
    </form>
    </div>
<?php
    }
?>