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


    <title>Iniciar sesión administrador</title>
</head>
<body>


    <div class="container" style="background-image: ../css/logo.jpg">

        <div class="row justify-content-center align-items-center vh-100">

            <div class="col-4">
                <form class= "form-control" action="{{ url('/modulo_administracion/procesar_iniciar_sesion') }}" method="post">
                    {{ csrf_field() }}

                        <div class="input-group mb-3 text-align-center">
                            <h2 class="text-center">Login Administrador</h2>
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


    <div id="mensaje">
        @isset($mensaje_servidor)
            {{$mensaje_servidor}}
        @endisset
    </div>

</body>
</html>