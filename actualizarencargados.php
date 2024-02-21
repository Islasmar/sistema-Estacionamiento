<div class="contenidoform" id="container">
    <br>
    <br>
    <h2>Actualizar Encargado</h2>
    <?php
    include 'conexion.php';
    $id_encargado = $_POST['id_encargado'];
    $query = "SELECT * FROM encargado WHERE id_encargado='" . $id_encargado . "'";
    $ejecutar = $conexion->query($query);
    while ($result = $ejecutar->fetch_array()) {
    ?>
<form id="frmclientes" name="frmclientes">
        <br>
        <div class="form-outline mb-4">
            <label class="form-label" for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre"  value="<?php echo
                                                                                            $result['nombre']; ?>">
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="direccion">Dirección</label>
            <input type="text" class="form-control" name="direccion" id="direccion"  value="<?php echo
                                                                                            $result['direccion']; ?>">
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="telefono">Teléfono</label>
            <input type="phone" class="form-control" name="telefono" id="telefono"  value="<?php echo
                                                                                            $result['telefono']; ?>">
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="correo">Correo electrónico</label>
            <input type="email" class="form-control" name="correo" id="correo"  value="<?php echo
                                                                                            $result['correo']; ?>">
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="telefono">Usuario</label>
            <input type="text" class="form-control" name="usuario" id="usuario">
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="correo">Contraseña</label>
            <input type="password" class="form-control" name="contrasena" id="contrasena"  value="<?php echo
                                                                                          $result['contrasena']; ?>">
        </div>

            <div class="text-center pt-1 mb-5 pb-1">
                <input type="button" class="btn btn-primary btn-block fa-lg gradien-custom-2 mb-3" onclick="cancelar();" value="Cancelar">
                <input type="button" class="btn btn-primary btn-block fa-lg gradien-custom-2 mb-3" onclick="actualizarEncargados(<?php echo $id_encargado; ?>);" value="Actualizar">

            </div>
    </form>
    </div>
<?php
    }
?>