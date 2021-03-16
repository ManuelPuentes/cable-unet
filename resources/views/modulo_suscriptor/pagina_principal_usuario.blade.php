<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal usuario</title>
</head>
<body>

    <a href="{{url('/modulo_suscriptor/ver_servicios_contratar')}}">
        <input type="button" value="Ver o contratar paquetes de servicios">
    </a>

    <br>
    <br>

    <a href="{{url('/modulo_suscriptor/factura_mensual')}}">
        <input type="button" value="Factura mensual">
    </a>

    <br>
    <br>

    <a href="{{url('/modulo_suscriptor/cambiar_paquete_servicios')}}">
        <input type="button" value="Cambiar paquete de servicios">
    </a>

    <br>
    <br>

    <a href="{{url('/modulo_suscriptor/buscar_programacion')}}">
        <input type="button" value="Buscar programación de canal">
    </a>

    <br>
    <br>

    <a href="{{url('/modulo_suscriptor/cerrar_sesion')}}">
        <input type="button" value="Cerrar sesión">
    </a>
</body>
</html>