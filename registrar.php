<div class="contenidoform">
    <br>
    <br>
    <form id="frmclientes" name="frmclientes">
        <h3>Registros uso de Estacionamiento</h3>
        <br>
        <div class="form-outline mb-4">
            <label class="form-label" for="vehiculos">Vehiculos</label>
            <select class="form-control" name="id_vehiculo" id="id_vehiculo">
                <option value="">Seleccione un vehículo</option>
                <?php
                include 'conexion.php';
                $query = "SELECT id_vehiculo,matricula FROM vehiculo";
                $ejecutar = $conexion->query($query);
                while ($result = $ejecutar->fetch_array()) {
                    echo "<option value='" . $result['id_vehiculo'] . "'>" . $result['matricula'] . "<option>";
                }
                ?>
            </select>
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="cajones">Cajones</label>
            <select class="form-control" name="id_cajon" id="id_cajon">
                <option value="">Seleccione un cajon</option>
                <?php
                $query = "SELECT id_cajon,numero FROM cajon WHERE status !=1";
                $ejecutar = $conexion->query($query);
                while ($result = $ejecutar->fetch_array()) {
                    echo "<option value='" . $result['id_cajon'] . "'>" . $result['numero'] . "<option>";
                }
                ?>
            </select>
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="tarifas">Tarifa</label>
            <select class="form-control" name="id_tarifa" id="id_tarifa">
                <option value="">Seleccione una tarifa</option>
                <?php
                $query = "SELECT id_tarifa,tarifa,monto FROM tarifas";
                $ejecutar = $conexion->query($query);
                while ($result = $ejecutar->fetch_array()) {
                    echo "<option value='" . $result['id_tarifa'] . "'>" . $result['tarifa'] . ".-" . $result['monto'] . "<option>";
                }
                ?>
            </select>
        </div>

        <div class="text-center pt-1 mb-5 pb-1">
            <input type="button" class="btn btn-primary btn-block fa-lg gradien-custom-2 mb-3" onclick="registrarAcceso();" value="Registrar">

        </div>
    </form>
    <div class="container">
        <?php
        include 'consultarregistro.php';
        ?>
    </div>