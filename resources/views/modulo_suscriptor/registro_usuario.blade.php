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
    <title>Registrar suscriptor</title>
</head>
<body>


    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-4">
        
                <form class="form-control" action="{{ url('/modulo_suscriptor/procesar_registrar') }}" method="post">
                    {{ csrf_field() }}

                    <div class="input-group mb-3 text-align-center">
                    <h2 class="text-center">Registrate</h2>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" name ="nombres" id="nombres" class="form-control" placeholder="Nombres" aria-label="Nombres" aria-describedby="basic-addon2">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text"  name="apellidos" id="apellidos" class="form-control" placeholder="Apellidos" aria-label="Nombres" aria-describedby="basic-addon2">
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" name="cedula" id="cedula" class="form-control" placeholder="Cedula" aria-label="Nombres" aria-describedby="basic-addon2">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="correo" id="correo" class="form-control" placeholder="Correo" aria-label="Nombres" aria-describedby="basic-addon2">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Telefono" aria-label="Nombres" aria-describedby="basic-addon2">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="nombre_usuario" id="nombre_usuario" class="form-control" placeholder="Nombre de Usuario" aria-label="Nombres" aria-describedby="basic-addon2">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="contraseña" id="contraseña" class="form-control" placeholder="Contraseña" aria-label="Nombres" aria-describedby="basic-addon2">
                    </div>

                    <div class="input-group mb-3">
                        <input class="btn btn-primary" type="submit" name="enviar" id="enviar" value="Enviar">
                    </div>                                                                                   

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