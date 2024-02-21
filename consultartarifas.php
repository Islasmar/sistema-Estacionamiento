<div class="table-response">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Tarifa</th>
                <th scope="col">Monto</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'conexion.php';
            $query="SELECT Id_tarifa,tarifa,monto FROM tarifas";
            $ejecutar=$conexion->query($query);
            while($result=$ejecutar->fetch_array()){
                echo "<tr>
                <td>".$result['tarifa']."</td>
                <td>".$result['monto']."</td>
                <td><a href='#' onclick = 'editartarifas (".$result['Id_tarifa'].");'>Editar</a></td>
                <td><a href='#' onclick = 'eliminartarifas (".$result['Id_tarifa'].");'>Eliminar</a></td>
                <tr>";
            }
            ?>            
        </tbody>
    </table>

</div>