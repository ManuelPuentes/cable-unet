<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('js/validaciones_formulario.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <title>Iniciar sesión suscriptor</title>
</head>
<body>


<div class="container">

<div class="row justify-content-center align-items-center vh-100">

    <div class="col-4">
        <form class= "form-control" action="{{ url('/modulo_suscriptor/procesar_iniciar_sesion') }}" method="post">
            {{ csrf_field() }}

                <div class="input-group mb-3 text-align-center">
                    <h2 class="text-center">Login Usuario</h2>
                </div>

                <div class="input-group mb-3">
                    <input type="text"  name="nombre_usuario" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon2">
                </div>
                <div class="input-group mb-3">
                    <input type="password"  name="contraseña" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon2">
                </div>
                <input class= "btn btn-primary mt-1"  type="submit" name="enviar" value="Enviar">
        </form>
    </div>
</div>
</div>


    
    <!-- <div>
        <form action="{{ url('/modulo_suscriptor/procesar_iniciar_sesion') }}" method="post">
            {{ csrf_field() }}
            <table>
                <tr>
                    <td>Usuario</td>
                    <td>
                        <input type="text" name="nombre_usuario">
                    </td>
                </tr>
                <tr>
                    <td>Contraseña</td>
                    <td>
                        <input type="password" name="contraseña">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="enviar" value="Enviar">
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <br>
    <br> -->

    <div id="mensaje">
        @isset($mensaje_servidor)
            {{$mensaje_servidor}}
        @endisset
    </div>

    <br>
    <br>

    <a href="{{ url('/') }}">
        <input type="button" value="Regresar">
    </a>

</body>
</html>