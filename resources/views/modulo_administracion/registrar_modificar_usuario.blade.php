<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('js/validaciones_formulario.js') }}"></script>
    <title>Registrar o modificar {{$usuario}}</title>
</head>
<body>

    @if($registrar_modificar == "registrar")
        Nuevo {{$usuario}}

        <br>
        <br>
    
        <div>
            <form action="{{ url('/modulo_administracion/procesar_administracion_usuarios_2') }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="registrar_modificar" value="registrar">
                <input type="hidden" name="tabla" value="{{$usuario}}">
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
                        <td><input type="text" name="cedula" id="cedula"></td>
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
                        <td>Nombre de {{$usuario}}</td>
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

    @else
        Modificar {{$usuario}}

        <br>
        <br>
    
        <div>
            <form action="{{ url('/modulo_administracion/procesar_administracion_usuarios_2') }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="registrar_modificar" value="modificar">
                <input type="hidden" name="tabla" value="{{$usuario}}">
                <input type="hidden" name="id" value="{{$datos_usuario->id}}">
                <table>
                    <tr>
                        <td>Nombres</td>
                        <td><input type="text" name="nombres" id="nombres" value="{{$datos_usuario->nombres}}"></td>
                    </tr>
                    <tr>
                        <td>Apellidos</td>
                        <td><input type="text" name="apellidos" id="apellidos" value="{{$datos_usuario->apellidos}}"></td>
                    </tr>
                    <tr>
                        <td>Cédula</td>
                        <td><input type="text" name="cedula" id="cedula" value="{{$datos_usuario->cedula}}"></td>
                    </tr>
                    <tr>
                        <td>Correo</td>
                        <td><input type="text" name="correo" id="correo" value="{{$datos_usuario->correo}}"></td>
                    </tr>
                    <tr>
                        <td>Teléfono de contacto</td>
                        <td><input type="text" name="telefono" id="telefono" value="{{$datos_usuario->telefono}}"></td>
                    </tr>
                    <tr>
                        <td>Nombre de {{$usuario}}</td>
                        <td><input type="text" name="nombre_usuario" id="nombre_usuario" value="{{$datos_usuario->nombre_usuario}}"></td>
                    </tr>
                    <tr>
                        <td>Contraseña</td>
                        <td><input type="password" name="contraseña" id="contraseña" value="{{$datos_usuario->contraseña}}"></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="enviar" id="enviar" value="Enviar">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    @endif

    <br>
    <br>

    <div id="mensaje">
        @isset($mensaje_servidor)
            {{$mensaje_servidor}}
        @endisset
    </div>

    <br>
    <br>

    <a href="{{ url('/modulo_administracion/administracion_usuarios') }}">
        <input type="button" value="Regresar">
    </a>

</body>
</html>