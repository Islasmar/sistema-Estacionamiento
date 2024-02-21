<div class="table-response">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Matricula</th>
                <th scope="col">Modelo</th>
                <th scope="col">Tipo</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'conexion.php';
            $query="SELECT id_vehiculo,id_cliente,matricula,modelo,tipo FROM vehiculo";
            $ejecutar=$conexion->query($query);
            while($result=$ejecutar->fetch_array()){
                echo "<tr>
                <td>".$result['matricula']."</td>
                <td>".$result['modelo']."</td>
                <td>".$result['tipo']."</td>
                <td><a href='#' onclick = 'editarvehiculo (".$result['id_vehiculo'].");'>Editar</a></td>
                <td><a href='#' onclick = 'eliminarvehiculo (".$result['id_vehiculo'].");'>Eliminar</a></td>
                <tr>";
            }
            ?>            
        </tbody>
    </table>

</div>