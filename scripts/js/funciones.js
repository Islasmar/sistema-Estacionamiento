function cargarDiv(div, url) {
    $(div).load(url);
}

function salir() {
    alert("Salir del sistema");
    window.location = "logout.php";
}

function registrarCajon() {
    var numero = $("#numero").val();
    var status = $("#status").val();


    $.post("registrarcajon.php", {
        "numero": numero,
        "status": status
    },
        function (result) {
            alert(result);
            $("#numero").val("");
            $("#status").val("");
            cargarDiv($("#result"),'consultarcajones.php');
        });
}

function registrarCliente() {
    var nombre = $("#nombre").val();
    var direccion = $("#direccion").val();
    var telefono = $("#telefono").val();
    var correo = $("#correo").val();

    $.post("registrarcliente.php", {
        "nombre": nombre,
        "direccion": direccion,
        "telefono": telefono,
        "correo": correo
    },
        function (result) {
            alert(result);
            $("#nombre").val("");
            $("#direccion").val("");
            $("#telefono").val("");
            $("#correo").val("");
            cargarDiv($("#result"),'consultarcliente.php');

        }
    )
}

function registrarEncargados() {
    var nombre = $("#nombre").val();
    var direccion = $("#direccion").val();
    var telefono = $("#telefono").val();
    var correo = $("#correo").val();
    var usuario = $("#usuario").val();
    var contrasena = $("#contrasena").val();

    $.post("registrarencargados.php", {
        "nombre": nombre,
        "direccion": direccion,
        "telefono": telefono,
        "correo": correo,
        "usuario": usuario,
        "contrasena": contrasena
    },
        function (result) {
            alert(result);
            $("#nombre").val("");
            $("#direccion").val("");
            $("#telefono").val("");
            $("#correo").val("");
            $("#usuario").val("");
            $("#contrasena").val("");
            cargarDiv($("#result"),'consultarencargados.php');
        }
    )
}

function registrarVehiculo() {
    var id_cliente = $("#id_cliente").val();
    var matricula = $("#matricula").val();
    var modelo = $("#modelo").val();
    var tipo = $("#tipo").val();

    $.post("registrarvehiculo.php", {
        "id_cliente": id_cliente,
        "matricula": matricula,
        "modelo": modelo,
        "tipo": tipo,
    },
        function (result) {
            alert(result);
            $("id_cliente").val("");
            $("#matricula").val("");
            $("#modelo").val("");
            $("#tipo").val("");
            cargarDiv($("#result"),'consultarvehiculo.php')
        }
    )
}

function registrarAcceso() {
    var idvehiculo = $("#id_vehiculo").val();
    var idcajon = $("#id_cajon").val();
    var idtarifa = $("#id_tarifa").val();


    $.post("registrarregistro.php", {
        "id_vehiculo": idvehiculo,
        "id_cajon": idcajon,
        "id_tarifa": idtarifa,
    },
    function (result) {
        alert(result);
        $("#id_vehiculo").val("");
        $("#id_cajon").val("");
        $("#id_tarifa").val("");
        cerrarModal();
        cargarDiv($("#result"),'inicio.php')
    }
    );

}

function registrarTarifa() {
    var tarifa = $("#tarifa").val();
    var monto = $("#monto").val();


    $.post("registrartarifa.php", {
        "tarifa": tarifa,
        "monto": monto
    },
        function (result) {
            alert(result);
            $("#tarifa").val("");
            $("#monto").val("");
        });
        cargarDiv($("#result"),'consultartarifas.php')
}


function registrarSensor() {
    var humedad = $("#humedad").val();
    var temperatura = $("#temperatura").val();


    $.post("registrarsensor.php", {
        "humedad": humedad,
        "temperatura": temperatura
    },
        function (result) {
            alert(result);
            $("#humedad").val("");
            $("#temperatura").val("");
            cargarDiv($("#result"),'consultarsensor.php');

        }
    )
}


function eliminarCliente(id_cliente){
    $.post("eliminarcliente.php",{
        "id_cliente": id_cliente
    },
    function (result){
        alert (result);
        cargarDiv($("#result"),'consultarcliente.php')
    });
}

function eliminarencargados(id_encargado){
    $.post("eliminarencargado.php",{
        "id_encargado": id_encargado
    },
    function (result){
        alert (result);
        cargarDiv($("#result"),'consultarencargados.php')
    });
}

function eliminarregistro(id_registro){
    $.post("eliminarregistro.php",{
        "id_registro": id_registro
    },
    function (result){
        alert (result);
        cargarDiv($("#result"),'consultarregistro.php')
    });
}

function eliminarcajon(id_cajon){
    $.post("eliminarcajones.php",{
        "id_cajon": id_cajon
    },
    function (result){
        alert (result);
        cargarDiv($("#result"),'consultarcajones.php')
    });
}

function eliminarvehiculo(id_vehiculo){
    $.post("eliminarvehiculos.php",{
        "id_vehiculo": id_vehiculo
    },
    function (result){
        alert (result);
    });
    cargarDiv($("#result"),'consultarvehiculo.php')
};

function eliminartarifas(id_tarifa){
    $.post("eliminartarifas.php",{
        "Id_tarifa": id_tarifa
    },
    function (result){
        alert (result);
    });
    cargarDiv($("#result"),'consultartarifas.php')
};

function eliminarsensor(id_sensor){
    $.post("eliminarsensor.php",{
        "id_sensor": id_sensor
    },
    function (result){
        alert (result);
        cargarDiv($("#result"),'consultarsensor.php')
    });
}

function editarCliente(id_cliente){
    $.post("actualizarcliente.php",{
        "id_cliente": id_cliente
    },
    function(respuesta){
        contenido.innerHTML = respuesta;
    });
}

function actualizarcliente(id_cliente){
    var nombre = $("#nombre").val();
    var direccion = $("#direccion").val();
    var telefono = $("#telefono").val();
    var correo = $("#correo").val();

    $.post("updatecliente.php", {
        "id_cliente": id_cliente,
        "nombre": nombre,
        "direccion": direccion,
        "telefono": telefono,
        "correo": correo
    },
        function (result) {
            alert(result);
            cargarDiv($("#contenido"),'clientes.php');

        }
    )

}

function editarregistro(id_registro){
    $.post("actualizarregistro.php",{
        "id_registro": id_registro
    },
    function(respuesta){
        contenido.innerHTML = respuesta;
    });
}

function actualizarRegistro(id_registro){
    var idvehiculo = $("#id_vehiculo").val();
    var idcajon = $("#id_cajon").val();
    var idtarifa = $("#id_tarifa").val();

    $.post("updateregistro.php", {
        "id_registro":id_registro,
        "id_vehiculo":idvehiculo,
        "id_cajon":idcajon,
        "id_tarifa":idtarifa
    },
        function (result) {
            alert(result);
            cargarDiv($("#contenido"),'registrar.php');

        }
    )

}

function editarcajon(id_cajon){
    $.post("actualizarcajones.php",{
        "id_cajon": id_cajon
    },
    function(respuesta){
        contenido.innerHTML = respuesta;
    });
}

function actualizarCajon(id_cajon){
    var numero = $("#numero").val();
    var status = $("#status").val();

    $.post("updatecajones.php", {
        "id_cajon": id_cajon,
        "numero": numero,
        "status": status,
    },
        function (result) {
            alert(result);
            cargarDiv($("#contenido"),'cajones.php');

        }
    )

}


function editarvehiculo(id_vehiculo){
    $.post("actualizarvehiculos.php",{
        "id_vehiculo": id_vehiculo
    },
    function(respuesta){
        contenido.innerHTML = respuesta;
    });
}

function actualizarVehiculo(id_vehiculo){
    var matricula = $("#matricula").val();
    var modelo = $("#modelo").val();
    var tipo = $("#tipo").val();

    $.post("updatevehiculos.php", {
        "id_vehiculo": id_vehiculo,
        "matricula": matricula,
        "modelo": modelo,
        "tipo": tipo
    },
        function (result) {
            alert(result);
            cargarDiv($("#contenido"),'vehiculo.php');

        }
    )

}

function editartarifas(Id_tarifa){
    $.post("actualizartarifa.php",{
        "Id_tarifa": Id_tarifa
    },
    function(respuesta){
        contenido.innerHTML = respuesta;
    });
}

function actualizarTarifa(Id_tarifa){
    var tarifa = $("#tarifa").val();
    var monto = $("#monto").val();

    $.post("updatetarifa.php", {
        "Id_tarifa": Id_tarifa,
        "tarifa": tarifa,
        "monto": monto,
    },
        function (result) {
            alert(result);
            cargarDiv($("#contenido"),'tarifas.php');

        }
    )

}

function editarencargados(id_encargado){
    $.post("actualizarencargados.php",{
        "id_encargado": id_encargado
    },
    function(respuesta){
        contenido.innerHTML = respuesta;
    });
}

function actualizarEncargados(id_encargado){
    var nombre = $("#nombre").val();
    var direccion = $("#direccion").val();
    var telefono = $("#telefono").val();
    var correo = $("#correo").val();
    var usuario = $("#usuario").val();

    $.post("updateencargado.php", {
        "id_encargado": id_encargado,
        "nombre": nombre,
        "direccion": direccion,
        "telefono": telefono,
        "correo": correo,
        "usuario": usuario
    },
        function (result) {
            alert(result);
            cargarDiv($("#contenido"),'encargados.php');

        }
    )

}


function editarsensor(id_sensor){
    $.post("actualizarsensor.php",{
        "id_sensor": id_sensor
    },
    function(respuesta){
        contenido.innerHTML = respuesta;
    });
}

function actualizarSensor(id_sensor){
    var humedad = $("#humedad").val();
    var temperatura = $("#temperatura").val();

    $.post("updatesensor.php", {
        "id_sensor": id_sensor,
        "humedad": humedad,
        "temperatura": temperatura,
    },
        function (result) {
            alert(result);
            cargarDiv($("#contenido"),'sensorhumedad.php');

        }
    )

}

function abrirModal(idcajon) {
    alert(idcajon)
    $("#modalPromociones").modal("show");
    $("#id_cajon").val(idcajon)
}

function cerrarModal() {
    $("#modalPromociones").modal('hide');
    cargarDiv($("#contenido"),'inicio.php');
}

function actualizarCajon2(idcajon) {
    $.post("updatecajon.php", {
        "id_cajon": idcajon
    },
        function (result) {
            alert(result);
            cargarDiv($("#contenido"), 'inicio.php');
            
        }

    )
}