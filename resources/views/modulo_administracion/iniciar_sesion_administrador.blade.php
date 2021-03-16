<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('js/validaciones_formulario.js') }}"></script>
    <link href="{{ asset('css/inicio_session.css') }}" rel="stylesheet">

    <title>Iniciar sesión administrador</title>
</head>
<body>

    <div class="contenedor">

        <header>
            <a href="" class="logo"></a>
            <span></span>
            <span></span>
            <span></span>
            <a href="{{ url('/') }}">
                <input type="button" value="Regresar">
            </a>

        </header>

        <div class="login_contenedor">

            <div class="login">
                <div class="login_title"><h2>Login</h2></div>
                <form action="">

                <label for="">Usuario</label>
                    <input type="text">
                <label for="">Password</label>
                    <input type="password">
                <input type="submit" name="enviar" value="Enviar">
                </form>

            </div>

        </div>        
    </div>

    <div id="mensaje">
        @isset($mensaje_servidor)
            {{$mensaje_servidor}}
        @endisset
    </div>

</body>
</html>