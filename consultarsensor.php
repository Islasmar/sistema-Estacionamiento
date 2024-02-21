<div class="table-response">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Humedad</th>
                <th scope="col">Temperatura</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'conexion.php';
            $query="SELECT id_sensor,humedad,temperatura FROM sensor_humedad";
            $ejecutar=$conexion->query($query);
            while($result=$ejecutar->fetch_array()){
                echo "<tr>
                <td>".$result['humedad']."</td>
                <td>".$result['temperatura']."</td>
                <td><a href='#' onclick = 'editarsensor (".$result['id_sensor'].");'>Editar</a></td>
                <td><a href='#' onclick = 'eliminarsensor (".$result['id_sensor'].");'>Eliminar</a></td>
                <tr>";
            }
            ?>            
        </tbody>
    </table>

</div>