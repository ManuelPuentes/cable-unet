<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <a href="{{ url('/modulo_administracion/iniciar_sesion') }}">
        <input type="button" value="Iniciar sesión administrador">
    </a>

    <br>
    <br>

    <a href="{{ url('/modulo_suscriptor/iniciar_sesion') }}">
        <input type="button" value="Iniciar sesión suscriptor">
    </a>

    <br>
    <br>

    <a href="{{ url('/modulo_suscriptor/registrar') }}">
        <input type="button" value="Registrar suscriptor">
    </a>
</body>
</html>