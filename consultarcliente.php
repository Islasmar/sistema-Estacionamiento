<div class="table-responsive">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Dirección</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Correo</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'conexion.php';
            $query="SELECT id_cliente,nombre,direccion,telefono,correo FROM cliente";
            $ejecutar=$conexion->query($query);
            while($result=$ejecutar->fetch_array()){
                echo "<tr>
                <td>".$result['nombre']."</td>
                <td>".$result['direccion']."</td>
                <td>".$result['telefono']."</td>
                <td>".$result['correo']."</td>
                <td><a href='#' onclick = 'editarCliente (".$result['id_cliente'].");'>Editar</a></td>
                <td><a href='#' onclick = 'eliminarCliente (".$result['id_cliente'].");'>Eliminar</a></td>
                <tr>";
            }
            ?>            
        </tbody>
    </table>

</div>