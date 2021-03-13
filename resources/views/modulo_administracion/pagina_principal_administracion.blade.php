<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal administración</title>
</head>
<body>
    
    <a href="{{ url('/modulo_administracion/pagina_creacion_de_servicios') }}">
        <input type="button" value="Creación de servicios">
    </a>

    <br>
    <br>

    <a href="{{ url('/modulo_administracion/pagina_carga_de_canales') }}">
        <input type="button" value="Cargar canal">
    </a>

    <br>
    <br>

    <a href="{{ url('/modulo_administracion/programacion/agregar') }}">
        <input type="button" value="Agregar programación">
    </a>

    <br>
    <br>

    <a href="{{ url('/modulo_administracion/factura_mensual') }}">
        <input type="button" value="Factura mensual usuario">
    </a>

    <br>
    <br>

    <a href="{{ url('/modulo_administracion/solicitudes_cambio') }}">
        <input type="button" value="Solicitudes de cambio de paquete de servicios">
    </a>

    <br>
    <br>

    <a href="{{ url('/modulo_administracion/administracion_usuarios') }}">
        <input type="button" value="Administración de usuarios">
    </a>

    <br>
    <br>

    <a href="{{ url('/modulo_administracion/cerrar_sesion') }}">
        <input type="button" value="Cerrar sesión">
    </a>

</body>
</html>