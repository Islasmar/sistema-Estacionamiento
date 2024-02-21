<h1>Mariano</h1>
<?php
include 'conexion.php';
$query = "SELECT id_cajon, numero,status,Ocupado FROM cajon ORDER BY numero";
$ejecutar = $conexion->query($query);
echo "<div class='row'>";
while ($result = $ejecutar->fetch_array()) {
    echo "<div class='col-sm-3'>
        <div class='card' style='width: 13rem;'>
        <img src='imagenes/coche.png' class='card-img-top'>
        <div class='card-body'>
        <h5 class='card-title'>Cajon " . $result['numero'] . "</h5>";
        if($result['status']==1){
            $query2 = "SELECT * FROM registro INNER JOIN vehiculo ON vehiculo.id_vehiculo = registro.id_vehiculo INNER JOIN cajon ON cajon.id_cajon = registro.id_cajon INNER JOIN tarifas ON tarifas.Id_tarifa = registro.id_tarifa INNER JOIN encargado ON encargado.id_encargado = registro.id_encargado WHERE registro.id_cajon = '".$result['id_cajon']."' and fechaSalida Is NULL";
            $ejecutar2=$conexion->query($query2);
            while($result2=$ejecutar2->fetch_array()){
                echo "<h4> Matricula: ".$result2['matricula']."</h4>";
                echo "<p>".$result2['fechaIngreso']." ".$result2['horaIngreso']."</p>";
                echo "<p>".$result2['tarifa']." ".$result2['monto']." por hora</p>";
                echo "<p>".$result2['nombre']."</p>";
            }
            echo "<div class='row'><div class='col-md-6'><a href='#' class='btn btn-warning' onclick='actualizarCajon2(".$result['id_cajon'].");'>Salir</a></div>";
            if($result['Ocupado']==0){
                echo "<div class='col-md-4'><img src ='imagenes/coche.png' width='100'/></div></div>";
            }else{
                echo "<div class='col-md-4'><img src='imagenes/coche.png' width='100'/></div></div>";
            }
        }else{
            echo "<p class='card-text'> No existe un vehículo ocupando este cajon.</p>";
            echo "<div class='row'><div class='col-md-6'><a href='#' class='btn btn-info' onclick='abrirModal(".$result['id_cajon'].");'>Ocupar</a></div>";
            if($result['Ocupado']==0){
                echo "<div class='col-md-4'><img src ='imagenes/coche.png' width='100'/></div></div>";
            }else{
                echo "<div class='col-md-4'><img src='imagenes/coche.png' width='100'/></div></div>";
            }
        }
    echo "</div></div></div>";
}
?>

<div class="modal" id="modalPromociones">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Registrar uso de estacionamiento</h4>
                <button type="button " class="close" data-dismiss="modal" onclick="cerrarModal();"></button>
            </div>

            <div class="modal-body">
                <form id="frmregistro" name="registro"><br>
                    <div class="form-outline mb-4">
                        <input type="hidden" name="id_cajon" id="id_cajon" value="" class="form-control" readonly />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="vehiculos">Vehiculos</label>
                        <select class="form-control" name="id_vehiculo" id="id_vehiculo">
                            <option value="">Selecciona un vehiculo</item>
                            <?php 
                            include 'conexion.php';
                            $query="SELECT id_vehiculo, matricula FROM vehiculo";
                            $ejecutar=$conexion->query($query);
                            while($result=$ejecutar->fetch_array()) {
                                echo "<option value='".$result['id_vehiculo']."'>".$result['matricula']." </option>";
                            }                         
                            ?>
                            </select>
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="tarifa">Tarifa</label>
                        <select class="form-control" name="id_tarifa" id="id_tarifa">
                        <option value="">Selecciona una tarifa</item>
                            <?php 
                            $query="SELECT id_tarifa, tarifa, monto FROM tarifas";
                            $ejecutar=$conexion->query($query);
                            while($result=$ejecutar->fetch_array()) {
                                echo "<option value='".$result['id_tarifa']."'>".$result['tarifa'].".-".$result['monto']."</option>";
                            }                         
                            ?>
                            </select>
                    </div>

                    <div class="text-center pt-1mb-5 pb-1">
                        <input type="button" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"onclick="registrarAcceso();" value="Registrar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>