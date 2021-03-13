<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('js/validaciones_formulario.js') }}"></script>
    <title>Registrar suscriptor</title>
</head>
<body>

    Nuevo suscriptor

    <br>
    <br>
    
    <div>
        <form action="{{ url('/modulo_suscriptor/procesar_registrar') }}" method="post">
            {{ csrf_field() }}
            <table>
                <tr>
                    <td>Nombres</td>
                    <td><input type="text" name="nombres" id="nombres"></td>
                </tr>
                <tr>
                    <td>Apellidos</td>
                    <td><input type="text" name="apellidos" id="apellidos"></td>
                </tr>
                <tr>
                    <td>Cédula</td>
                    <td><input type="number" name="cedula" id="cedula"></td>
                </tr>
                <tr>
                    <td>Correo</td>
                    <td><input type="text" name="correo" id="correo"></td>
                </tr>
                <tr>
                    <td>Teléfono de contacto</td>
                    <td><input type="text" name="telefono" id="telefono"></td>
                </tr>
                <tr>
                    <td>Nombre de usuario</td>
                    <td><input type="text" name="nombre_usuario" id="nombre_usuario"></td>
                </tr>
                <tr>
                    <td>Contraseña</td>
                    <td><input type="password" name="contraseña" id="contraseña"></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="enviar" id="enviar" value="Enviar">
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <br>
    <br>

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