<div class="table-response">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Distancia</th>
                <th scope="col">Status</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'conexion.php';
            $query="SELECT id_proximidad,distancia,status FROM sensor_proximidad";
            $ejecutar=$conexion->query($query);
            while($result=$ejecutar->fetch_array()){
                echo "<tr>
                <td>".$result['distancia']."</td>
                <td>".$result['status']."</td>
                <td><a href='#' onclick = 'editarProximidad (".$result['id_proximidad'].");'>Editar</a></td>
                <td><a href='#' onclick = 'eliminarProximidad (".$result['id_proximidad'].");'>Eliminar</a></td>
                <tr>";
            }
            ?>            
        </tbody>
    </table>

</div>