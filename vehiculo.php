<div class="contenidoform">
    <br>
    <br>
    <form id="frmvehiculos" name="frmvehiculos">
        <h3>Registrar Vehículos</h3>
        <br>
        <div class="form-outline mb-4">
            <label class="form-label" for="id_cliente">Cliente</label>
            <select class="form-control"="id_cliente" id="id_cliente">
                <option value="">Seleccione un cliente</option>
                <?php
                include 'conexion.php';
                $query = "SELECT id_cliente, nombre FROM cliente";
                $ejecutar = $conexion->query($query);
                while ($result = $ejecutar->fetch_array()) {
                    echo "<option value='" . $result['id_cliente'] . "'>" . $result['nombre'] . "</option>";
                }
                ?>
            </select>

            <br>
            <div class="form-outline mb-4">
                <label class="form-label" for="matricula">Matricula</label>
                <input type="text" class="form-control" name="matricula" id="matricula">
            </div>
            <div class="form-outline mb-4">
                <label class="form-label" for="modelo">Modelo</label>
                <input type="text" class="form-control" name="modelo" id="modelo">
            </div>
            <div class="form-outline mb-4">
                <label class="form-label" for="tipo">Tipo</label>
                <input type="phone" class="form-control" name="tipo" id="tipo">
            </div>

            <div class="text-center pt-1 mb-5 pb-1">
                <input type="button" class="btn btn-primary btn-block fa-lg gradien-custom-2 mb-3" onclick="registrarVehiculo();" value="Registrar">
            </div>
    </form>
    <div class="container" id="result">
        <?php
        include 'consultarvehiculo.php';
        ?>
    </div>