<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página creación de servicios</title>
</head>
<body>
    
    <a href="{{ url('/modulo_administracion/pagina_creacion_de_servicios/cable') }}">
        <input type="button" value="Cable">
    </a>
    
    <br>
    <br>

    <a href="{{ url('/modulo_administracion/pagina_creacion_de_servicios/internet') }}">
        <input type="button" value="Internet">
    </a>

    <br>
    <br>

    <a href="{{ url('/modulo_administracion/pagina_creacion_de_servicios/telefonia') }}">
        <input type="button" value="Telefonía">
    </a>

    <br>
    <br>

    <a href="{{ url('/modulo_administracion/pagina_crear_paquete_servicio') }}">
        <input type="button" value="Paquete de servicio">
    </a>

    <br>
    <br>

    <a href="{{ url('/modulo_administracion/pagina_principal_administracion') }}">
        <input type="button" value="Regresar">
    </a>

</body>
</html>